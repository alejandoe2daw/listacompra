@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <a href="{{ url('/productos/show/' . $productos->id ) }}">        
            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>            
        </a>
    </div>
    <div class="col-sm-8">       
        <div class="col-sm-8">
            <h4>Nombre: {{ $productos[0] }}</h4>
            <h5>Categoria: {{ $productos[1] }}</h6>                
                <a class="btn btn-warning" href="{{ url('/catalog/edit/' . $productos->id ) }}">Editar Producto</a>
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    
                <a class="btn btn-outline-info" href="{{ action('App\Http\Controllers\ProductoController@getIndex') }}">Volver al listado</a>
        </div>
    </div>
</div>
@stop