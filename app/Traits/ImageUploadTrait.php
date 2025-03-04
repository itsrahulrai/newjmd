<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

trait ImageUploadTrait
{

    public function uploadImage(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }

    public function updateImage(Request $request, $inputName, $path, $oldPath = null)
    {
        if ($request->hasFile($inputName)) {
            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);

            return $path . '/' . $imageName;
        }
    }

    public function deleteImage(string $path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }


    public function uploadPDF(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {
            $file = $request->{$inputName};
            $ext = $file->getClientOriginalExtension();

            // Check if the file extension is PDF
            if ($ext === 'pdf') {
                $fileName = 'document_' . uniqid() . '.' . $ext;
                $file->move(public_path($path), $fileName);
                return $path . '/' . $fileName;
            } else {
                return false; // Return false if the file extension is not PDF
            }
        } else {
            return false; // Return false if no file is uploaded
        }
    }




    public function updatePdf(Request $request, $inputName, $path, $existingFilePath = null)
    {
        if ($request->hasFile($inputName)) {
            $file = $request->{$inputName};
            $ext = $file->getClientOriginalExtension();

            // Check if the file extension is PDF
            if ($ext === 'pdf') {
                $fileName = 'document_' . uniqid() . '.' . $ext;
                $file->move(public_path($path), $fileName);

                // Delete the existing PDF file if it exists
                if ($existingFilePath && file_exists(public_path($existingFilePath))) {
                    unlink(public_path($existingFilePath));
                }

                return $path . '/' . $fileName;
            } else {
                return false; // Return false if the file extension is not PDF
            }
        } else {
            return false; // Return false if no file is uploaded
        }
    }



    public function uploadMultiImage(Request $request, $inputName, $path)
    {
        $uploadedImages = [];

        if ($request->hasFile($inputName)) {
            $images = $request->file($inputName);

            foreach ($images as $image) {
                $ext = $image->getClientOriginalExtension();
                $imageName = 'media_' . uniqid() . '.' . $ext;
                $image->move(public_path($path), $imageName);

                $uploadedImages[] = $path . '/' . $imageName;
            }
        }

        return $uploadedImages;
    }


    public function updateMultiImage(Request $request, $inputName, $path, $existingImages = [])
    {
        $uploadedImages = [];

        // Handle new uploads
        if ($request->hasFile($inputName)) {
            $images = $request->file($inputName);

            // Delete existing images
            foreach ($existingImages as $existingImage) {
                $existingImagePath = public_path($existingImage);
                if (file_exists($existingImagePath) && is_file($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }

            // Save new images
            foreach ($images as $image) {
                $ext = $image->getClientOriginalExtension();
                $imageName = 'media_' . uniqid() . '.' . $ext;
                $image->move(public_path($path), $imageName);

                $uploadedImages[] = $path . '/' . $imageName;
            }
        }

        return $uploadedImages;
    }
}
