<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Livewire\Component;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

    #[Url]
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        info($this->search);
        return view('livewire.users', [
            'users' => User::
            where('name','LIKE', "%{$this->search}%")->
            orWhere('email','LIKE', "%{$this->search}%")->
            paginate(5),
        ]);
    }

    public function delete($id) {
        User::find($id)->delete();
    }
}

