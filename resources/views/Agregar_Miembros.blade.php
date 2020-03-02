@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">                
                
                <form method="POST" action="{{route('lista.store')}}">
                @csrf  

                <input id="programa" type="hidden" class="form-control @error('programa') is-invalid @enderror" name="programa" value="{{ $programa->id }}" placeholder = "{{ $programa->id }}" autofocus readonly="readonly">


                <h2> Agregar miembros </h2>    
                <div class="table-responsive">                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Nombre paciente</th>
                            <th scope="col">Agregar</th>
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

        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>

                        </form>
                </div>
            </div>
        </div>
                  
                </div>               
            </div>        
        </div>
    </div>
@endsection