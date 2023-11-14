<x-guest-layout> 

    <form method="POST" action="{{ route('insertar-coche') }}"> @csrf <!-- Name --> <div> <x-input-label for="marca"
        :value="__('Marca')" /> <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca"
        :value="old('marca')" required autofocus autocomplete="marca" /> <x-input-error
        :messages="$errors->get('marca')" class="mt-2" /> </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="nombre" :value="__('Nombre')" />
            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"
                required autocomplete="nombre" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="color" :value="__('Color')" />

            <x-text-input id="color" class="block mt-1 w-full" type="text" name="color" required autocomplete="color" />

            <x-input-error :messages="$errors->get('color')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="precio" :value="__('Precio')" />

            <x-text-input id="precio" class="block mt-1 w-full" type="number" name="precio" required
                autocomplete="precio" />

            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Insertar Coche') }}
            </x-primary-button>
        </div>
    </form>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


    <x-primary-button class="ms-4">
    <a href="dashboard">Atras</a>
    </x-primary-button>

    </x-guest-layout>