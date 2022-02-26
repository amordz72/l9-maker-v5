<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Grid extends Component
{
    public $new=true;
    public function render()
    {
        return view('livewire.post.grid')->layout('layouts.bs');
    }
}
