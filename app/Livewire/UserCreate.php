<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\{Country, State, City};

class UserCreate extends Component
{
    public $name, $email, $country_id, $state_id, $city_id;

    public $countries, $states, $cities;

    public function mount()
    {
        $this->countries = Country::get();
        $this->states = [];
        $this->cities = [];
    }

    public function render()
    {
        return view('livewire.user-create');
    }

    public function submitUser() {
        $this->validate([
            'country_id'=>'required',
            'name'=>'required'
        ]);
    }

    #[On('change-country')]
    public function changeCountry() {
        $this->states = State::where('country_id', $this->country_id)->get();
        $this->state_id = null;
        $this->cities = [];
    }
    #[On('change-state')]
    public function changeState() {
        $this->cities = City::where('state_id', $this->state_id)->get();
        $this->city_id = null;
    }
}

