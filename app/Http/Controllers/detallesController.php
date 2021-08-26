<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detalles;
use App\Models\gastos;

class detallesController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); //ver si esta logueada la persona por favor
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('gasto.show', ['gastosDetalles'=>detalles::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, gastos $gastos)
    {
       return view('detalles.crear',[
           'Gastos'=> gastos::find($id),'id'=>$id
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {

        $imagen=$request->file('cajaImgD');
        $nombreImg=time().'.'.$imagen->getClientOriginalExtension();
        $destino=public_path('images/gastos');
        $request->cajaImgD->move($destino,$nombreImg);

        $nuevoDetalle = new detalles();
        $nuevoDetalle->nombre = $request->get('cajaNombreD');
        $nuevoDetalle->descripcion = $request->get('cajaDescripcionD');
        $nuevoDetalle->precio = $request->get('cajaPrecioD');
        $nuevoDetalle->imagen=$nombreImg;
        $nuevoDetalle->gastos_id=$id;
        $nuevoDetalle->save();
        return redirect('/gastos');
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
    public function edit($id)
    {
        $gastosE = detalles::find($id);
        return view('detalles.editar',['gastosE'=>$gastosE]);
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
        $imagen=$request->file('cajaImgDetM');
        $nombreImg=time().'.'.$imagen->getClientOriginalExtension();
        $destino=public_path('images/gastos');
        $request->cajaImgDetM->move($destino,$nombreImg);

        $modificarDet=detalles::find($id);
        $modificarDet->nombre = $request->get('cajaNombreDetM');
        $modificarDet->descripcion = $request->get('cajaDescripcionDetM');
        $modificarDet->precio = $request->get('cajaPrecioDetM');
        $modificarDet->imagen=$nombreImg;

        $modificarDet->save();
        return redirect('/gastos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrarR=detalles::find($id);
        $borrarR->delete();
        return redirect('/gastos');
    }
    public function confirmIdDet($id){
        $eliminarD=detalles::find($id);
        return view('detalles.confirmDet',['eliminarD'=>$eliminarD]);
    }
}
