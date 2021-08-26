@extends('layouts.app')

@section('content')


<div class="content">
                    <div class=row>
                        <div class=col>
                            <h2>Editar gastos {{$gastosM->nombre}}</h2>
                            <form action="/gastos/{{$gastosM->id}}" method="POST" enctype="multipart/form-data">
                            @csrf   
                            @method('put')
                                <div class="form-group">
                                    <label for="Nombre">Digite gasto</label>
                                    <input type="text" class="form-control" id="cajaNombreM" name="cajaNombreM" placeholder="Hidratacion">
                                    <!-- <label for="Descripcion">Digite el precio -sin comas ni puntos-</label>
                                    <input type="text" class="form-control" id="cajaPrecioM" name="cajaPrecioM" placeholder="5000">
                                    <label for="Imagen">Foto Gasto</label>
                                    <input type="file" class="form-control" name="img"> -->
                                    <br>
                                </div>
                                <button class="btn btn-lg btn-primary" type="submit">Editar</button>
                            </form>
                            <br>
                        </div>
                    </div>
                    <a href="/gastos" class="btn btn-outline-success" disabled>Atras</a>
                </div>
            </div>
@endsection