<x-app-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="brand_id" value="{{ __('Brand') }}" />
                <select name="brand_id" id="brand_id" class="block mt-1 w-full rounded border-gray-300 ">
                    @foreach ($brands as $brand)
                    <option value="{{$brand->id }}">{{$brand->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="category_id" value="{{ __('Category') }}" />
                <select name="category_id" id="category_id" class="block mt-1 w-full rounded border-gray-300 ">
                    @foreach ($categories as $category)
                    <option value="{{$category->id }}">{{$category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="supplier_id" value="{{ __('Supplier') }}" />
                <select name="supplier_id" id="supplier_id" class="block mt-1 w-full rounded border-gray-300 ">
                    @foreach ($suppliers as $supplier)
                    <option value="{{$supplier->id }}">{{$supplier->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="quantity" value="{{ __('Quantity') }}" />
                <x-jet-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" :value="old('quantity')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Price') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Add') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
