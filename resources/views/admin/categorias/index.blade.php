<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Categorias') }}
        </h2>
    </x-slot>
    
    <div class="py-14">
        <div class="max-w-2xl mx-auto">
            <div class="bg-indigo-50 overflow-hidden shadow-2xl sm:rounded-lg">
                <div class="text-end m-4">
                  
                    <a href="{{route('categorias.create')}}" class="mx-auto m-2 p-2 rounded-lg  bg-green-400 hover:bg-green-300 ">Nueva</a>
                </div>                 

                    <table class="text-lg font-mono sm:rounded-lg table-auto text-center my-4 mx-auto ">
                        <thead>
                           
                          <tr >
                            <th class="px-8 mx-auto w-auto">Categoría</th>
                            <th class="px-8 mx-auto w-auto">Descripción</th>
                            <th class="px-8 mx-auto w-auto">Acciones</th>
                          </tr>
                        </thead>
                        <tbody >
                            @foreach ($categories as $category)
                            <tr class="odd:bg-white even:bg-slate-50 ">
                            <td class="@if($category->status == 1) bg-green-300 @else bg-orange-200 @endif">{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td  class=" pt-4">                               
                                
                                <form action="{{route('categorias.destroy', $category)}}" method="post">
                                    <a href="{{route('categorias.edit', $category->id)}}" class="text-sm p-2 rounded-lg  bg-sky-400 hover:bg-sky-300 ">Editar</a>
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <input type="submit" value="Cambiar estado" class="m-4 p-2 text-sm rounded-lg bg-violet-300 hover:bg-red-600 hover:text-white">
                                </form>
                              </td>

                          </tr>
                         
                          @endforeach
                          {{ $categories->links() }}                      
                        </tbody>
                      </table>      
                        
                
            </div>
        </div>
    </div>
    
</x-app-layout>