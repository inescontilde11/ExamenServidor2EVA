@extends("layouts.layout")

@section("content")
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">

            <form action="{{route('jugadores.update', $jugador->dni)}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <!--PATCH se utiliza para los update (php artisan route:list --name=alumno)-->
                @method("PATCH")
                <x-input-label for="nombre">Nombre</x-input-label>
                <x-text-input type="text" name="nombre" value="{{$jugador->nombre}}"/>
                <x-input-error class="mt-2" :messages="$errors->get('nombre')"/><br>

                <x-input-label for="email">Email</x-input-label>
                <x-text-input type="email" name="email" value="{{$jugador->email}}"/>
                <x-input-error class="mt-2" :messages="$errors->get('email')"/><br>

                <x-input-label for="nick">Nick</x-input-label>
                <x-text-input type="text" name="nick" value="{{$jugador->nick}}"/>
                <x-input-error class="mt-2" :messages="$errors->get('nick')"/><br>

                <x-input-label for="password">Password</x-input-label>
                <x-text-input type="password" name="password" value="{{$jugador->password}}"/>
                <x-input-error class="mt-2" :messages="$errors->get('password')"/><br>

                <x-primary-button>Actualizar</x-primary-button>
            </form>
        </div>
    </div>
@endsection
@section("title")
    Editar jugador
@endsection
@section("desc")
    En este formulario se edita un jugador.
@endsection
