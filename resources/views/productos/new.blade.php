@extends('layouts.menu')

@section('contenido')
@if(session('mensaje'))
<div class="class row">
    {{session('mensaje')}}
</div>  
@endif

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
                <input id="nombre" name="nombre" type="text" class="validate" value="{{old('nombre')}}">
                <label for="nombre">Nombre de producto</label>
                <span>{{$errors->first('nombre')}}</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">                
                <textarea id="desc" class="materialize-textarea" name="desc">{{old('desc')}}</textarea>
                <label for="desc">Descripción</label>
                <span>{{$errors->first('desc')}}</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">                       
                <input id="precio" name="precio" type="text" class="validate" value="{{old('precio')}}">
                <label for="precio" >Precio</label>
                <span>{{$errors->first('precio')}}</span>
                
            </div>
        </div>

                <div class="row">
                    <div class="col s8 input-field">
                        <select name="marca" id="marca">
                            <option value="">Elije marca</option>
                            @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                            @endforeach
                        </select>
                        <label for="marca">Marca</label>
                        <span>{{$errors->first('marca')}}</span>
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
                        <span>{{$errors->first('categoria')}}</span>
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