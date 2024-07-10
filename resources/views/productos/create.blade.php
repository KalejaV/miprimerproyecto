@extends('layouts.app')
@section('titulo','Crear producto')
@section('cabecera','Crear producto')

@section('contenido')
<div class="flex justify-center my-6">
    <div class="card w-96 shadow-2xl bg-base-100">
        <div class="card-body">
            {{--Formulario para crear un producto--}}
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                {{--Nombre--}}
                <div class="form-control">
                    <label class="label" for="nombre">
                        <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre del producto" class="input input-bordered" required/>
                </div>
                {{--Descripción--}}
                <div class="form-control">
                    <label class="label" for="descripcion">
                        <span class="label-text">Descripción</span>
                    </label>
                    <input type="text" name="descripcion" placeholder="Escriba la descripción" class="input input-bordered"/>
                </div>

                {{--precio--}}
                <div class="form-control">
                    <label class="label" for="precio">
                        <span class="label-text">Precio</span>
                    </label>
                    <input type="number" name="precio" placeholder="Escriba el precio" class="input input-bordered"/>
                </div>

                {{--stock--}}
                <div class="form-control">
                    <label class="label" for="stock">
                        <span class="label-text">Stock</span>
                    </label>
                    <input type="number" name="stock" placeholder="Escriba el stock"  class="input input-bordered" required/>
                </div>
                {{--Botón enviar--}}
                <div class="form-control mt-6">
                <button type="submit" class="btn btn-primary">Crear producto</button>
                <a href="{{ route('productos.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
