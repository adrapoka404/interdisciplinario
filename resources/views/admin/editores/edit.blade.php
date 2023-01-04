<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editando a ') . ' ' . $editor->name  }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('editores.index')}}" class="bg-blue-300 px-5 mx-5 rounded-full hover:bg-blue-600 hover:text-white">Volver a la lista</a>
                <form action="{{route('editores.update', $editor)}}" method="POST">
                    @csrf
                    @method('put')

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
                            <input type="text" name="name" value="{{$editor->name}}" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Correo electronico:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('mail')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <input type="mail" name="mail" value="{{$editor->mail}}" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Especialidad:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('speciality')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <input type="text" name="speciality" value="{{$editor->speciality}}" id="" class=" rounded-lg border-3 border-red-300"  >
                        </div>
                    </div>
                    <div class="row w-full">
                        <div class="w-1/3 inline text-right">
                        Semblanza:
                        <span class=" text-sm text-blue-300">Texto de ayuda</span>
                        @error('semblance')
                            {{$message}}
                        @enderror
                        </div>
                        <div class="w-2/3 inline">
                            <textarea name="semblance" id="" cols="30" rows="10" class=" rounded-lg border-3 border-red-300">
                                {{$editor->semblance}}
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
                                @if($editor->status == 0)
                                <option value="0" selected>Desactivado</option>
                                <option value="1">Activo</option>
                                @else
                                <option value="0" >Desactivado</option>
                                <option value="1" selected>Activo</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Editar" class="bg-orange-300 hover:bg-orange-600 hover:text-white font-semibold m-3 rounded-full">
                </div>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
