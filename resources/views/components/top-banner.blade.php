@props([
'headding' => 'Encuentra lo que necesitas en nuestra tienda.', 'subtitulo' => 'Descubre nuestra amplia selección de productos y encuentra lo que necesitas en nuestra tienda.',
])
<section class="bg-blue-900  h-auto flex items-center justify-center">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl md-text-5xl font-bold text-white mb-5">
            {{ $headding }}
        </h2>
        <p class="text-lg md-text-xl text-white mb-4">
            {{ $subtitulo }}
        </p>
    </div>
</section>