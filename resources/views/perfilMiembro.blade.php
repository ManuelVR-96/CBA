@extends('layouts.app')

@section('content')

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
     
     
     if ($(this).next('ul').is(":visible")){
     $('ul.dropdown-menu').hide();
     $(this).next('ul').hide();
     console.log("aqui");
     e.stopPropagation();
    e.preventDefault();
     }
     else{$('ul.dropdown-menu').hide();
          $(this).next('ul').show();
          e.stopPropagation();
    e.preventDefault();
     }
    
  });

 
  
 

});
</script>
     <style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
     <div class="panel panel-default">
          <div class="panel-body">
          @auth
          <div class="form-group row">
               <label class="col-sm-5">Valoraciones</label>
          <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Test Delta <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class = "prueba" tabindex="-1" href="{{ url('delta/'.$user->id.'/edit') }}">Agregar Test Delta</a></li>
          <li><a class = "prueba" tabindex="-1" href="#">Editar Test Delta</a></li>
          <li><a class = "prueba" tabindex="-1" href="{{ url('delta/'.$user->id) }}">Ver Test Delta</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Valoración actividad física y recreación <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="{{ url('actividad_inicial/create/'.$user->id) }}">Agregar valoración actividad física y recreación</a></li>
          <li><a tabindex="-1" href="{{ url('actividad_inicial/'.$user->id) }}">Ver valoración actividad física y recreación</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Valoración fisioterapia inicial <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="{{ url('fisio_inicial/create/'.$user->id) }}">Agregar valoración de fisioterapia inicial</a></li>
          <li><a tabindex="-1" href="{{ url('fisio_inicial/'.$user->id) }}">Ver valoración de fisioterapia inicial</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Valoración médica inicial <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="{{ url('medica_inicial/create/'.$user->id) }}" >Agregar valoración médica inicial</a></li>
          <li><a tabindex="-1" href="{{ url('medica_inicial/'.$user->id) }}">Ver valoración médica inicial</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Valoración gerontológica<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="{{ url('geron_inicial/create/'.$user->id) }}">Agregar valoración gerontológica</a></li>
          <li><a tabindex="-1" href="{{ url('geron_inicial/'.$user->id) }}">Ver valoración gerontológica</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Valoración nutricional inicial <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="{{ url('nutricional_inicial/create/'.$user->id) }}">Agregar valoración nutricional inicial</a></li>
          <li><a tabindex="-1" href="{{ url('nutricional_inicial/'.$user->id) }}">Ver valoración nutricional inicial</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Valoración psicológica inicial <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class = "prueba" tabindex="-1" href="{{ url('psico_inicial/create/'.$user->id) }}">Agregar valoración psicológica inicial</a></li>
          <li><a class = "prueba" tabindex="-1" href="{{ url('psico_inicial/'.$user->id) }}">Ver valoración psicológica inicial</a></li>
        </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="">Evaluación centrada en la persona <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class = "prueba" tabindex="-1" href="{{ url('seguimiento/'.$user->id.'/edit') }}">Editar evaluación centrada en la persona</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
</div>
                              </div>
              
               <form action="{{route('miembros.eliminar', $user)}}" class="d-inline" method="POST">               
                    @csrf
                    @method("DELETE")
                    <div class="form-horizontal">
                    <fieldset disabled>
                         <div class="col-sm-6">
                              
                              <div class="form-group row">
                                   <label class="col-sm-5">Foto de perfil</label>
                                   <div class="col-sm-3">
                                        <img src = "/uploads/avatar/{{$user->avatar}}">
                                   </div>
                              </div>

                              

                              <div class="form-group row">
                                   <label class="col-sm-5">Cédula</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->cédula}}">
                                   </div>
                              </div>                              

                              <div class="form-group row">
                                   <label class="col-sm-5">Nombres</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->nombres}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Apellidos</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->apellidos}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Nivel Educativo</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->nivel_educativo}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Dirección</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dirección}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Lugar de Nacimiento</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->Lugar_de_nacimiento}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Fecha de Nacimiento</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$user->fecha_de_nacimiento}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Fecha de Ingreso</label>
                                   <div class="col-sm-6">
                                        <input type="date" class="form-control" value="{{$user->fecha_de_ingreso}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Seguridad Social</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->seguridad_social}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Primer Acudiente</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->primer_acudiente}}">
                                   </div>
                              </div>
                         </div>
                         
                         <div class="col-sm-6">
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Segundo Acudiente</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->segundo_acudiente}}">
                                   </div>
                              </div>
                        
                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Servicio Funerario</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->servicio_funerario}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Entidad Funeraria</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->entidad_funeraria}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Dependencia Económica</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dependencia_económica}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Dependencia Afectiva</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->dependencia_afectiva}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Relación Familiar</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->relación_familiar}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Hobbies</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->hobbies}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Motivo de Ingreso</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->motivo_ingreso}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Tipo de Sangre</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->Tipo_Sangre}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">EPS</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->EPS}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Morbilidad</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->morbilidad}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Género</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->género}}">
                                   </div>
                              </div>

                              <div class="form-group row">
                                   <label class="col-sm-5 col-form-label">Medicinas</label>
                                   <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{$user->medicinas}}">
                                   </div>
                              </div>
                         </div>

                    </fieldset>


<a href= "{{ url('valoraciones/create/'.$user->id) }}" class="btn btn-primary btn-sm">Agregar nueva Valoración</a>
<a href= "{{ url('notificacion/create/'.$user->id) }}" class="btn btn-primary btn-sm">Solicitar revisión</a>
                    <a href= "{{ url('miembros/'.$user->id.'/edit') }}" class="btn btn-primary btn-sm">Editar información del paciente</a>
                    
                    @if(auth()->user()->rol=="Administrador")
                         <div align="center">
                              <button class='btn btn-danger' type="submit" name="eliminar" onclick="return confirm('¿Confirma que desea ELIMINAR de manera permanente el registro?')"></span>Eliminar Registro</button>
                         </div>
                         
                         @endif
                    </div>              
               </form>
          </div>
     </div>
     @endauth
@endsection
