<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crea tu Producto') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('productos.index')}}" class="bg-blue-300 px-5 mx-5 rounded-full hover:bg-blue-600 hover:text-white">Volver a la lista</a>
                <form action="{{route('productos.store')}}" method="POST">
                    @csrf
                <div id="formulario" class="">
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Nombre:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('name')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <input type="text" name="name" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Costo:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('cost')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <input type="text" name="cost" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Marca:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('mark')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <input type="text" name="mark" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Estado:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('description')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <select name="status" id="" class="rounded-lg border-3 border-red-300">
                                <option value="0">Desactivado</option>
                                <option value="1">Activo</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Crear" class="bg-blue-300 hover:bg-blue-600 hover:text-white font-semibold m-3 rounded-full">
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>