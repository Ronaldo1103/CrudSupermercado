@extends('layouts.app')
@section('title','edit')
@section('content')

<form action="{{route('cliente.update' ,$datos->id)}}" method="post" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
 @csrf
 @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold"> Editar Registro</h2>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Nombre" name="nombre" value="{{$datos->nombre}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Apellido" name="apellido"value="{{$datos->apellido}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Producto" name="producto"value="{{$datos->producto}}">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Precio" name="precio"value="{{$datos->precio}}">

<button type="submit" class="my-3 w-full bg-green-500 p-2 font-semibold
rounded text-white hover:bg-green-600">Registrar</button>
<a href="{{route('cliente.index')}}" class="flex justify-center">Regresar</a>
</form>

@endsection