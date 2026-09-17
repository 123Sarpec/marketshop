<x-layout>
    <x-slot name="titulo">Productos</x-slot>
    <h1 class="text-2xl font-bold mb-6 text-center">Productos en tu Stock</h1>
    <ul>
        @forelse ($productos as $producto)
        <li class="list-none bg-gray-100 p-4 rounded-lg mb-4">
            <a href="{{ route('productos.show', $producto->id) }}"> {{ $producto->title }} - {{ $producto->descripcion }}
            </a>
        </li>
        @empty
        <li>No hay Productos en tu Stock</li>
        @endforelse
    </ul>
</x-layout>