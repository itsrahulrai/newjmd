<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogMedia;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->get();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        try {
            $thumbnailPath = $this->uploadImage($request, 'thumbnail', 'uploads/thumbnails');
            $blog = Blog::create([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'content' => $request->content,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
                'og_title' => $request->og_title,
                'og_description' => $request->og_description,
                'thumbnail' => $thumbnailPath,
            ]);
            if ($request->hasFile('images')) {
                $imagesPaths = $this->uploadMultiImage($request, 'images', 'uploads/images');
                foreach ($imagesPaths as $imagePath) {
                    $blog->media()->create([
                        'path' => $imagePath,
                    ]);
                }
            }
            session()->flash('success', 'Blog created successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            \Log::error('Error creating blog: ' . $e->getMessage());
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
        $blog = Blog::with('media')->findOrFail($id);
        $categories = Category::where('status', 'active')->get();
        return view('admin.blogs.create', compact('blog', 'categories'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        try {
            $blog = Blog::findOrFail($id);
            $blog->category_id = $request->category_id;
            $blog->name = $request->name;
            $blog->slug = Str::slug($request->name);
            $blog->content = $request->content;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keywords = $request->meta_keywords;
            $blog->og_title = $request->og_title;
            $blog->og_description = $request->og_description;

            if ($request->hasFile('image')) {
                $this->deleteImage($testimonial->image);
                $thumbnail->thumbnail = $this->updateImage($request, 'thumbnail', 'uploads/thumbnail', $thumbnail->image);
            }
            $blog->save();
            if ($request->hasFile('images')) {
                $blog->media()->delete();
                $imagesPaths = $this->uploadMultiImage($request, 'images', 'uploads/images');
                foreach ($imagesPaths as $imagePath) {
                    $blog->media()->create([
                        'path' => $imagePath,
                    ]);
                }
            }
            session()->flash('success', 'Blog updated successfully!');
            return redirect()->route('admin.blogs.index');
        } catch (Exception $e) {
            \Log::error('Error updating blog: ' . $e->getMessage());
            session()->flash('error', 'There was an error updating the blog.');
            return redirect()->back();
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if ($blog->thumbnail) {
                $this->deleteImage($blog->thumbnail);
            }
            foreach ($blog->media as $image) {
                $this->deleteImage($image->path);
                $image->delete();
            }
            $blog->delete();

            return response(['status' => 'success', 'message' => 'Blog deleted successfully!']);
        } catch (Exception $e) {
            \Log::error('Error deleting blog: ' . $e->getMessage());
            return response(['status' => 'error', 'message' => 'Error deleting blog.'], 500);
        }
    }

    public function MultipleImageDestroy(string $id)
    {
        $blog = BlogMedia::findOrFail($id);
        $blog->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }

    /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $blog = Blog::FindorFail($request->id);
        $blog->status = $request->status == 'true' ? 'active' : 'inactive';
        $blog->save();
        return response(['message' => 'Status has been updated!']);
    }
}
