@extends('layouts.app')

@section('content')


<div class="content">
                    <div class=row>
                        <div class=col>
                            <h2>Se va a borrar {{$eliminarD->nombre}}. ¿Está seguro?</h2>
                            <form action="/detalles/{{$eliminarD->id}}" method="POST">
                            @csrf   
                            @method('delete')
                            <button href="/gastos" class="btn btn-outline-danger">Borrar</button><br><br>
                            </form>

                    <a href="/gastos" class="btn btn-outline-success" disabled>Atras</a>
                </div>
            </div>
@endsection