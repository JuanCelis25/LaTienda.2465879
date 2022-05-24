<?php

namespace App\Http\Controllers;
//dependencias
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va a ir el catalogo de los productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //seleccionar categorias y marcas
        $marcas = Marca::all();
        $categorias = Categoria::all();

        return view('productos.new')
        ->with('marcas' , $marcas)
        ->with('categorias' , $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //definir reglas de validacion
        $reglas = [
            "nombre" =>'required|alpha',
            "desc" =>'required|min:10|max:50',
            "precio" =>'required|numeric',
            "marca" => 'required',
            "categoria" => 'required'

        ];
        //mensajes personalizados por regla
        $mensajes =[
            "required" => "Campo obligatorio",
            "numeric" => "Solo numeros",
            "alpha" => "Solo letras"
        ];
        //crear el objeto validador
        $v = Validator::make($r->all(), $reglas, $mensajes);

        //validar datos: metodo false()
        //metodo fails();
        //retorna true en caso de validacion fallido
        //retorna false en caso de validacion correcta

        if($v->fails()){
            //bloque si la validacion falla
            //redireccionar al formulario de nuevo:producto
            return redirect('productos/create')
                ->withErrors($v)
                ->withInput();
        }else{
            //validacion correcta
            //crear entidad producto:
                $p = new producto;
                //asignar valores a los atributos
                //del nuevo producto
                $p->nombre = $r->nombre;
                $p->desc = $r->desc;
                $p->precio = $r->precio;
                $p->marca_id = $r->marca;
                $p->categoria_id = $r->categoria;
                //grabar el nuevo producto
                $p->save();
        
                //Redireccionar a la ruta: create 
                //Llebando datos de sesión;
                return redirect('productos/create')
                    ->with('mensaje', 'producto registrado');

        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aqui va la info del producto cuyo id es: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "Aqui va a ir el formulario de edicion del proyecto cuyo id es: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
