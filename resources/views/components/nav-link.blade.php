@props([
'url' => '/',
'active' => false,
'mobile' => false
])

@if($mobile)
<a href="{{ $url }}"
    class="relative text-gray-600 hover:text-red-600 font-medium transition 
   {{ $active ? 'text-red-600 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-0.5 after:bg-red-600' : '' }}">
    {{ $slot }}
</a>
@else
<a href="{{ $url }}"
    class="relative text-gray-600 hover:text-red-600 font-medium transition 
   {{ $active ? 'text-red-600 after:absolute after:left-0 after:right-0 after:bottom-0 after:h-0.5 after:bg-red-600' : '' }}">
    {{ $slot }}
</a>
@endif