<?php

namespace App\Http\Livewire\Car;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $car;

    protected $listeners = [
        'confirmed',
    ];

    public function delete(Car $car)
    {
        $this->car = $car;

        $this->confirm("Você realmente deseja excluir o carro: {$car->model} ?",[
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
        $this->car->delete();

        $this->alert('success','Carro excluída com sucesso!');
    }

    public function render()
    {
        $cars = Car::paginate(15);

        return view('livewire.car.index', compact('cars'));
    }
}
