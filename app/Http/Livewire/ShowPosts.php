<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class ShowPosts extends Component
{
    public $search;
    
    public function render()
    {
        $posts= Product:: where('name','like','%'. $this->search .'%')
        ->orwhere('description','like','%'. $this->search .'%')->get();

        return view('livewire.show-posts',compact('posts')); 


    }
}
