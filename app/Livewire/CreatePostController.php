<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePostController extends Component
{
    public $title = '';
 
    public $content = '';
 
    public function save()
    {
        Post::create(
            $this->only(['title', 'content'])
        );
 
        session()->flash('status', 'Post successfully updated.');
 
        return $this->redirect('/posts');
    }
        
    public function render()
    {
        return view('livewire.create-post-view');
    }
}
