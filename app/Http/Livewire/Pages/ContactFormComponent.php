<?php

namespace App\Http\Livewire\Pages;

use App\Mail\ContactMail;
use Livewire\Component;
use livewire\Request;
use Mail;

class ContactFormComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.contact-form-component')->layout("template.app");
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'msg' => $request->msg
        ];

        Mail::to('ardia678@smk.belajar.id')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully');
    }
}
