@extends('layouts.menu')

@section('contenido')
@if(session('mensajito'))
<div class="row">
    <strong>
        {{session('mensajito')}}
        <a href="{{ route('cart.index') }}">
            Ir al carrito
        </a>
    </strong>
</div>
@endif
<div class="row">
    <h2>Catalago de productos</h2>
</div>
<style>
    body{
        background-color: #C8BEBB;
    }
</style>
    @foreach($productos as $producto)
    <div class="row">
        <div class="col s3">
            <div class="card">
                <div class="card-image">
                    @if(@$producto->imagen === null)
                    <img src="{{ asset('img/No.jpg' ) }}" alt="">

                    @else
                    <img src="{{ asset('img/'.$producto->imagen ) }}" alt="">
                    <span class="card-title" style="color:black">{{ $producto->nombre }}</span>
                    @endif
                    
                </div>
                <div class="card-content">
                    <p>Descripción: {{ $producto->desc }}</p>
                    
                    <p>Precio: {{ $producto->precio }}</p>
                </div>
                
                <div class="card-action">
                    <a href="{{ route('productos.show' , $producto->id ) }}">Ver detalles</a>
                </div>
                <div class="progress">
      <div class="determinate" style="width: 90%"></div>
  </div>   </div>
        </div>
    </div>

    @endforeach
@endsection