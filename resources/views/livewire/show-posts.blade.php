<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de productos') }}

        </h2>
    </x-slot>
    {{$search}}
    
    <div class="px-6 py-4">
        {{--<input type="text"wire:model="search">--}}
        <x-jet-input class="w-full" placeholder="Escriba que quiere buscar" type="text" wire:model="search"/>
    </div>
    @if ($posts->count())

    @else
    <div class="px-6 py-4">
        No existe ningun registro coincidente
    </div>
    @endif
</div>
