<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
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
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        session()->flash('success', 'Category created successfully.');
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
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);
        Category::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        session()->flash('success', 'Category updated successfully.');
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
