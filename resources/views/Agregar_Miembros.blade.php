@extends('layouts.app')

@section('content')
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/estilo.css">   

    <div class="container box">
        <div class="row justify-content-center">                    
            <form method="POST" class="form" action="{{route('lista.store')}}">
                @csrf
                <div>
                    <input id="programa" type="hidden" class="form-control @error('programa') is-invalid @enderror" name="programa" value="{{ $programa->id }}" placeholder = "{{ $programa->id }}" autofocus readonly="readonly">
                </div>

                <div class="form-header"><h1 class="form-tittle">{{ __('AGREGAR MIEMBROS A PROGRAMA') }}</h1></div><br>    
                <div class="table-responsive">                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">NOMBRE PACIENTE</th>
                            <th scope="col">AGREGAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($miembros as $miembro)
                            <tr>
                            <td scope="col"><a href ="{{route('miembros.show', $miembro->id)}}">{{$miembro->nombres}} {{$miembro->apellidos}}</td>
                            <td scope="col"><input type="checkbox" name="miembros[]" @if(in_array($miembro->id,$miembros_vinculados)) checked='checked' @endif value="{{$miembro->id}} "></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 

                <button type="submit" class="btn-submit">
                    {{ __('GUARDAR') }}
                </button>               

            </form>                   
        </div>
    </div>
<div class="gradient"></div>
@endsection