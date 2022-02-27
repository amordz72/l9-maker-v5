<?php

namespace App\Http\Livewire\Code\Project;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.code.project.create');
    }
     protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.content' => 'required|string|max:500',
    ];

    public function save()
    {
        $this->validate();

        $this->post->save();
    }
}
