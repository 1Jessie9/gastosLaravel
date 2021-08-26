@extends('layouts.app')

@section('content')


<div class="content">
                    <div class=row>
                        <div class=col>
                            <h2>Editar detalle: {{$gastosE->nombre}}</h2>
                            <form action="/detalles/{{$gastosE->id}}" method="POST" enctype="multipart/form-data">
                            @csrf   
                            @method('put')
                                <div class="form-group">
                                    <label for="Nombre">Digite gasto</label>
                                    <input type="text" class="form-control" id="cajaNombreDetM" name="cajaNombreDetM" placeholder="Hidratacion">
                                    <label for="Nombre">Digite la descripcion de detalle:</label>
                                    <input type="text" class="form-control" id="cajaDescripcionDetM" name="cajaDescripcionDetM" placeholder="Chocolate del dia 3" value="{{old('cajaDescripcionD')}}">
                                    <label for="Nombre">Digite el precio de detalle:</label>
                                    <input type="text" class="form-control" id="cajaPrecioDetM" name="cajaPrecioDetM" placeholder="4000" value="{{old('cajaPrecioD')}}">
                                    <label for="Nombre">Digite el foto de detalle:</label>
                                    <input type="file" class="form-control" id="cajaImgDetM" name="cajaImgDetM" placeholder="Hidratacion" value="{{old('cajaImgD')}}">
                                
                                    <br>
                                </div>
                                <button class="btn btn-lg btn-primary" type="submit">Editar</button>
                            </form>
                            <br>
                        </div>
                    </div>
                    <a href="/gastos/{{$gastosE->id}}/detalles" class="btn btn-outline-success" disabled>Atras</a>
                </div>
            </div>
@endsection