<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="my-5 mx-3">Bienvenido {{ auth()->user()->name }} </h1>
                <hr />

                <h2 class="my-5 mx-3">Estos son los productos disponibles en la tienda: </h2>

                @livewire('products-table')
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="my-5 mx-3">Ultimas ventas </h1>
                <p class="my-5 mx-3">Trabajando... </p>
                <hr />
            </div>
        </div>
    </div>
</x-app-layout>
