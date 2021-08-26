@extends('layouts.app')

@section('content')

<div class="content">
                <div class="col">
                    <h2>Detalles de: {{$Gastos->nombre}}</h2>
                        <table class="table table-hover">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Imagen</th>
                            </tr>
                            @foreach($Gastos->gastosDetalles as $gasDetalles)
                            <tr>
                                <td>{{$gasDetalles->nombre}}</td>
                                <td>{{$gasDetalles->descripcion}}</td>
                                <td>{{$gasDetalles->precio}}</td>
                                <td><img src="/Images/gastos/{{$gasDetalles->imagen}}" alt="Imagendetalle"  width="50" height="50"></td>
                                <td><a class="btn btn-outline-success" href="/detalles/{{$gasDetalles->id}}/edit">&#U+270F</a></td>
                                <td><a class="btn btn-outline-danger" href="/detalles/{{$gasDetalles->id}}/confirmDet">🗑</a></td>
                            </tr>
                            @endforeach
                        </table>
                    <a href="/gastos/{{$Gastos->id}}/detalles/create" class="btn btn-lg btn-primary" disabled>Crear detalles</a>
                    <br><br><a href="/gastos" class="btn btn-outline-success" disabled>Atras</a>  
                   </div>
                </div>
            </div>
@endsection