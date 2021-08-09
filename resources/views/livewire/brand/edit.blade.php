<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Marca') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow bg-white overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <form wire:submit.prevent="update" class="p-2">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">Nome</label>
                            <input type="text" wire:model.defer="brand.name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <button class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Salvar</button>
                        <a href="{{route('brands.index')}}" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
