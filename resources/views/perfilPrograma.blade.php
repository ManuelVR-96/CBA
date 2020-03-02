@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">   
<div class="gradient"></div><br>

<div class="container">
     <form action="{{route('programas.eliminar', $programas)}}" class="form" method="POST">
          <div class="form-header"><h1 class="form-tittle">{{ __('PERFIL PROGRAMA AGENDADO') }}</h1></div><br>
          @csrf
          @method("DELETE")                  
          <fieldset disabled>                    
               <div class="form-group row">
                    <label class="col-sm-4">Nombre</label>
                    <div class="col-sm-7">
                         <input type="text" class="form-control" value="{{$programas->nombre}}">
                    </div>
               </div>

               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Encargado</label>
                    <div class="col-sm-7">
                         <input type="text" class="form-control" value="{{$programas->encargado_->nombres}}">
                    </div>
               </div>

               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Descripción</label>
                    <div class="col-sm-7">
                         <textarea class="form-control" value="{{$programas->descripcion}}">{{$programas->descripcion}}</textarea>
                    </div>
               </div>

               <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Agenda</label>
                    <div class="col-sm-7">
                         <input type="date" class="form-control" value="{{$programas->agenda}}">
                    </div>
               </div>

          </fieldset><br>

          <div align="center">
               <a href= "{{ url('lista/create/'.$programas->id) }}" class="btn btn-primary">Agregar miembros al programa</a>
               <a href= "{{ url('programas/'.$programas->id.'/edit') }}" class="btn btn-primary">Editar información del programa</a>
               <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Registro</button>
          </div>

     </form>
</div>
@endsection

