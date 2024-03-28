<?php

namespace App\Livewire\Contacts;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')] 
class ListContact extends Component
{
    public function render()
    {
        return view('livewire.contacts.list-contact');
    }
}
