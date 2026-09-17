<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss-browser/4.3.3/index.global.js" integrity="sha512-11j7Mb+vY6TL1kQG4fUbs+0sZ770yqknHwGYYHeVpEB2ftG9IfkSWK7tdjQMBf5kXKgkHyerYcjQYEEX6muFDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/fontawesome.min.css" integrity="sha512-SMQ1DwSGiIDyNoXdQae7kUBADdtQa8Xsb3LxBxzAXExZNCCH/36yQSpZSYo1c6ckFshd1iMp9eD9+s9+tdhmyg==" crossorigin="anonymous" referrerpolicy="no-referrer"> @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title> {{ $titulo ?? ' MarketShop | Inicio' }} </title>
    <!-- <script src="navegacion/navegacion.js"></script> -->
</head>

<body class="bg-slate-200 min-h-screen">
    <!-- <h1>Bienvenido a Tu Tienda Online</h1> -->
    <x-header />
    @if(request()->is('/'))
    <x-hero />
    <x-top-banner />
    <!-- <x-button-banner /> -->
    @endif
    <main class="container mx-auto p-4 mt-4">
        {{ $slot }}
    </main>

    @vite('resources/js/navegacion/navegacion.js')

</html>