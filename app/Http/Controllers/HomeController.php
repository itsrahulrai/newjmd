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
        $CustomerSay = Testimonial::latest()->get();
        return view('front.index', compact('categories','CustomerSay'));
    }
    
    public function Products(Request $request)
    {
        $categories = Category::whereNull('parent_id')->orderBy('name', 'asc')->get();
    
        $products = Product::when($request->category_id, fn($query) => $query->where('category_id', $request->category_id))
                           ->when($request->subcategory_id, fn($query) => $query->where('subcategory_id', $request->subcategory_id))
                           ->latest()
                           ->paginate(6);
    
        return $request->ajax() 
            ? view('front.partials.products-list', compact('products'))->render() 
            : view('front.products', compact('categories', 'products'));
    }
    


        public function show($slug)
        {
            $product = Product::where('slug', $slug)->firstOrFail();
            return view('front.products-details', compact('product'));
        }
   
        public function blogs()
        {
            $blogs = Blog::latest()->paginate(1);
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

            
        public function Enquiry(Request $request)
        {
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
                'message' => 'required|string',
            ]);

            try {
                Contact::create([
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'state' => $request->state,
                    'district' => $request->district,
                    'city' => $request->city,
                    'pincode' => $request->pincode,
                    'option' => $request->option,
                    'message' => $request->message,
                ]);

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
                        ");
                });

                return back()->with('success', 'Your enquiry has been submitted!');

            } catch (\Exception $e) {
                return back()->with('error', 'Failed to process your enquiry: ' . $e->getMessage());
            }
        }



}
