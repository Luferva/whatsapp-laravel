<?php

namespace App\Livewire\Messages;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')] 
class WhatsappMessages extends Component
{
    public function render()
    {
        return view('livewire.messages.whatsapp-messages');
    }
}
