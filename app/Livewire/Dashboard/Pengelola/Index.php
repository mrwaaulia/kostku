<?php

namespace App\Livewire\Dashboard\Pengelola;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
    // Tentukan layout yang dipakai oleh komponen ini
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.dashboard.pengelola.index');
    }
}
