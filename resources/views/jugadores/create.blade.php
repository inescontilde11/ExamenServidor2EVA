@extends("layouts.layout")

@section("content")
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">
            <form action="{{route('jugadores.store')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <x-input-label for="dni">Dni</x-input-label>
                <x-text-input type="text" name="dni"/>
                <x-input-error class="mt-2" :messages="$errors->get('dni')"/><br>

                <x-input-label for="nombre">Nombre</x-input-label>
                <x-text-input type="text" name="nombre"/>
                <x-input-error class="mt-2" :messages="$errors->get('nombre')"/><br>

                <x-input-label for="email">Email</x-input-label>
                <x-text-input type="email" name="email"/>
                <x-input-error class="mt-2" :messages="$errors->get('email')"/><br>

                <x-input-label for="nick">Nick</x-input-label>
                <x-text-input type="text" name="nick"/>
                <x-input-error class="mt-2" :messages="$errors->get('nick')"/><br>

                <x-input-label for="password">Password</x-input-label>
                <x-text-input type="password" name="password"/>
                <x-input-error class="mt-2" :messages="$errors->get('password')"/><br>

                <x-primary-button>Enviar</x-primary-button>
            </form>
        </div>
    </div>
@endsection
@section("title")
    Crear jugador
@endsection
@section("desc")
    En este formulario puedes insertar un jugador

@endsection
