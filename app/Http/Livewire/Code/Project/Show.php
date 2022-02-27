<?php

namespace App\Http\Livewire\Code\Project;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.code.project.show');
    }

    public $postId;

    public function getPostProperty()
    {
        return Post::find($this->postId);
    }

    public function deletePost()
    {
        $this->post->delete();
    }
}
