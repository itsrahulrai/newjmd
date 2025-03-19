<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\InqueryMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $contacts = Contact::with('product')->latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function Enquiry()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'attachment' => 'nullable|file',
        ]);

        $subject = $request->subject;
        $messageBody = $request->message;
        $url = ''; // Optional button URL
        $attachment = $request->file('attachment'); 

        try {
            Mail::to($request->email)->send(new InqueryMail($subject, $messageBody, $url, $attachment));
            return back()->with('success', 'Email sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
}
