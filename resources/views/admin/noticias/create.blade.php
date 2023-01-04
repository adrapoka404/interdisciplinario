<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Noticias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('noticias.index')}}" class="bg-blue-300 px-5 mx-5 rounded-full hover:bg-blue-600 hover:text-white">Volver a la lista</a>
                
                
                <form action="{{route('noticias.store')}}" method="POST">
                    @csrf
                <div id="formulario" class="">
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Nombre de la noticia:
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
                        Editor que lo Publica:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('editor')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <input type="editor" name="editor" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>


                    
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Caso de la Noticia
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('case')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <textarea name="case" id="" cols="30" rows="10" class=" rounded-lg border-3 border-red-300">

                            </textarea>
                        </div>
                    </div>


                    


                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Estado:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('status')
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