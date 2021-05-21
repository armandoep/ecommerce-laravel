<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        @if (session()->has('message'))
        <div id="alert" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
          <span class="inline-block align-middle mr-8">
            {{ session('message') }}
          </span>
          <button
            class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
            onclick="document.getElementById('alert').remove();">
            <span>×</span>
          </button>
        </div>
      @endif

        <form method="POST" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$product->name}}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="brand_id" value="{{ __('Brand') }}" />
                <select name="brand_id" id="brand_id" class="block mt-1 w-full rounded border-gray-300 ">
                    <option value="{{$product->brand->id }}">{{$product->brand->name }}</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="category_id" value="{{ __('Category') }}" />
                <select name="category_id" id="category_id" class="block mt-1 w-full rounded border-gray-300 ">
                    <option value="{{$product->category->id }}">{{$product->category->name }}</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="supplier_id" value="{{ __('Supplier') }}" />
                <select name="supplier_id" id="supplier_id" class="block mt-1 w-full rounded border-gray-300 ">
                    <option value="{{$product->supplier->id }}">{{$product->supplier->name }}</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="quantity" value="{{ __('Quantity') }}" />
                <x-jet-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" value="{{$product->quantity}}" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Price') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" value="{{$product->price}}" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Update') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
