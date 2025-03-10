<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\ImageUploadTrait;


class CategoryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::whereNull('parent_id')->latest()->get();
        return view('admin.category.index', compact('categories'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|unique:categories,name',
            ]);
            $thumbnailPath = $this->uploadImage($request, 'image', 'uploads/thumbnails');
            Category::create([
                'name' => $request->name,
                'icon' => $request->icon,
                'slug' => Str::slug($request->name),
                'image' => $thumbnailPath,
            ]);
            session()->flash('success', 'Category created successfully.');
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong: ' . $e->getMessage());
        }
        return redirect()->back();
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::FindorFail($id);
        return view('admin.category.create', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
   


     public function update(Request $request, string $id)
     {
         try {
             $request->validate([
                 'name' => 'required|unique:categories,name,' . $id,
             ]);
             $category = Category::findOrFail($id);
             $thumbnailPath = $category->image;
     
             if ($request->hasFile('image')) {
                 if ($category->image && file_exists(public_path($category->image))) {
                     unlink(public_path($category->image));
                 }
                 $thumbnailPath = $this->uploadImage($request, 'image', 'uploads/thumbnails');
             }
             $category->update([
                 'name' => $request->name,
                 'icon' => $request->icon,
                 'slug' => Str::slug($request->name),
                 'image' => $thumbnailPath,
             ]);
     
             session()->flash('success', 'Category updated successfully.');
         } catch (\Exception $e) {
             session()->flash('error', 'Something went wrong: ' . $e->getMessage());
         }
     
         return redirect()->back();
     }
     


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id); 
        $category->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }

    /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $category = Category::FindorFail($request->id);
        $category->status = $request->status == 'true' ? 'active' : 'inactive';
        $category->save();
        return response(['message' => 'Status has been updated!']);
    }
}
