<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.product.create', compact('categories'));
    }
    
    public function getSubcategories(Request $request)
    {
        $subcategories = Category::where('parent_id', $request->category_id)->get();
        return response()->json($subcategories);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:categories,id',
            'name' => 'required|unique:products,name',
        ]);
        try {
            $thumbnailPath = $this->uploadImage($request, 'image','uploads/thumbnails');
            Product::create([
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => $thumbnailPath,
                'shortdesc' => $request->shortdesc,
                'desc' => $request->desc,
            ]);
            session()->flash('success', 'Product created successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong! ' . $e->getMessage());
        }

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function edit(string $id)
     {
        $product = Product::findOrFail($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.product.create', compact('categories', 'product'));
    }  
    

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, string $id)
     {
         $request->validate([
             'category_id' => 'required|exists:categories,id',
             'subcategory_id' => 'required|exists:categories,id',
             'name' => 'required|unique:products,name,' . $id,
         ]);
         try {
             $product = Product::findOrFail($id);
             if ($request->hasFile('image')) {
                $product->image && file_exists(public_path($product->image)) ? unlink(public_path($product->image)) : null;
                $product->image = $this->uploadImage($request, 'image', 'uploads/thumbnails');
            }
             $product->update([
                 'category_id' => $request->category_id,
                 'subcategory_id' => $request->subcategory_id,
                 'name' => $request->name,
                 'slug' => Str::slug($request->name),
                 'shortdesc' => $request->shortdesc,
                 'desc' => $request->desc,
             ]);
     
             session()->flash('success', 'Product updated successfully.');
         } catch (\Exception $e) {
             session()->flash('error', 'Something went wrong! ' . $e->getMessage());
         }
         return redirect()->back();
     }
     


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id); 
        if ($product->image) {
            $this->deleteImage($product->image);
        }
        $product->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }


    /**
     *  Status Change.
     */
   public function changeStatus(Request $request)
   {
       $product = Product::FindorFail($request->id);
       $product->status = $request->status == 'true' ? 'active' : 'inactive';
       $product->save();
       return response(['message' => 'Status has been updated!']);
   }
}
