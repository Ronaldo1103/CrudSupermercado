@extends('layouts.app')
@section('title','home')
@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-yellow-500 text-white">
          <th class="w-20 py-4 ...">Nº</th>
          <th class="w-1/8 py-4 ...">Nombre</th>
          <th class="w-1/16 py-4 ...">Apellido</th>
          <th class="w-1/16 py-4 ...">Producto</th>
          <th class="w-1/16 py-4 ...">Precio</th>
          <th class="w-1/16 py-4 ...">Creacion</th>
          <th class="w-1/16 py-4 ...">Actualizado</th>
          <th class="w-28 py-4 ...">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $item)
            
        
        <tr>
          <td class="py-3 px-6">{{$item->id}}</td>
          <td class="py-3 flex justify-center">{{$item->nombre}}</td>
          <td class="py-3 text-center">{{$item->apellido}}</td>
          <td class="py-3 text-center">{{$item->producto}}</td>
          <td class="py-3 flex justify-center">{{$item->precio}}</td>
          <td class="py-3 px-6">{{$item->created_at}}</td>
          <td class="py-3 px-6">{{$item->updated_at}}</td>
          <td class="p-3 flex justify-center">
            <form action="{{route('cliente.destroy', $item->id)}}" method="post">
                @csrf
                @method('delete')
            <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
            <i class="fas fa-trash"></i></button>
        </form>
            <a href="{{route('cliente.edit',$item->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm ">
            <i class="fas fa-pen"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
@endsection