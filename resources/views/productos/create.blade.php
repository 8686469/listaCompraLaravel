@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
             Añadir producto
          </div>
          <div class="card-body" style="padding:30px">

             <form action="{{ url('/productos/create') }}" method="POST">

                 @csrf

                 <div class="form-group">
                    <label for="producto">Producto</label>
                    <input type="text" name="producto" id="producto" class="form-control">
                 </div>

                 <div class="form-group">
                     <label for="title">Categoria</label>
                    <input type="text" name="cate" id="cate">
                 </div>


                 <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Añadir producto
                    </button>
                 </div>

             </form>

          </div>
       </div>
    </div>
 </div>

@stop
