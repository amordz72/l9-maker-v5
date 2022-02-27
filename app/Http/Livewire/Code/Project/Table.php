<?php

namespace App\Http\Livewire\Code\Project;

use App\Models\Project;
use Livewire\Component;

class Table extends Component
{

    public $projects = array();



    public function render()
    {

        return view('livewire.code.project.table', [
            'project' => Project::paginate(5),

        ]);
    }

}
