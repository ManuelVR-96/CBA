@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="container box">
        <div class="row justify-content-center">
            <div class="col-md-10">                
                <div><a href="/register" class="btn btn-primary btn-sm">Crear Nuevo Usuario</a></div><br>        
                <div class="input-group mb-3">
                  <input type="text" class="form-control" id="texto" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="basic-addon2">                  
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
                                <th>{{ $item->cedula}}</th>
                                <td>{{ $item->nombres }}</td>
                                <td>{{ $item->apellidos }}</td>
                                <td>{{ $item->cargo }}</td>
                                <td>                                    
                                    <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>

                                    <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>                             
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                                      
                </div>
                <div>                   
                    {!! $users->render()!!}                                       
                </div>                    
            </div>        
        </div>
    </div>
    <script>
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
    </script>

@endsection