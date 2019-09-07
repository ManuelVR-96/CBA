@extends('layouts.app')

@section('content')

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <div class="panel panel-default">
          <div class="panel-body">
               <form action="{{route('programas.eliminar', $programas)}}" class="d-inline" method="POST">
                    @csrf
                    @method("DELETE")  
                    <div class="form-horizontal">
                    <fieldset disabled>
                         <div class="col-sm-6">
                            
                              <div class="form-group row">
                                   <label class="col-sm-5">Nombre</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$programas->nombre}}">
                                   </div>
                              </div>

                               <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Encargado</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$programas->encargado}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Descripción</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$programas->descripcion}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Agenda</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$programas->agenda}}">
                                   </div>
                              </div>
                         </fieldset>
                              <div align="center">
                                   <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Registro</button>
                              </div>
                         </div>
                    </div>
               </form>
          </div>
     </div>
@endsection

