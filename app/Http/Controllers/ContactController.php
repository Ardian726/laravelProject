<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('livewire.pages.contactFrom')->layout("template.app");
    }
}
