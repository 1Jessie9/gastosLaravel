<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gastos;

class gastosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //aca vamos a mostrar todos los gastos que esten en la tabla
        return view('gasto.index',
                        ['Gastos'=>gastos::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gasto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valiData=$request->validate([
            'cajaNombre'=>'required|max:20',
  /*           'cajaPrecio'=>'required|numeric',
            'imagen'=>'required' */
        ]); 
        //nuevo nombre de la imagen y movimiento
       /* $imagen=$request->file('img');
        $nombreImg=time().'.'.$imagen->getClientOriginalExtension();
        $destino=public_path('images/gastos');
        $request->img->move($destino,$nombreImg);
        */
        //almacenamos la informacion de la bd
        $nuevoGasto = new gastos();
        //dd($request);
        $nuevoGasto->nombre = $request->get('cajaNombre');
        //guardamos la imagen en la bd
        //
        $nuevoGasto->save();
        return redirect('/gastos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(gastos $gastos,$id){
        //$nuevoDetalles = gastos::find($id);
        return view('gasto.show',['Gastos'=> $gastos::findOrfail($id)]);
        /* return view('detalles.crear',[
            'detalles' =>$nuevoDetalles
        ]); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gastosM = gastos::find($id);
        return view('gasto.edit',['gastosM'=>$gastosM]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $modificarGasto=gastos::find($id);
        $modificarGasto->nombre = $request->get('cajaNombreM');
/*         $modificarGasto->descripcion = $request->get('cajaDescripcionM');
        $modificarGasto->precio = $request->get('cajaPrecioM');
        $modificarGasto->imagen=$nombreImg; */
        $modificarGasto->save();
        return redirect('/gastos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $borrarR=gastos::find($id);
        $borrarR->delete();
        return redirect('/gastos');
    }
    public function confirmId($id){
        $eliminarG=gastos::find($id);
        return view('gasto.confirmV',['eliminarG'=>$eliminarG]);
    }
}
