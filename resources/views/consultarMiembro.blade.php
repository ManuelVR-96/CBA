@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">                
                <div><a href="/miembros/create" class="btn btn-primary btn-sm">Agregar nuevo miembro</a></div><br>
                <form method="POST" action="{{route('lista_abuelos')}}">
                @csrf   
                <div class="form-group row">
                            <label for="tipo_sangre" class="col-md-4 col-form-label text-md-right">{{ __('Buscar por') }}</label>
                            <div class="col-md-6">
                                <select name="tipo_busqueda" class="form-control @error('tipo_sangre') is-invalid @enderror" value="{{ old('tipo_sangre') }}" name="tipo_busqueda" type="text">>
                                    <option value=" ">--Seleccione--</option>                                   
                                    <option value="Cédula">Cédula</option>
                                    <option value="Nombre">Nombre</option>
                                    <option value="Apellidos">Apellidos</option>  
                                </select>
                                <!-- @error('tipo_sangre')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>         
                <div class="input-group mb-3">
                
                  <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">                  
                </div>

                <div id="resultados"></div>  
            
                <div class="table-responsive">                    
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Cargo</th>
                            <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <th>{{ $item->cédula}}</th>
                                <td>
                                <a href = "{{route('miembros.show', $item)}}">{{ $item->nombres }}</a>
                                </td>
                                <td>{{ $item->apellidos }}</td>
                                <td>{{ $item->cargo }}</td>
                                <td>
                                                                  
                                    <a href="{{route('miembros.edit', $item->id)}}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                                        
                                       
                                    </form>
                                </td>                             
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                    {{$users->links()}}                                     
                </div>
                <div>                                                        
                </div>                    
            </div>        
        </div>
    </div>
    <!-- <script>
        window.addEventListener('load',function(){
            document.getElementById("texto").addEventListener("keyup", function(){
            if((document.getElementById("texto").value.length)>=2)
                fetch('consultarUser.buscador?texto=${document.getElementById("texto").value}',{ method:'get'})
                .then(response  =>  response.text() )
                .then(html      =>  {document.getElementById("resultados").innerHTML = html  })
            else
                document.getElementById("resultados").innerHTML = ""
            })
        }); 
    </script> -->

@endsection