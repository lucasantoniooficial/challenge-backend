<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;

class Index extends Component
{
    public $search;

    protected $queryString = [
        'search' => ['execept' => '']
    ];

    public function render()
    {
        $brands = Brand::where('name', 'like',"%{$this->search}%")->paginate(15);
        return view('livewire.index', compact('brands'));
    }
}
