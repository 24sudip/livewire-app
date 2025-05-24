<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class AllPost extends Component
{
    use WithPagination;

    public $title, $body, $postAdd = false, $postUpdate = false, $postId, $search;

    public function render()
    {
        // $this->posts =
        return view('livewire.all-post', [
            'posts' => Post::latest()
            ->where("title","LIKE","%{$this->search}%")
            ->orWhere("body","LIKE","%{$this->search}%")
            ->paginate(4)
        ]);
    }

    public function resetField() {
        $this->title = "";
        $this->body = "";
    }

    public function addPost() {
        $this->postAdd = true;
        $this->postUpdate = false;
        $this->resetField();
    }

    public function cancel() {
        $this->postAdd = false;
        $this->postUpdate = false;
    }

    public function storePost() {
        $this->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        Post::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
        session()->flash('success', 'Post Created Successfully.');
        $this->postAdd = false;
        $this->resetField();
        $this->dispatch("close-modal");
    }

    public function editPost($id) {
        $post = Post::find($id);
        $this->title = $post->title;
        $this->body = $post->body;
        $this->postId = $post->id;
        $this->postUpdate = true;
        $this->postAdd = false;
    }

    public function updatePost() {
        $this->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $post = Post::find($this->postId);
        $post->title = $this->title;
        $post->body = $this->body;
        $post->save();
        session()->flash('success', 'Post Updated Successfully.');
        $this->postUpdate = false;
        $this->resetField();
        $this->dispatch("close-modal");
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        session()->flash('success', 'Post Deleted Successfully.');
    }
}

