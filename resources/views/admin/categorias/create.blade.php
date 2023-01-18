<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Categorias') }}
        </h2>
    </x-slot>

    <div class="py-14">
        <div class="max-w-xl mx-auto">
            <div class="bg-indigo-50 overflow-hidden shadow-2xl sm:rounded-lg">
                <div class="text-end m-4">
                    <a href="{{route('categorias.index')}}" class="mx-auto m-2 p-2 rounded-lg  bg-indigo-300 hover:bg-indigo-400 ">Regresar</a>
                </div>
                <div class="text-center m-4">
                <form action="{{route('categorias.store')}}" method="POST">
                    @csrf
                        <div class="row">

                            @error('name')
                            {{$message}}
                            @enderror 

                            <label class="block m-4 px-8 ">
                                <span class="text-gray-700">Categoría</span>
                               
                                <input type="text" name="name" class="m-4 rounded-lg mt-1 inline " placeholder="A" value="{{ old('name') }}" />
                            </label>
                        </div>
                        <div class="row">
                            
                            @error('description')
                                {{$message}}
                                @enderror
                            <label class="block m-4 px-8 ">
                                <span class="text-gray-700">Descripción</span>
                                
                                <input type="text" name="description"  class="m-4 rounded-lg mt-1 inline " placeholder="Categoria A" value="{{ old('description') }}" />
                            </label>
                        </div>
                        <div class="row">
                            <label class="block m-4 px-8">
                                <span class="text-gray-700">Estado</span>
                                <select name="status" class="m-4 inline mt-1  rounded-lg " >
                                  <option value="0">Desactivada</option>
                                  <option value="1">Activa</option>                                
                                </select>
                            </label>
                        </div>                        

                        <input type="submit" value="Crear" class="bg-green-400 hover:bg-green-300  font-semibold mx-auto m-2 p-2 rounded-lg "> 
                        
                        </div>
                </form>
            </div>
      
        </div>
    </div>

    
</x-app-layout>
