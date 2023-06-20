<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class HomeAdminComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.home-admin-component')->layout("template.app");
    }
}
