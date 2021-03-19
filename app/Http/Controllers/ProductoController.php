<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $productos=Producto::all();
      //$productos="ww";
        return view('producto.index',['producto'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto= new Producto();
        $producto->producto_nombre=$request->POST('producto_nombre');
        $producto->producto_precio=$request->POST('producto_precio');
        $producto->save();
       return redirect('/productos');
          //return view('producto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($producto_id)
    {
      //$producto=Producto::find($producto_id,['producto_id']);
      $producto=  Producto::where('producto_id', $producto_id)->first();
      return view('producto.editar',['producto'=>$producto]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $producto_id)
    {

      $producto=Producto::whereProductoId($producto_id)->first();

      $array=array('producto_nombre'=>$request->POST('producto_nombre'),
                   'producto_precio'=>$request->POST('producto_precio'));
    //  $producto->producto_nombre=$request->POST('producto_nombre');
    //  $producto->producto_precio=$request->POST('producto_precio');
Producto::where('producto_id', '=', $producto_id)->update($array);

      //$producto->save();
      return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
