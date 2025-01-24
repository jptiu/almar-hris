<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\ActionForm;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class ActionFormController extends Controller
{

    public function index()
    {
        abort_unless(Gate::allows('hr_access'), 404);

        return view('pages.hr.emailrequest.index');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'file' => 'nullable|file|mimes:pdf|max:10240', // Validate file type and size (10MB max)
        ]);
    
        // Handle file upload and store it
        $filePath = null;
        if ($request->hasFile('file')) {
            // Store the file and get the path
            $filePath = $request->file('file')->store('attachments', 'public');
        }
    
        // Store the action form in the database with file path (if any)
        $actionForm = ActionForm::create([
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
            'file_path' => $filePath,  // Store file path in the database
        ]);
    
        // Send email via Mailtrap
        Mail::send([], [], function ($message) use ($actionForm, $filePath) {
            $message->to($actionForm->email)
                    ->subject($actionForm->subject)
                    ->html($actionForm->content);
    
            // If there's a file, attach it
            if ($filePath) {
                $message->attach(storage_path('app/public/' . $filePath), [
                    'as' => 'attachment.pdf',
                    'mime' => 'application/pdf',
                ]);
            }
        });
    
        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    
}

