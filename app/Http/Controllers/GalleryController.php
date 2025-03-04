<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Image;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::with('images')->get();       
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->get();
        return view('admin.gallery.create', compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $thumbnailPath = $this->uploadImage($request, 'thumbnail', 'uploads/thumbnails');
            $gallery = Gallery::create([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'thumbnail' => $thumbnailPath,
            ]);
            $imagesPaths = $this->uploadMultiImage($request, 'image_path', 'uploads/images');
            foreach ($imagesPaths as $imagePath) {
                $gallery->images()->create([
                    'image_path' => $imagePath,
                ]);
            }
            session()->flash('success', 'Gallery created successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            \Log::error('Error creating gallery: ' . $e->getMessage());
            return redirect()->back();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $MultipleGallery = Gallery::with('images')->findOrFail($id);
        return view('admin.gallery.show', compact('MultipleGallery'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $categories = Category::where('status', 'active')->get();
        return view('admin.gallery.create', compact('gallery', 'categories'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_path.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $gallery = Gallery::findOrFail($id);

            $gallery->category_id = $request->category_id;
            $gallery->title = $request->title;

            if ($request->hasFile('thumbnail')) {
                if (File::exists(public_path($gallery->thumbnail))) {
                    File::delete(public_path($gallery->thumbnail));
                }
                $thumbnailPath = $this->updateImage($request, 'thumbnail', 'uploads/thumbnails');
                $gallery->thumbnail = $thumbnailPath;
            }
            $gallery->save();
            if ($request->hasFile('image_path')) {
             $imagesPaths = $this->updateMultiImage($request, 'image_path', 'uploads/images');
                foreach ($imagesPaths as $imagePath) {
                    $gallery->images()->create([
                        'image_path' => $imagePath,
                    ]);
                }
            }
            session()->flash('success', 'Gallery updated successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            \Log::error('Error updating gallery: ' . $e->getMessage());
            return redirect()->back();
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $gallery = Gallery::findOrFail($id);
            if ($gallery->thumbnail) {
                $this->deleteImage($gallery->thumbnail);
            }
            foreach ($gallery->images as $image) {
                $this->deleteImage($image->image_path);
                $image->delete(); 
            }
            $gallery->delete();

            return response(['status' => 'success', 'message' => 'Gallery and images deleted successfully!']);
        } catch (Exception $e) {
            \Log::error('Error deleting gallery: ' . $e->getMessage());
            return response(['status' => 'error', 'message' => 'Error deleting gallery.'], 500);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function MultipleImageDestroy(string $id)
    {
        $image = Image::findOrFail($id);
        $image->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
    /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $gallery = Gallery::FindorFail($request->id);
        $gallery->status = $request->status == 'true' ? 'active' : 'inactive';
        $gallery->save();
        return response(['message' => 'Status has been updated!']);
    }
    /**
     * Status Change.
     */
    public function MultipleImageChangeStatus(Request $request)
    {        
        $image = Image::FindorFail($request->id);
        $image->status = $request->status == 'true' ? 'active' : 'inactive';
        $image->save();
        return response(['message' => 'Status has been updated!']);
    }

}
