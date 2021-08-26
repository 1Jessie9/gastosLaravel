@extends('layouts.app')

@section('content')

<div class="content">
                <div class="col">
                    <h2>Gastos</h2>
                    <table class="table table-hover">
                        <tr> 
                            <th>Id</th>
                            <th>Nombre</th>
                        </tr>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                        @foreach($Gastos as $Gastos)
                                        
                        <tr> 
                                <td>{{$Gastos->id}}</td>
                                <td>{{$Gastos->nombre}}</td>
<!--                            <td><img src="images/gastos/{{$Gastos->imagen}}" alt="Imagen del gasto" width="50" height="50"></td>
 -->                                <td><a class="btn btn-outline-success" href="/gastos/{{$Gastos->id}}/edit">✏</a></td>
                                <td><a class="btn btn-outline-danger" href="/gastos/{{$Gastos->id}}/confirmar">🗑</a></td>
                                <td><a class="btn btn-outline-danger" href="/gastos/{{$Gastos->id}}">Ver detalles</a></td>
                            </tr>
                        @endforeach      
                    </table>
                    <a href="/gastos/create" class="btn btn-lg btn-primary" disabled>Crear Gastos</a>  
                    <br><br> 
                   
                     <!-- <a href="/gastos/destroy" class="btn btn-danger" disabled>Borrar Gastos</a> -->
</div>
                </div>
            </div>
@endsection