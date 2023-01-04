<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Editores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('editores.create')}}" class="bg-blue-300 px-5 mx-5 rounded-full hover:bg-blue-600 hover:text-white">Crear nuevo</a>
                
                <div class="todo">
                    @foreach ($editors as $editor)
                        <div>
                            {{$editor->name}}
                        </div>
                        <div>
                            {{$editor->mail}}
                        </div>


                        <div class="@if($editor->status == 1) bg-green-300 @else bg-orange-200 @endif">
                        {{$editor->speciality}}
                        </div>
                        
                        <a href="{{route('editores.edit', $editor->id)}}">Editar</a>
                        <div>
                            <form action="{{route('editores.destroy', $editor)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$editor->id}}">
                                <input type="submit" value="Cambiar estado" class="rounded-full bg-red-300 hover:bg-red-600 hover:text-white">
                            </form>
                        </div>
                    @endforeach
                    {{ $editors->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
