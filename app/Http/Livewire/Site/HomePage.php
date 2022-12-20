<?php

namespace App\Http\Livewire\Site;

use App\Models\Product;
use Livewire\Component;

class HomePage extends Component
{
    public $flag=0;
    public function addFlag(){
        $product=Product::find(1);
        $product->flag++;
        $product->update();
        $this->flag=$product->flag;

    }
    public function render()
    {

        return view('livewire.site.home-page')
        ->extends('site.layouts.master')
        ->section('body');
    }
}
