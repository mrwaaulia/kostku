<?php

namespace App\Livewire\Dashboard\Pengelola;

use Livewire\Component;

class Index extends Component
{
    // Tentukan layout yang dipakai oleh komponen ini
    public string $layout = 'components.layouts.app';
    public function render()
    {
        return view('livewire.dashboard.pengelola.index');
    }
}
