<?php

namespace App\Http\Livewire\Code\Project;

use Livewire\Component;

class Index extends Component
{

    public $sh_tbl=false;
    public function render()
    {
        return view('livewire.code.project.index')->layout('layouts.bs');
    }
}
