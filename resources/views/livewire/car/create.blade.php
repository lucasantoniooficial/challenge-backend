<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Carro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow bg-white overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <form wire:submit.prevent="store" class="p-2">
                        <div class="col-span-6 sm:col-span-3 mb-2">
                            <label for="brand" class="block text-sm font-medium text-gray-700">Marca</label>
                            <select type="text" wire:model.defer="brand_id" id="brand" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <option value="">Selecione</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-2">
                            <label for="model" class="block text-sm font-medium text-gray-700">Modelo</label>
                            <input type="text" wire:model.defer="model" id="model" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="col-span-6 sm:col-span-3 mb-2">
                            <label for="vehicle_color" class="block text-sm font-medium text-gray-700">Cor do veículo</label>
                            <input type="text" wire:model.defer="color" id="vehicle_color" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <button class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cadastrar</button>
                        <a href="{{route('cars.index')}}" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
