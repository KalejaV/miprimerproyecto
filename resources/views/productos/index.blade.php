@extends('layouts.app')
@section('titulo','Consultar productos')
@section('contenido')
<div class="grid cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
    @foreach ($productos as $producto)
    <div class="card w-65 bg-base-100 shadow-xl">
        <figure><img src="https://source.unsplash.com/random/800x600/?handbags&{{ $producto->nombre }}" alt="{{ $producto->nombre}}" /></figure>
        <div class="card-body">
          <h2 class="card-title">
            {{ $producto->nombre }}
            <div class="badge badge-outline">${{ $producto->precio }}</div>
          </h2>
          <p> {{ Str::limit($producto->descripcion,50) }}</p>
          <div class="card-actions justify-end">
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-xs btn-primary">Editar</a>
            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-outline">Eliminar</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
</div>
@endsection
