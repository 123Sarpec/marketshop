@props([
'url' => '/',
'active' => false
])

<div>
    <a href="{{ $url }}"
        class="bg-blue-600 hover:bg-blue-500
              text-white font-semibold py-2.5 px-5 rounded-lg
              transition duration-200 cursor-pointer
              shadow-sm hover:shadow-md">
        {{ $slot }}
    </a>
</div>