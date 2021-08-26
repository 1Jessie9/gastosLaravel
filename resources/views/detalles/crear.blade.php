@extends('layouts.app')

@section('content')


<div class="content">
                    <div class=row>
                        <div class=col>
                            <h2>Detalles de:</h2>
                            @if($errors->any())
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>

                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="/gastos/{{$id}}/detalles" method="POST" enctype =  "multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label for="Nombre">Digite el nombre de detalle:</label>
                                        <input type="text" class="form-control" id="cajaNombreD" name="cajaNombreD" placeholder="Chocolate" value="{{old('cajaNombreD')}}">
                                        <label for="Nombre">Digite la descripcion de detalle:</label>
                                        <input type="text" class="form-control" id="cajaDescripcionD" name="cajaDescripcionD" placeholder="Chocolate del dia 3" value="{{old('cajaDescripcionD')}}">
                                        <label for="Nombre">Digite el precio de detalle:</label>
                                        <input type="text" class="form-control" id="cajaPrecioD" name="cajaPrecioD" placeholder="4000" value="{{old('cajaPrecioD')}}">
                                        <label for="Nombre">Digite el nombre de detalle:</label>
                                        <input type="file" class="form-control" id="cajaImgD" name="cajaImgD" placeholder="Hidratacion" value="{{old('cajaImgD')}}">
                                        
                                        <br>
                                    </div>
                                    <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                                </form>
                            
                        </div>
                    </div>
                    <a href="/gastos/{{$id}}" class="btn btn-outline-success" disabled>Atras</a>
                </div>
            </div>
@endsection