<nav class="h-10v bg-nav flex flex-row justify-center items-center
	space-x-3 p-1">
    @auth
        <a href="{{route("jugadores.index")}}" class="btn  btn-sm  btn-primary">Jugadores</a>
    @endauth
</nav>
