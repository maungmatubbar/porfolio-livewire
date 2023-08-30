<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $posts = Post::with('user')->paginate(5);
        return view('livewire.post.index',['posts'=>$posts]);
    }
}
