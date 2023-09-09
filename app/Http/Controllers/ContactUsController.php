<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContactForm(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('contact');
    }
    public function contactUs(ContactFormRequest $request): \Illuminate\Contracts\Foundation\Application|Factory|View|Application
    {
        $validatedData = $request->validated();
        $contact = new Contact([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        $contact->save();
        return view('success')->with('message', 'Your message has been sent successfully!');
    }

}
