@include('partials.stylesnav')

<nav>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            {{-- @auth
         <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth --}}


                <a href="{{ url('/') }}" class="{{ request()->routeIs('/') ? 'font-semibold text-red-900' : 'font-semibold text-gray-900'}} hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                {{--  @dump(request()->routeIs('welcome'))  --}}
                <a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'font-semibold text-red-900' : 'font-semibold text-gray-900'}} ml-4  hover:text-gray-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cursos</a>
                {{--  @dump(request()->routeIs('cursos.index'))  --}}
                <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'font-semibold text-red-900' : 'font-semibold text-gray-900'}} ml-4  hover:text-gray-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nosotros</a>
                {{--  @dump(request()->routeIs('nosotros'))  --}}
                <a href="{{ route('contactanos.index') }}" class="{{ request()->routeIs('contactanos.index') ? 'font-semibold text-red-900' : 'font-semibold text-gray-900'}} ml-4  hover:text-gray-400 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contáctanos</a>
        </div>
    </div>
</nav>
