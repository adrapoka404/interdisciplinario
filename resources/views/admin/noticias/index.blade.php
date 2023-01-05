<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Noticias') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('noticias.create')}}" class="bg-blue-300 px-5 mx-5 rounded-full hover:bg-blue-600 hover:text-white">Crear nuevo</a>
                
                
                
                
                <div class="todo">
                    @foreach ($notices as $notice)
                        <div class="@if($notice->status == 1) bg-green-300 @else bg-orange-200 @endif">
                            {{$notice->name}}
                        </div>
                        <div>
                            {{$notice->editor}}
                        </div>
                        <div class="@if($notice) @endif">
                        {{$notice->case}}
                        </div>
                        
                        
                        
                        



                        <a href="{{route('noticias.edit', $notice->id)}}">Editar</a>
                        <div>
                            <form action="{{route('noticias.destroy', $notice)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{$notice->id}}">
                                <input type="submit" value="Eliminar Noticia" class="rounded-full bg-red-300 hover:bg-red-600 hover:text-white">
                            </form>
                        </div>

                        
                    @endforeach
                    {{ $notices->links() }}
                </div>
            </div>
        </div>
    </div>
   

    
</x-app-layout>
