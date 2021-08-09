<?php

namespace App\Http\Livewire\Car;

use App\Models\Brand;
use App\Models\Car;
use Livewire\Component;

class Create extends Component
{
    public $brand_id;
    public $model;
    public $color;

    protected $rules = [
        'brand_id' => 'required',
        'model' => 'required',
        'color' => 'required'
    ];

    public function store()
    {
        $data = $this->validate();

        Car::create($data);

        $this->reset([
            'brand_id',
            'model',
            'color'
        ]);

        $this->alert('success','Carro cadastrado com sucesso!');
    }

    public function render()
    {
        $brands = Brand::get();
        return view('livewire.car.create', compact('brands'));
    }
}
