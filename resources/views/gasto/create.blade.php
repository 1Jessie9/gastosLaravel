@extends('layouts.app')

@section('content')


<div class="content">
                    <div class=row>
                        <div class=col>
                            <h2>Crear nuevos gastos</h2>
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
                            <form action="/gastos" method="POST" enctype =  "multipart/form-data">

                            @csrf
                                <div class="form-group">
                                    <label for="Nombre">Digite gasto</label>
                                    <input type="text" class="form-control" id="cajaNombre" name="cajaNombre" placeholder="Hidratacion" value="{{old('cajaNombre')}}">
                                  
                                    <br>
                                </div>
                                <button class="btn btn-lg btn-primary" type="submit">Crear</button>
                            </form>
                            <br>
                        </div>
                    </div>
                    <a href="/gastos" class="btn btn-outline-success" disabled>Atras</a>
                </div>
            </div>
@endsection