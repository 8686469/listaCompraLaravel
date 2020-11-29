@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <a href="{{ url('/productos/show/' . $id ) }}">
            <img src="{{$productos['poster']}}" style="height:200px"/>
        </a>

    </div>
    <div class="col-sm-8">

        <h4>{{$pelicula['nombre']}}</h4>
        <h6>categoria: {{$pelicula['categoria']}}</h6>

            <p>
                Producto actualmente comprado

            </p>


            <a class="btn btn-danger" href="#">Pendiente de compra</a>

        <a class="btn btn-warning" href="{{ url('/productos/edit/' . $id ) }}">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
            Editar producto</a>
        <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>

    </div>
</div>

@stop
