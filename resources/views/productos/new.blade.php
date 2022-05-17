@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="indigo-text text-darken-4">
        Nuevo producto
    </h1>
    </div>
    <div class="row">
        <form class="col s8" method="post" action="{{ url('productos') }}">
            @csrf
        <div class="row">
            <div class="input-field col s8">                  
                <input id="nombre" name="nombre" type="text" class="validate">
                <label for="nombre">Nombre de producto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">                
                <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
                <label for="desc">Descripción</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">                       
                <input id="precio" name="precio" type="text" class="validate">
                <label for="precio" >Precio</label>
            </div>
        </div>

                <div class="row">
                    <div class="col s8 input-field">
                        <select name="marca" id="marca">
                            @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                        <label for="marca">Marca</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s8 input-field">
                        <select name="categoria" id="categoria">
                            @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}" >{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <label for="categoria">Categoria</label>
                    </div>
                </div>

                <div class="row">
                    <div class="file-field input-field col s8">
                        <div class="btn">
                            <span>Imagen de producto...</span>
                            <input type="file" name="img">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="s8">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                            <i class="material-icons right"></i>
                        </button>

                    </div>

                </div>

        </form>
    </div>
@endsection