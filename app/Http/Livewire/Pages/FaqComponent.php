<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class FaqComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.faq-component')->layout("template.app");
    }
}
