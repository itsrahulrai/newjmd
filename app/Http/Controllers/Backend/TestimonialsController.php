<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\File;

class TestimonialsController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'occupation' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $imagePath = $this->uploadImage($request, 'image', 'uploads/testimonial');
           Testimonial::create([
                'name' => $request->name,
                'occupation' => $request->occupation,
                'content' => $request->content,
                'image' => $imagePath,
            ]);
            session()->flash('success', 'Testimonial created successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            \Log::error('Error creating Testimonial: ' . $e->getMessage());
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
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.create', compact('testimonial'));  
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'occupation' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $testimonial = Testimonial::findOrFail($id);
            $testimonial->name = $request->name;
            $testimonial->occupation = $request->occupation;
            $testimonial->content = $request->content;
            if ($request->hasFile('image')) {
                $this->deleteImage($testimonial->image);
                $testimonial->image = $this->updateImage($request, 'image', 'uploads/testimonial', $testimonial->image);
            }
            $testimonial->save();

            session()->flash('success', 'Testimonial updated successfully!');
            return redirect()->route('admin.testimonials.index');
        } catch (\Exception $e) {
            \Log::error('Error updating Testimonial: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error updating Testimonial.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $testimonial = Testimonial::findOrFail($id);
            if ($testimonial->image) {
                $this->deleteImage($testimonial->image);
            }
            $testimonial->delete();
            session()->flash('success', 'Testimonial deleted successfully!');
            return redirect()->route('admin.testimonials.index');
        } catch (\Exception $e) {
            \Log::error('Error deleting testimonial: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error deleting testimonial.');
        }
    }

    /**
     * Status Change
     */
    public function changeStatus(Request $request)
    {
        $testimonial = Testimonial::FindorFail($request->id);
        $testimonial->status = $request->status == 'true' ? 'active' : 'inactive';
        $testimonial->save();
        return response(['message' => 'Status has been updated!']);
    }
}
