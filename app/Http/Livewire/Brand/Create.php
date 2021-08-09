<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Create extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required'
    ];

    public function store()
    {
        Brand::create($this->validate());

        $this->alert('success','Marca cadastrada com sucesso!');

        $this->reset('name');
    }
    public function render()
    {
        return view('livewire.brand.create');
    }
}
