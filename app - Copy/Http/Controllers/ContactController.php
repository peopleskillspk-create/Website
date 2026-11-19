<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'organisation' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['nullable', 'string', 'max:40'],
            'interest' => ['required', 'string', 'max:60'],
            'message' => ['nullable', 'string', 'max:3000'],
        ]);

        $data += [
            'organisation' => null,
            'phone' => null,
            'message' => null,
        ];

        Mail::to('connect@peopleskills.pk')->send(new ContactFormSubmitted($data));

        return redirect()
            ->route('contact')
            ->with('contact_success', "Thanks, {$data['name']} — your message has been sent. We'll be in touch shortly.");
    }
}
