<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Coche') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="{{ route('actualizar-coche', ['id' => $coche->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <!-- Your form fields go here -->
                        <div class="mb-4">
                            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ $coche->nombre }}" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="marca" class="block text-sm font-medium text-gray-700">Marca</label>
                            <input type="text" name="marca" id="marca" value="{{ $coche->marca }}" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                            <input type="text" name="precio" id="precio" value="{{ $coche->precio }}" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                            <input type="text" name="color" id="color" value="{{ $coche->color }}" class="mt-1 p-2 w-full border rounded-md">
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="bg-blue-500 text-black p-2 rounded-md">Actualizar Coche</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
