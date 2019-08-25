@extends('layouts.app')
@section('content')
<h1>Nota Detalle</h1>
<h4>Apellidos: {{ $user->apellidos }}</h4>
<h4>Nombre: {{ $user->nombres }}</h4>
<h4>Descripción: {{ $user->cédula }}</h4>
<form action="{{route('usuarios.destroy', $user)}}" class="d-inline" method="POST">
                                         @csrf
                                         @method("DELETE")  
                                    <button type = "submmit" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
@endsection