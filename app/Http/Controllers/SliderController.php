<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title1' => 'required|string',
            'title2' => 'required|string',
            'title3' => 'required|string',
            'title4' => 'required|string',
            'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image4' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $sliderData = [
                'title1' => $request->title1,
                'title2' => $request->title2,
                'title3' => $request->title3,
                'title4' => $request->title4,
            ];

            foreach (['image1', 'image2', 'image3', 'image4'] as $imageField) {
                $sliderData[$imageField] = $this->uploadImage($request, $imageField, 'uploads/slider');
            }

            Slider::create($sliderData);

            session()->flash('success', 'Slider created successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Error creating gallery: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error creating gallery.');
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
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.create', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title1' => 'required|string',
            'title2' => 'required|string',
            'title3' => 'required|string',
            'title4' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $slider = Slider::findOrFail($id);
            $slider->update([
                'title1' => $request->title1,
                'title2' => $request->title2,
                'title3' => $request->title3,
                'title4' => $request->title4,
            ]);
            foreach (['image1', 'image2', 'image3', 'image4'] as $imageField) {
                if ($request->hasFile($imageField)) {
                    $this->deleteImage($slider->{$imageField});
                    $slider->{$imageField} = $this->uploadImage($request, $imageField, 'uploads/slider');
                }
            }
            $slider->save();

            session()->flash('success', 'Slider updated successfully!');
            return redirect()->route('admin.slider.index');
        } catch (\Exception $e) {
            \Log::error('Error updating slider: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error updating slider.');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $slider = Slider::findOrFail($id);
            foreach (['image1', 'image2', 'image3', 'image4'] as $imageField) {
                if ($slider->$imageField) {
                    $this->deleteImage($slider->$imageField);
                }
            }
            $slider->delete();

            return response(['status' => 'success', 'message' => 'Slider deleted successfully!']);
        } catch (\Exception $e) {
            \Log::error('Error deleting slider: ' . $e->getMessage());
            return response(['status' => 'error', 'message' => 'Error deleting slider.'], 500);
        }
    }

    /**
     * Status Change
     */
    public function changeStatus(Request $request)
    {
        $slider = Slider::FindorFail($request->id);
        $slider->status = $request->status == 'true' ? 'active' : 'inactive';
        $slider->save();
        return response(['message' => 'Status has been updated!']);
    }

}
