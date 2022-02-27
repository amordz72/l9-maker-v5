<?php

namespace App\Http\Livewire\Code\Project;

use Livewire\Component;
use App\Models\Project;


class Table extends Component
{

    public  $project=array();

    public function render()
    {
$this->project=Project::all();

        return view('livewire.code.project.table');
    }


}
