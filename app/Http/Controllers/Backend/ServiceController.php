<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'name' => 'required|string',
            'description' => 'required',
            'link' => 'nullable|url', 
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);
        try {
            if ($request->hasFile('image')) {
                $imagePath = $this->uploadImage($request, 'image', 'uploads/images');
            }
            Service::create([
                'icon' => $request->icon,
                'name' => $request->name,
                'link' => $request->link,
                'description' => $request->description,
                'image' => $imagePath,
            ]);
           
            session()->flash('success', 'Service created successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            \Log::error('Error creating service: ' . $e->getMessage());
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

        $service = Service::findorFail($id);
        // dd($service);
        return view('admin.services.create', compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'icon' => 'required',
            'name' => 'required|string',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        try {
            $service = Service::findOrFail($id);
            if ($request->hasFile('image')) {
                if ($service->image) {
                    $this->deleteImage($service->image);
                }
                $imagePath = $this->updateImage($request, 'image', 'uploads/images');
            } else {
                $imagePath = $service->image;
            }
            $service->update([
                'icon' => $request->icon,
                'name' => $request->name,
                'link' => $request->link,
                'description' => $request->description,
                'image' => $imagePath,
            ]);
            session()->flash('success', 'Service updated successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            // Log any errors and redirect with error message
            \Log::error('Error updating service: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the service.']);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $service = Service::findOrFail($id);
            if ($service->image) {
                $this->deleteImage($service->image);
            }
            $service->delete();

            return response(['status' => 'success', 'message' => 'Blog deleted successfully!']);
        } catch (Exception $e) {
            \Log::error('Error deleting blog: ' . $e->getMessage());
            return response(['status' => 'error', 'message' => 'Error deleting blog.'], 500);
        }
    }


    /**
     * Status Change
     */
    public function changeStatus(Request $request)
    {
        $service = Service::FindorFail($request->id);
        $service->status = $request->status == 'true' ? 'active' : 'inactive';
        $service->save();
        return response(['message' => 'Status has been updated!']);
    }
}
