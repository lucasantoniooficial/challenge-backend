<?php

namespace App\Http\Livewire\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $brand;

    protected $listeners = [
      'confirmed',
    ];

    public function delete(Brand $brand)
    {
        $this->brand = $brand;

        $this->confirm("Você realmente deseja excluir a marca: {$brand->name} ?",[
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => "Sim",
            'cancelButtonText' => "Não",
            'onConfirmed' => "confirmed",
        ]);

    }

    public function confirmed()
    {
        $this->brand->delete();

        $this->alert('success','Marca excluída com sucesso!');
    }

    public function render()
    {
        $brands = Brand::paginate(15);

        return view('livewire.brand.index', compact('brands'));
    }
}
