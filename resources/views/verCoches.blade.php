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
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>