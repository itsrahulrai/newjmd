<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategories extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Category::whereNotNull('parent_id')->latest()->get();
        return view('admin.subcategory.index', compact('subcategories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.subcategory.create', compact('categories'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'parent_id' =>'required|exists:categories,id',
        ]);
        try {
            Category::create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'parent_id' => $request->parent_id,
            ]);
    
            session()->flash('success', 'Subcategory created successfully.');
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
    public function edit($id)
    {
        $subcategory = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.subcategory.create', compact('subcategory', 'categories'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'parent_id' => 'required|exists:categories,id',
        ]);
        try {
            $subcategory = Category::findOrFail($id);
            $subcategory->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'parent_id' => $request->parent_id,
            ]);
            session()->flash('success', 'Subcategory updated successfully.');
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
