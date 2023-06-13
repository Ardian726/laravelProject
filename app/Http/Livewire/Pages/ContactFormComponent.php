<?php

namespace App\Http\Livewire\Pages;

use Mail;
use livewire\Request;
use App\Models\Contact;
use Livewire\Component;
use App\Mail\ContactMail;

class ContactFormComponent extends Component
{
    public $name;
    public $email;
    public $number;
    public $message;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'number' => 'required',
        'message' => 'required',
    ];

    public function submitForm()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'number' => $this->number,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'number', 'message']);
        $this->success = 'Your message has been submited successfully!';
    }

    // public function sendEmail(Request $request)
    // {
    //     $details = [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'number' => $request->number,
    //         'msg' => $request->msg
    //     ];

    //     Mail::to('ardia678@smk.belajar.id')->send(new ContactMail($details));
    //     return back()->with('message_sent', 'Your message has been sent successfully');
    // }

    public function render()
    {
        return view('livewire.pages.contact-form-component')->layout("template.app");
    }
}
