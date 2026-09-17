<!-- @php
$isActive = request()->is('productos');
echo $isActive ? 'active' : '';
@endphp -->
<header class="bg-white border-b border-gray-200 shadow-sm">
    <nav>
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">

                <a href="/" class="flex items-center gap-2">
                    <div class="w-9 h-9 bg-red-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">MS</span>
                    </div>
                    <span class="text-2xl font-bold text-gray-800 ">
                        Market<span class="text-red-600">Shop</span>
                    </span>
                </a>
                <div class=" hidden md:flex items-center gap-6">
                    <x-nav-link url="/" :active="request()->is('/')" title="paginaInicio">Inicio</x-nav-link>
                    <x-nav-link url="/productos" :active="request()->is('productos')" title="productos">Todos los Productos</x-nav-link>
                    <x-nav-link url="/login" :active="request()->is('login')" title="login">Iniciar Sesión</x-nav-link>
                    <x-nav-link url="/register" :active="request()->is('register')" title="register">Registrarse</x-nav-link>

                    <x-button-link url="/productos/create" title="crear">Crear Producto</x-button-link>

                </div>


                <!-- boton para abrir el menu movil -->
                <button
                    type="button"
                    id="btnMenu"
                    class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none"
                    aria-label="Abrir menú"
                    aria-expanded="false">

                    <!-- ICONO HAMBURGUESA -->
                    <svg id="iconMenu" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!-- ICONO X -->
                    <svg id="iconClose" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- navegacion para movil  de forma vertiacl   -->
    <nav class="hidden md:hidden border-t border-gray-800 bg-gray-50 " id="navegacionMovil">

        <div class="max-w-7xl mx-auto px-6 py-4 ">
            <div class="flex flex-col gap-2">
                <!-- <div class="flex items-center gap-6"> -->
                <x-nav-link url="/" :active="request()->is('/')" title="paginaInicio">Inicio</x-nav-link>
                <x-nav-link url="/productos" :active="request()->is('productos')" title="productos">Todos los Productos</x-nav-link>
                <x-nav-link url="/login" :active="request()->is('login')" title="login">Iniciar Sesión</x-nav-link>
                <x-nav-link url="/register" :active="request()->is('register')" title="register">Registrarse</x-nav-link>
                <x-button-link url="/productos/create" title="crear">Crear Producto</x-button-link>

                <!-- </div> -->
            </div>
        </div>
    </nav>

</header>