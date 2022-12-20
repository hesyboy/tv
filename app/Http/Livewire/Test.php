<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Test extends Component
{
    public $flag;

    public function mount($flag){
        $this->flag=$flag;

    }
    public function render()
    {
        // dd('hi');
        // $this->flag=Product::find(1)->flag;
        return view('livewire.test');
    }
}
