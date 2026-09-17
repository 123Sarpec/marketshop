<x-layout>
    <x-slot name="titulo">Agregar Producto</x-slot>

    <h1>Agregar Nuevo Producto</h1>
    <form action="{{ url('/productos') }}" method="post"
        class="max-w-md mx-auto mt-10 bg-white p-6 rounded-2xl shadow-lg border border-gray-200">

        @csrf

        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Crear producto
        </h2>

        <div class="mb-4">
            <label for="" class="block text-sm font-medium text-gray-700 mb-2">
                Nombre del producto
            </label>

            <input
                class="w-full px-4 py-2.5 rounded-lg border border-gray-300
                   text-gray-800 outline-none
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                   transition"
                type="text"
                name="nombre"
                placeholder="Nombre del producto">
        </div>

        <div class="mb-5">
            <label class="block text-sm font-medium text-gray-700 mb-2" for="">
                Descripción del producto
            </label>

            <input
                class="w-full px-4 py-2.5 rounded-lg border border-gray-300
                   text-gray-800 outline-none
                   focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                   transition"
                type="text"
                name="descripcion"
                placeholder="Descripción del producto">
        </div>

        <button
            class="w-full bg-red-600 hover:bg-red-500
               text-white font-semibold py-2.5 rounded-lg
               transition duration-200 cursor-pointer
               shadow-sm hover:shadow-md"
            type="submit">
            Crear
        </button>

    </form>

</x-layout>