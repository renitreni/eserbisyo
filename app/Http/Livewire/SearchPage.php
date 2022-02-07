<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchPage extends Component
{
    public function render()
    {
        return view('livewire.search-page')->layout('layouts.guest');
    }
}
