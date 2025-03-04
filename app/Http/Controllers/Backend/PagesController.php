<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index' ,compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
           
        ]);

        try {
           Page::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
            ]);
            session()->flash('success', 'Page created successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Error creating page: ' . $e->getMessage());
            return redirect()->back();
        }
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
        $page = Page::findOrFail($id);
        return view('admin.pages.create', compact('page'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        try {
            $page = Page::findOrFail($id);
            $page->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_keywords' => $request->meta_keywords,
                'meta_description' => $request->meta_description,
            ]);

            session()->flash('success', 'Page updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Error updating page: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the page.']);
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $page = Page::findOrFail($id);
            $page->delete();
            return response(['status' => 'success', 'message' => 'Page deleted successfully!']);
        } catch (Exception $e) {
            \Log::error('Error deleting page: ' . $e->getMessage());
            return response(['status' => 'error', 'message' => 'Error deleting page.'], 500);
        }
    }
    /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $page = Page::FindorFail($request->id);
        $page->status = $request->status == 'true' ? 'active' : 'inactive';
        $page->save();
        return response(['message' => 'Status has been updated!']);
    }
}
