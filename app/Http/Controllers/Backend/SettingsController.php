<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\smtp;
use App\Models\Social;
use App\Models\Web;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $web = Web::first();
        $smtp = smtp::first();
        $social = Social::first();
        return view('admin.Settings.index', compact('web', 'smtp','social'));
    }

    public function webUpdate(Request $request, string $id = '1')
    {
        $request->validate([
            'logolight' => 'nullable|image',
            'logodark' => 'nullable|image',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'copyright' => 'required|string|max:255',
            'address' => 'required|string',
            'description' => 'nullable|string',
        ]);
        try {
            $web = Web::find($id) ?? new Web();
            if ($request->hasFile('logolight')) {
                if ($web->logolight) {
                    $this->deleteImage($web->logolight);
                }
                $web->logolight = $this->uploadImage($request, 'logolight', 'uploads/settings');
            }
            if ($request->hasFile('logodark')) {
                if ($web->logodark) {
                    $this->deleteImage($web->logodark);
                }
                $web->logodark = $this->uploadImage($request, 'logodark', 'uploads/settings');
            }
            $web->fill([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'copyright' => $request->copyright,
                'address' => $request->address,
                'description' => $request->description,
            ]);
            $web->save();
            session()->flash('success', 'Web settings updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Error occurred while updating settings: ' . $e->getMessage());
            session()->flash('error', 'An error occurred while updating settings.');
            return redirect()->back();
        }
    }


    public function smtpUpdate(Request $request, string $id = '1')
    {
        $request->validate([
            'smtp_host' => 'required|string|max:255',
            'smtp_port' => 'required|integer|min:1',
            'smtp_user' => 'required|string|max:255',
            'smtp_password' => 'required|string|max:255',
            'smtp_encryption' => 'nullable|string|in:tls,ssl',
            'from_email' => 'required|email|max:255',
            'from_name' => 'required|string|max:255',
        ]);
        try {
            $smtp = Smtp::find($id) ?? new Smtp();
            $smtp->fill([
                'smtp_host' => $request->smtp_host,
                'smtp_port' => $request->smtp_port,
                'smtp_user' => $request->smtp_user,
                'smtp_password' => $request->smtp_password,
                'smtp_encryption' => $request->smtp_encryption,
                'from_email' => $request->from_email,
                'from_name' => $request->from_name,
            ]);
            $smtp->save();
            session()->flash('success', 'SMTP settings updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Error occurred while updating SMTP settings: ' . $e->getMessage());
            session()->flash('error', 'An error occurred while updating SMTP settings.');
            return redirect()->back();
        }
    }

    public function socialUpdate(Request $request, string $id = '1')
    {        
        $request->validate([
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'twitter' => 'required|url',
            'youtube' => 'required|url',
            'linkedin' => 'required|url',
        ]);

        try {
            $social = Social::find($id) ?? new Social();
            $social->fill([
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
            ]);
            $social->save();
            session()->flash('success', 'Social settings updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            \Log::error('Error occurred while updating social settings: ' . $e->getMessage());
            session()->flash('error', 'An error occurred while updating social settings.');
            return redirect()->back();
        }
    }


}
