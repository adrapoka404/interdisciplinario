<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Catalogo de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{route('productos.create')}}" class="bg-blue-300 px-5 mx-5 rounded-full hover:bg-blue-600 hover:text-white">Crear nuevo</a>
                
                <div class="todo">
                    @foreach ($products as $product)
                        <div>
                            {{$product->name}}
                        </div>
                        <div>
                            {{$product->cost}}
                        </div>
                        
                        <div class="@if($product->status == 1) bg-green-300 @else bg-orange-200 @endif" >
                            {{$product->mark}}
                            </div>
                            <div>
                                {{$product->description}}
                            </div>
                            
                            <a href="{{route('productos.edit', $product->id)}}">Editar</a>
                            <div>
                                <form action="{{route('productos.destroy', $product)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="submit" value="Cambiar estado" class="rounded-full bg-red-300 hover:bg-red-600 hover:text-white">
                                </form>
                            </div>
                    @endforeach
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>