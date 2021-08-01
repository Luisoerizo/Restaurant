<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;


class PostsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search ;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $posts = Post::where('name','LIKE','%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(5);

        return view('livewire.admin.posts-index',compact('posts'));


    }
}