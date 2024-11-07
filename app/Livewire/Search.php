<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Product;

class Search extends Component
{
    public ?string $search = '';

    public function clear()
    {
        $this->search = '';
    }

    public function render()
    {
        $products = collect();

        if (strlen($this->search) > 3) {
            $products = Product::where('name', 'like', '%'.$this->search.'%')
                ->limit(10)
                ->get();
        }

        return view('livewire.search', compact('products'));
    }
}







