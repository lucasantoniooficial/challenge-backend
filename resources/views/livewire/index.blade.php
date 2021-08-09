<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" wire:model="search" placeholder="Digite uma marca">
            <div class="grid md:grid-cols-3 gap-4 mt-2">
                @foreach($brands as $brand)
                    <div class="bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                {{$brand->name}}
                            </h3>
                            @foreach($brand->cars as $car)
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    {{$car->model}} - Cor: {{$car->color}}
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            {{$brands->links()}}
        </div>
    </div>

</div>
