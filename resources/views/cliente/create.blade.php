@extends('layouts.app')
@section('title','create')
@section('content')

<form action="{{route('cliente.store')}}" method="post" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
 @csrf
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold"> Registrar Datos</h2>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Nombre" name="nombre">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Apellido" name="apellido">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Producto" name="producto">

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Precio" name="precio">

<button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold
rounded text-white hover:bg-blue-600">Registrar</button>
<a href="{{route('cliente.index')}}" class="flex justify-center">Regresar</a>
</form>

@endsection