@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
       <div class="card">
          <div class="card-header text-center">
                Modificar Producto 
          </div>
          <div class="card-body" style="padding:30px">
            <form action="{{ url('/producto/create') }}" method="POST">
                {{method_field('PUT')}}
	            @csrf
             <div class="form-group">
                <label for="title">Título</label>
             <input type="text" name="title" id="title"  class="form-control" >
             </div>

             <div class="form-group">
                <label for="title">Categoria</label>
             <input type="text" name="year" id="year" >
            </div>
             <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                    Modficar Producto
                </button>
             </div>
          </div>
       </div>
    </div>
 </div>
@stop