<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 my-4 rounded">
                    <a href="{{ route('users.create') }}">{{ __('Add') }}</a>
                </button>
                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="flex bg-white px-4 py-3 sm:px-6">
                                    <input wire:model="search"
                                        class="form-input rounded-md shadow-sm mt-1 mb-3 block w-full" type="text"
                                        placeholder="{{ __('Search') }}">
                                    <div class="form-input rounded-md shadow-sm mt-1 mb-3 ml-6 block">
                                        <select class="outline-none border-none " wire:model="perPage">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select>
                                    </div>
                                    @if ($search !== '')
                                        <button wire:click="clear"
                                            class="form-input rounded-md shadow-sm mt-1 mb-3 px-2 block">X</button>
                                    @endif
                                </div>
                                @if ($users->count())


                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Nombre
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Email
                                                </th>
                                                <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{ $user->id }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full"
                                                                    src="{{ $user->profile_photo_url }}"
                                                                    alt="{{ $user->name }}">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $user->name }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        {{ $user->email }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a href="#"
                                                            class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                        <a wire:click="$emit('triggerDelete',{{ $user->id }})"
                                                            href="#"
                                                            class="text-red-600 hover:text-red-900">{{ __('Delete') }}</a>
                                                        <button wire:click="$emit('triggerDelete',{{ $user->id }})"
                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{ __('Delete') }}</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                        {{ $users->links() }}
                                    </div>
                                @else
                                    <div class="bg-white px-4 py-3 border-t border-gray-500 sm:px-6">
                                        No hay resultados para la busqueda "{{ $search }}" en la página
                                        {{ $page }} al mostrar {{ $perPage }} por página
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {

            @this.on('triggerDelete', userId => {
                Swal.fire({
                    title: 'Are You Sure?',
                    text: 'User will be deleted!',
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Delete!'
                }).then((result) => {
                    if (result.value) {
                        @this.call('destroy', userId)
                    } else {
                        console.log("Canceled");
                    }
                });
            });
        })

    </script>
@endpush
