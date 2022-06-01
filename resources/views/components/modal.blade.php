@props(['id', 'maxWidth'])

@php
$id = $id ?? md5($attributes->wire('model'));

switch ($maxWidth ?? '2xl') {
case 'sm':
$maxWidth = 'sm:max-w-sm';
break;
case 'md':
$maxWidth = 'sm:max-w-md';
break;
case 'lg':
$maxWidth = 'sm:max-w-lg';
break;
case 'xl':
$maxWidth = 'sm:max-w-xl';
break;
case '2xl':
default:
$maxWidth = 'sm:max-w-2xl';
break;
}
@endphp

<div id="{{ $id }}" x-data="{ show: @entangle($attributes->wire('model')) }" x-show="show" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" class="absolute inset-x-0 px-4 sm:px-0 sm:flex  sm:justify-center z-50 " style="display: none;">
    <div x-show="show" class="fixed inset-0 transition-all transform" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="fixed inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="show" class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }}" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        {{ $slot }}
    </div>
</div>
