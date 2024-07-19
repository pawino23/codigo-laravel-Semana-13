<thead class="table-dark">
    <tr>
        <th scope="col" class="{{ setActivo('home') }}">
            <a href="{{ route('home') }}">Home</a>
        </th>
        <th scope="col" class="{{ setActivo('nosotros') }}">
            <a href="{{ route('nosotros') }}">Nosotros</a>
        </th>
        <th scope="col" class="{{ setActivo('servicios.index') }}">
            <a href="{{ route('servicios.index') }}">Servicios</a>
        </th>
        <th scope="col" class="{{ setActivo('contacto') }}">
            <a href="{{ route('contacto') }}">Contacto</a>
        </th>
        @guest
            <th scope="col" class="{{ setActivo('login') }}">
                <a href="{{ route('login') }}">Login</a>
            </th>
        @else
            <th scope="col">
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            </th>
        @endguest
    </tr>
</thead>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>