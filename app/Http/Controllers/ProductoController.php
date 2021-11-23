<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller{
    public function getIndex(){
        $productos = Producto::all();
        return view('productos.index', array('arrayProductos'=>$productos));
    }
    public function getShow($id){
        $productos = Producto::findOrFail($id);
        return view('productos.show', array('productos'=>$productos));
    }
    public function getCreate(){
        return view('productos.create', array('arrayProductos'=>$this->arrayProductos));
    }
    public function getEdit($id){
        $productos = Producto::findOrFail($id);
        return view('productos.edit', array('arrayProductos'=>$productos));
    }
}