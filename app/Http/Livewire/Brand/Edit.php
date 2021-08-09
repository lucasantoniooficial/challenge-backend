<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;

class Edit extends Component
{
    public $brand;

    protected $rules = [
        'brand.name' => 'sometimes'
    ];

    public function mount(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function update()
    {
        $this->brand->update();

        $this->flash('success','Marca editada com sucesso!');

        return $this->redirectRoute('brands.index');
    }
    public function render()
    {
        return view('livewire.brand.edit');
    }
}
