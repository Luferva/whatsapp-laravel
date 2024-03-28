<?php

namespace App\Livewire\Contacts;

use Livewire\Component;

class ListContact extends Component
{
    public function render()
    {
        return view('livewire.contacts.list-contact')->layout('layouts.app');
    }
}
