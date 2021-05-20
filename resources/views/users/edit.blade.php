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

        <form method="POST" action="{{ route('users.update', $user->id) }}">
            @csrf
            @method('PUT')

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$user->email}}" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="Solo el usuario puede cambiar su contraseña" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Update') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
