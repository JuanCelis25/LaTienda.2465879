@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1 class="indigo-text text-darken-4">
        Nuevo producto
    </h1>
    </div>
    <div class="row">
        <form class="col s8" method="post" action="">

        <div class="row">
                <div class="input-field col s8">
                    
                    <input id="nombre" type="text" class="validate">
                    <label for="nombre">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    
                    <textarea id="desc" class="materialize-textarea"></textarea>
                    <label for="desc">Descripción</label>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        
                        <input id="precio" type="text" class="validate">
                        <label for="precio">Precio</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field col s8">
                        <div class="btn">
                            <span>Imagen de producto...</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <select>
                            <option value="" disabled selected>Escoje marca</option>
                           
                                
                            
                        </select>
                        <label>Selección de marca</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <select>
                            <option value="" disabled selected>Escoje categoría</option>
                            
                                
                            
                        </select>
                        <label>Selección de categoría</label>
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