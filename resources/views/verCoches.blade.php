<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<x-app-layout> <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table style="padding">
                        <tr>
                            <th>MARCA</th>
                            <th>NOMBRE</th>
                            <th>COLOR</th>
                            <th>PRECIO</th>
                        </tr>
                        @foreach($coches as $coche)
                        <tr>
                            <td>{{$coche->marca}}</td>
                            <td>{{$coche->nombre}}</td>
                            <td>{{$coche->color}}</td>
                            <td>{{$coche->precio}}</td>
                            <td>
                                <!-- Edit Button -->
                                <a href="{{ route('editar-coche', ['id' => $coche->id]) }}"
                                    class="btn btn-primary">Editar</a>

                                <!-- Delete Button -->
                                <form action="{{ route('eliminar-coche', ['id' => $coche->id]) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger text-black"
                                        onclick="return confirm('¿Estás seguro de eliminar este coche?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>