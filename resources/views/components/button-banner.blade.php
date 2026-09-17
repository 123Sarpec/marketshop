@props([
'headding' => 'Encuentra lo que necesitas en nuestra tienda.', 'subtitulo' => 'Descubre nuestra amplia selección de productos y encuentra lo que necesitas en nuestra tienda.',
])
<section class="container mx-auto my-6">
    <div class="bg-blue-900  h-auto flex items-center justify-between flex-col md:flex-row gap-5">

        <div>
            <h2 class="text-4xl md-text-5xl font-bold text-white mb-5">
                {{ $headding }}
            </h2>
            <p class="text-lg md-text-xl text-white mb-4">
                {{ $subtitulo }}
            </p>
        </div>
    </div>
</section>