<!-- seccion de hero  -->

@props([
'titulo' => 'Descubre lo mejor en moda'
])

<section class=" hero relative bg-cover bg-center bg-no-repeat h-80 flex items-center">
    <div class=" overlay"></div>
    <div class="container mx-auto text-center z-10">
        <h5 class="text-4xl md-text-5xl font-bold text-white mb-5">{{ $titulo }}</h3>
            <p class="text-lg md-text-xl text-white mb-4">Encuentra lo que necesitas en nuestra tienda.</p>

            <form class="block mx-5 md:mx-auto flex flex-col md:flex-row justify-center items-center md:space-x-4 gap-2">
                <input type="text" name="BNombreCompleto" placeholder="Busca tu producto..."
                    class="w-full md:w-72 px-4 py-2 focus:autline-none bg-white border-1 border-gray-100 rounded-lg" />
                <input type="text" name="Marca" id="Marca" placeholder="Ej. Marca"
                    class="w-full md:w-72 px-4 py-2 focus:autline-none bg-white border-1 border-gray-100 rounded-lg" />

                <button class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white focus:outline-none py-2 px-4 rounded-lg">
                    BUSCAR
                </button>

            </form>
    </div>

</section>