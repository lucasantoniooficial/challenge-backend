<?php

namespace App\Http\Livewire\Car;

use App\Models\Brand;
use App\Models\Car;
use Livewire\Component;

class Edit extends Component
{
    public $car;

    protected $rules = [
        'car.brand_id' => 'sometimes',
        'car.model' => 'sometimes',
        'car.color' => 'sometimes'
    ];

    public function mount(Car $car)
    {
        $this->car = $car;
    }

    public function update()
    {
        $this->car->update();

        $this->flash('success','Carro editado com sucesso!');

        return $this->redirectRoute('cars.index');
    }


    public function render()
    {
        $brands = Brand::get();
        return view('livewire.car.edit', compact('brands'));
    }
}
