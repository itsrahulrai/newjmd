<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent_id')->with('products')->orderBy('name', 'asc')->get();
        // dd($categories );
        // exit;
        
        $CustomerSay = Testimonial::latest()->get();
        $blogs = Blog::latest()->paginate(10);
        return view('front.index', compact('categories','CustomerSay','blogs'));
    }
    

        public function Products(Request $request, $slug = null)
        {
            $categories = Category::whereNull('parent_id')->orderBy('name', 'asc')->get();
            $category = $slug ? Category::where('slug', $slug)->first() : null;
            if ($slug && !$category) {
                return $request->ajax()
                    ? response()->json(['message' => 'Category not found'], 404)
                    : view('front.products', compact('categories'))->withErrors('Category not found.');
            }
    
            $products = Product::when($category, function ($query) use ($category) {
                return $query->where('category_id', $category->id)
                             ->orWhere('subcategory_id', $category->id);
            })->latest()->paginate(6);
            return $request->ajax()
                ? view('front.partials.products-list', compact('products'))->render()
                : view('front.products', compact('categories', 'products', 'category'));
        }
        


        public function show($slug)
        {
            $product = Product::where('slug', $slug)->firstOrFail();
            return view('front.products-details', compact('product'));
        }
   
        public function blogs()
        {
            $blogs = Blog::latest()->paginate(10);
            return view('front.blogs', compact('blogs'));
        }
        

        public function blogsDetails($slug)
        {
            $blog = Blog::where('slug', $slug)->firstOrFail();
            $latestBlogs = Blog::where('id', '!=', $blog->id)
                                ->latest()
                                ->take(5)
                                ->get(); 
        
            return view('front.blogs-details', compact('blog', 'latestBlogs'));
        }

            
        // public function Enquiry(Request $request)
        // {
        //     $request->validate([
        //         'fname' => 'required|string|max:255',
        //         'lname' => 'required|string|max:255',
        //         'email' => 'required|email|max:255',
        //         'phone' => 'required|digits:10',
        //         'state' => 'required|string|max:255',
        //         'district' => 'required|string|max:255',
        //         'city' => 'required|string|max:255',
        //         'pincode' => 'required|digits:6',
        //         'option' => 'required|string',
        //         'message' => 'required|string',
        //     ]);

        //     try {
        //         Contact::create([
        //             'fname' => $request->fname,
        //             'lname' => $request->lname,
        //             'email' => $request->email,
        //             'phone' => $request->phone,
        //             'state' => $request->state,
        //             'district' => $request->district,
        //             'city' => $request->city,
        //             'pincode' => $request->pincode,
        //             'option' => $request->option,
        //             'message' => $request->message,
        //         ]);

        //         Mail::send([], [], function ($message) use ($request) {
        //             $message->to('demo@gmail.com')
        //                 ->subject('New Enquiry Submission')
        //                 ->html("
        //                     <div style='max-width: 600px; margin: auto; font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
        //                         <div style='background: #28a745; color: #fff; padding: 15px; text-align: center; border-radius: 10px 10px 0 0;'>
        //                             <h2 style='margin: 0;'>New Enquiry Submission</h2>
        //                         </div>
        //                         <div style='padding: 20px; background: #fff; border-radius: 0 0 10px 10px;'>
        //                             <p style='font-size: 16px; color: #333;'><strong>Name:</strong> {$request->fname} {$request->lname}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>Email:</strong> {$request->email}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>Phone:</strong> {$request->phone}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>State:</strong> {$request->state}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>District:</strong> {$request->district}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>City:</strong> {$request->city}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>Pin Code:</strong> {$request->pincode}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>Option:</strong> {$request->option}</p>
        //                             <p style='font-size: 16px; color: #333;'><strong>Message:</strong> {$request->message}</p>
        //                         </div>
        //                         <div style='text-align: center; padding: 10px; font-size: 14px; color: #777;'>
        //                             <p>© " . date('Y') . " JMD. All rights reserved.</p>
        //                         </div>
        //                     </div>
        //                 ");
        //         });

        //         return back()->with('success', 'Your enquiry has been submitted!');

        //     } catch (\Exception $e) {
        //         return back()->with('error', 'Failed to process your enquiry: ' . $e->getMessage());
        //     }
        // }
       
        public function Enquiry(Request $request)
        {
            
            // Define a list of restricted words
            $restrictedWords = ['xxx', 'porn', 'sex', 'adult', 'viagra', 'escort']; // Add more as needed
        
            // Custom validation rule for message content
            $request->validate([
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|digits:10',
                'state' => 'required|string|max:255',
                'district' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'pincode' => 'required|digits:6',
                'option' => 'required|string',
                'message' => [
                    'required',
                    'string',
                    function ($attribute, $value, $fail) use ($restrictedWords) {
                        // Check for restricted words
                        foreach ($restrictedWords as $word) {
                            if (stripos($value, $word) !== false) {
                                $fail('Your message contains inappropriate content and cannot be submitted.');
                                return;
                            }
                        }
        
                        // Ensure the message contains only English characters (Latin letters, numbers, spaces, and common punctuation)
                        if (!preg_match('/^[A-Za-z0-9\s.,!?\'"-]+$/u', $value)) {
                            $fail('Your message must contain only English characters.');
                            return;
                        }
        
                        // Prevent mixed-language words (e.g., English + Russian together)
                        $words = explode(' ', $value);
                        foreach ($words as $word) {
                            if (!preg_match('/^[A-Za-z0-9.,!?\'"-]+$/', $word)) {
                                $fail('Your message must contain only English words.');
                                return;
                            }
                        }
                    },
                ],
            ]);
        
            try {
                // Save the enquiry
                Contact::create($request->all());
        
                // Send email notification
               // Send email notification
Mail::send([], [], function ($message) use ($request) {
    $message->to('demo@gmail.com')
        ->subject('New Enquiry Submission')
        ->html("
            <div style='max-width: 600px; margin: auto; font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);'>
                <div style='background: #28a745; color: #fff; padding: 15px; text-align: center; border-radius: 10px 10px 0 0;'>
                    <h2 style='margin: 0;'>New Enquiry Submission</h2>
                </div>
                <div style='padding: 20px; background: #fff; border-radius: 0 0 10px 10px;'>
                    <p style='font-size: 16px; color: #333;'><strong>Name:</strong> {$request->fname} {$request->lname}</p>
                    <p style='font-size: 16px; color: #333;'><strong>Email:</strong> {$request->email}</p>
                    <p style='font-size: 16px; color: #333;'><strong>Phone:</strong> {$request->phone}</p>
                    <p style='font-size: 16px; color: #333;'><strong>State:</strong> {$request->state}</p>
                    <p style='font-size: 16px; color: #333;'><strong>District:</strong> {$request->district}</p>
                    <p style='font-size: 16px; color: #333;'><strong>City:</strong> {$request->city}</p>
                    <p style='font-size: 16px; color: #333;'><strong>Pin Code:</strong> {$request->pincode}</p>
                    <p style='font-size: 16px; color: #333;'><strong>Option:</strong> {$request->option}</p>
                    <p style='font-size: 16px; color: #333;'><strong>Message:</strong> {$request->message}</p>
                </div>
                <div style='text-align: center; padding: 10px; font-size: 14px; color: #777;'>
                    <p>© " . date('Y') . " JMD. All rights reserved.</p>
                </div>
            </div>
        "); // Use html() instead of setBody()
});

        
                return back()->with('success', 'Your enquiry has been submitted!');
        
            } catch (\Exception $e) {
                return back()->with('error', 'Failed to process your enquiry: ' . $e->getMessage());
            }
        }
        


}
