@extends('layouts.app')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../css/estilo.css">   

    <div class="container box">
        <form method="POST" class="form" action="{{route('fisio_inicial.store')}}">
            <div class="card-header form-tittle_">Registro Evaluación Fisioterapia de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
           
            @csrf  
            <div>
                <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
            </div>
            
            <div class="form-header2"><h1 class="form-tittle2">{{ __('1. CARACTERIZACIÓN') }}</h1></div><br>
            <div class="form-group row">
                <label for="antecedentes" class="col-md-5 col-form-label">{{ __('Antecedentes') }}</label>
                <div class="col-md-7">
                    <Textarea id="antecedentes" type="text" class="form-control @error('antecedentes') is-invalid @enderror" name="antecedentes" value="{{ old('antecedentes') }}"></textarea>
                    @error('antecedentes')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="situacion_salud" class="col-md-5 col-form-label">{{ __('Situación de salud') }}</label>
                <div class="col-md-7">
                    <Textarea id="situacion_salud" type="text" class="form-control @error('situacion_salud') is-invalid @enderror" name="situacion_salud" value="{{ old('situacion_salud') }}"></textarea>
                    @error('situacion_salud')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="medicamentos" class="col-md-5 col-form-label">{{ __('Medicamentos') }}</label>
                <div class="col-md-7">
                    <Textarea id="medicamentos" type="text" class="form-control @error('medicamentos') is-invalid @enderror" name="medicamentos" value="{{ old('medicamentos') }}"></textarea>
                    @error('medicamentos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="actividad_diaria" class="col-md-5 col-form-label">{{ __('Actividades diarias funcionales') }}</label>
                <div class="col-md-7">
                    <Textarea id="actividad_diaria" type="text" class="form-control @error('actividad_diaria') is-invalid @enderror" name="actividad_diaria" value="{{ old('actividad_diaria') }}"></textarea>
                    @error('actividad_diaria')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="gusta_realizar" class="col-md-5 col-form-label">{{ __('Actividades que le gusta realizar') }}</label>
                <div class="col-md-7">
                    <Textarea id="gusta_realizar" type="text" class="form-control @error('gusta_realizar') is-invalid @enderror" name="gusta_realizar" value="{{ old('gusta_realizar') }}"></textarea>
                    @error('actividad_diaria')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('2. VALORACIÓN') }}</h1></div>
            <div class="form-header2"><h1 class="form-tittle2">{{ __('2.1 Alerta, Atención y Cognición') }}</h1></div>
            <div class="table-responsive">                    
                <table class="table table-striped table-bordered">
                    <tbody>        
                        <tr>
                            <th scope="col">Alerta</th>
                            <th scope="col">Confusión</th>
                            <th scope="col">Somnolencia</th>                
                        </tr>

                        <tr>
                            <td scope="col"><input type="radio" name="estado_fisioterapia" value="Normal"></td>
                            <td scope="col"><input type="radio" name="estado_fisioterapia" value="Anormal"></td>
                            <td scope="col"><input type="radio" name="estado_fisioterapia" value="Normal"></td>
                        </tr>
                    </body>
                </table>
            </div>

            <div class="form-group row">
                <label for="escala_glasgow_verbal" class="col-md-5 col-form-label">{{ __('Escala de Glasgow - Respuesta Verbal') }}</label>
                <div class="col-md-7">
                    <select name="escala_glasgow_verbal" type="integer" class="form-control @error('escala_glasgow_verbal') is-invalid @enderror" value="{{ old('escala_glasgow_verbal') }}">>
                        <option value="{{ old('escala_glasgow_verbal') }}">{{ old('escala_glasgow_verbal') }}</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>     
                    </select>

                    @error('escala_glasgow_verbal')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="escala_glasgow_motora" class="col-md-5 col-form-label">{{ __(' Escala de Glosgow - Respuesta motora') }}</label>
                <div class="col-md-7">
                    <select name="escala_glasgow_motora" type="integer" class="form-control @error('escala_glasgow_motora') is-invalid @enderror" value="{{ old('escala_glasgow_motora') }}">>
                        <option value="{{ old('escala_glasgow_motora') }}">{{ old('escala_glasgow_motora') }}</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option> 
                        <option value=5>5</option>
                        <option value=6>6</option>    
                    </select>

                    @error('escala_glasgow_motora')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
            <label for="cognicion_dos" class="col-md-5 col-form-label">{{ __(' Escala de Glasgow - Apertura de ojos') }}</label>
                <div class="col-md-7">
                    <select name="escala_glasgow_ojos" type="integer" class="form-control @error('escala_glasgow_ojos') is-invalid @enderror" value="{{ old('escala_glasgow_ojos') }}">>
                        <option value="{{ old('escala_glasgow_ojos') }}">{{ old('escala_glasgow_ojos') }}</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>     
                    </select>

                    @error('escala_glasgow_ojos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('2.2 Dolor') }}</h1></div><br>               
            <div class="form-group row">
                <label for="dolor_localizacion" class="col-md-5 col-form-label">{{ __('Localización') }}</label>
                <div class="col-md-7">
                    <Textarea id="dolor_localizacion" type="text" class="form-control @error('dolor_localizacion') is-invalid @enderror" name="dolor_localizacion" value="{{ old('dolor_localizacion') }}"></textarea>
                    @error('dolor_localizacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_tipo" class="col-md-5 col-form-label">{{ __('Tipo de dolor (Cólico, Urente, Ardor)') }}</label>
                <div class="col-md-7">
                    <input id="dolor_tipo" type="integer" class="form-control @error('dolor_tipo') is-invalid @enderror" name="dolor_tipo" value="{{ old('dolor_tipo') }}"  autofocus>
                    @error('dolor_tipo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_analoga" class="col-md-5 col-form-label">{{ __(' Escala análoga de dolor') }}</label>
                <div class="col-md-7">
                    <select name="dolor_analoga" type="integer" class="form-control @error('dolor_analoga') is-invalid @enderror" value="{{ old('dolor_analoga') }}">>
                        <option value="{{ old('dolor_analoga') }}">{{ old('dolor_analoga') }}</option>
                        <option value=1>1</option>
                        <option value=2>2</option>
                        <option value=3>3</option>
                        <option value=4>4</option>
                        <option value=5>5</option>
                        <option value=6>6</option>
                        <option value=7>7</option>
                        <option value=8>8</option>
                        <option value=9>9</option>
                        <option value=10>10</option>    
                    </select>

                    @error('dolor_analoga')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_frencuencia" class="col-md-5 col-form-label">{{ __('Frecuencia') }}</label>
                <div class="col-md-7">
                    <Textarea id="dolor_frencuencia" type="text" class="form-control @error('dolor_frencuencia') is-invalid @enderror" name="dolor_frencuencia" value="{{ old('dolor_frencuencia') }}"></textarea>
                    @error('dolor_frencuencia')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_tiempo_evolucion" class="col-md-5 col-form-label">{{ __('Tiempo de evolución') }}</label>
                <div class="col-md-7">
                    <Textarea id="dolor_tiempo_evolucion" type="text" class="form-control @error('dolor_tiempo_evolucion') is-invalid @enderror" name="dolor_tiempo_evolucion" value="{{ old('dolor_tiempo_evolucion') }}"></textarea>
                    @error('dolor_tiempo_evolucion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_que_aumenta" class="col-md-5 col-form-label">{{ __('Factores que lo aumentan: ') }}</label>
                <div class="col-md-7">
                    <Textarea id="dolor_que_aumenta" type="text" class="form-control @error('dolor_que_aumenta') is-invalid @enderror" name="dolor_que_aumenta" value="{{ old('dolor_que_aumenta') }}"></textarea>
                    @error('dolor_que_aumenta')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_que_disminuye" class="col-md-5 col-form-label">{{ __('Factores que lo disminuyen: ') }}</label>
                <div class="col-md-7">
                    <Textarea id="dolor_que_disminuye" type="text" class="form-control @error('dolor_que_disminuye') is-invalid @enderror" name="dolor_que_disminuye" value="{{ old('dolor_que_disminuye') }}"></textarea>
                    @error('dolor_que_disminuye')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dolor_observaciones" class="col-md-5 col-form-label">{{ __('Observaciones') }}</label>
                <div class="col-md-7">
                    <Textarea id="dolor_observaciones" type="text" class="form-control @error('dolor_observaciones') is-invalid @enderror" name="dolor_observaciones" value="{{ old('dolor_observaciones') }}"></textarea>
                    @error('dolor_observaciones')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('2.3 Screening Articular') }}</h1></div><br>    
            <div class="table-responsive">                    
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Posición del paciente</th>
                        <th scope="col">Movimiento evaluado</th>
                        <th scope="col">Instrucciones al paciente</th>
                        <th scope="col">Calificación</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td scope="col" rowspan="16">Sentada</td>
                        <td scope="col">Abducción de hombro-rotación lateral</td>
                        <td scope="col">Cójase las manos por detrás de la nuca, presionando los codos posteriormente<br>
                        Pase la mano por detrás de la cabeza y tóquese la escapula contraria. </td>
                        <td scope="col"><input id="abduccion_hombro" type="integer" class="form-control @error('abduccion_hombro') is-invalid @enderror" name="abduccion_hombro" value="{{ old('abduccion_hombro') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col">Abducción de hombro-rotación lateral</td>
                        <td scope="col">Alcance el hombro contra lateral<br>
                            Tóquese el ángulo inferior de escapula contra lateral<br>
                            Cójase las manos por detrás de la espalda tan arriba como sea posible.
                        </td>
                        <td scope="col"><input id="rotacion_medial" type="integer" class="form-control @error('rotacion_medial') is-invalid @enderror" name="rotacion_medial" value="{{ old('rotacion_medial') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col">Flexion y extension del hombro</td>
                        <td scope="col">Coloque sus brazos al frente de su cuerpo, levántelos a la altura de la cabeza.<br>
                                        Partiendo de la  posición inicial llevar las extremidades superiores lo más atrás posible.</td>
                        <td scope="col"><input id="flexion_extension_hombro" type="integer" class="form-control @error('flexion_extension_hombro') is-invalid @enderror" name="flexion_extension_hombro" value="{{ old('flexion_extension_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión - extensión de codo </td>
                        <td scope="col">Doble y extienda los codos. </td>
                        <td scope="col"><input id="flexion_extension_codo" type="integer" class="form-control @error('flexion_extension_codo') is-invalid @enderror" name="flexion_extension_codo" value="{{ old('flexion_extension_codo') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Supinación-pronación</td>
                        <td scope="col">Con los codos flexionados a 90° supine y prone los antebrazos.</td>
                        <td scope="col"><input id="supinacion_pronacion" type="integer" class="form-control @error('supinacion_pronacion') is-invalid @enderror" name="supinacion_pronacion" value="{{ old('supinacion_pronacion') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión-extensión de muñeca</td>
                        <td scope="col">Flexiones y extienda las muñecas</td>
                        <td scope="col"><input id="flexion_extension_muneca" type="integer" class="form-control @error('flexion_extension_muneca') is-invalid @enderror" name="flexion_extension_muneca" value="{{ old('flexion_extension_muneca') }}" ></td>                  
                        </tr>

                        <tr>                   
                        <td scope="col">Desviación radial ulnar</td>
                        <td scope="col">Mueva la muñeca lateral y medialmente</td>
                        <td scope="col"><input id="desviacion_radial_ulnar" type="integer" class="form-control @error('desviacion_radial_ulnar') is-invalid @enderror" name="desviacion_radial_ulnar" value="{{ old('desviacion_radial_ulnar') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Abudcción y aducción de dedos</td>
                        <td scope="col">Separe un junte los dedos</td>
                        <td scope="col"><input id="abduccion_aduccion_dedos" type="integer" class="form-control @error('abduccion_aduccion_dedos') is-invalid @enderror" name="abduccion_aduccion_dedos" value="{{ old('abduccion_aduccion_dedos') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión extensión de dedos</td>
                        <td scope="col">Cierra y abre las manos.</td>
                        <td scope="col"><input id="flexion_extension_dedos" type="integer" class="form-control @error('flexion_extension_dedos') is-invalid @enderror" name="flexion_extension_dedos" value="{{ old('flexion_extension_dedos') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión-extensión de pulgar</td>
                        <td scope="col">Doble el pulgar sobre la palma de la mano y después exitiéndalo hacia afuera.</td>
                        <td scope="col"><input id="flexion_extension_pulgar" type="integer" class="form-control @error('flexion_extension_pulgar') is-invalid @enderror" name="flexion_extension_pulgar" value="{{ old('flexion_extension_pulgar') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión-extensión de cuello</td>
                        <td scope="col">Apriete el mentón contra el pecho.<br>
                        Incline la cabeza hacia atrás.</td>
                        <td scope="col"><input id="flexion_extension_cuello" type="integer" class="form-control @error('flexion_extension_cuello') is-invalid @enderror" name="flexion_extension_cuello" value="{{ old('flexion_extension_cuello') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotación del cuello</td>
                        <td scope="col">Gire la cabeza a la derecha y a la izquierda.</td>
                        <td scope="col"><input id="rotacion_cuello" type="integer" class="form-control @error('rotacion_cuello') is-invalid @enderror" name="rotacion_cuello" value="{{ old('rotacion_cuello') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión-aducción de la cadera</td>
                        <td scope="col">Sentada cruce las piernas alternativamente.</td>
                        <td scope="col"><input id="flexion_aduccion_cadera" type="integer" class="form-control @error('flexion_aduccion_cadera') is-invalid @enderror" name="flexion_aduccion_cadera" value="{{ old('flexion_aduccion_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión,abducción,rotación lateral de cadera</td>
                        <td scope="col">Descruce las piernas y coloque la cara lateral del pie sobre la rodilla contraria..</td>
                        <td scope="col"><input id="flexion_abduccion_lateral_cadera" type="integer" class="form-control @error('flexion_abduccion_lateral_cadera') is-invalid @enderror" name="flexion_abduccion_lateral_cadera" value="{{ old('flexion_abduccion_lateral_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Inversión del tobillo</td>
                        <td scope="col">Gire el pie hacia adentro.</td>
                        <td scope="col"><input id="inversion_tobillo" type="integer" class="form-control @error('inversion_tobillo') is-invalid @enderror" name="inversion_tobillo" value="{{ old('inversion_tobillo') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Eversión del pie</td>
                        <td scope="col">Gire el pie hacia afuera.</td>
                        <td scope="col"><input id="eversion_pie" type="integer" class="form-control @error('eversion_pie') is-invalid @enderror" name="eversion_pie" value="{{ old('eversion_pie') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col" rowspan = "3">Sentada o supina</td>
                        <td scope="col">Abudicción-aducción de cadera</td>
                        <td scope="col">Flexione caderas y rodillas y levante las nalgas haciendo un puente.</td>
                        <td scope="col"><input id="abduccion_aduccion_cadera" type="integer" class="form-control @error('abduccion_aduccion_cadera') is-invalid @enderror" name="abduccion_aduccion_cadera" value="{{ old('abduccion_aduccion_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensión de cadera</td>
                        <td scope="col">Flexione caderas y rodillas y levante las nalgas haciendo un puente.</td>
                        <td scope="col"><input id="extension_cadera" type="integer" class="form-control @error('extension_cadera') is-invalid @enderror" name="extension_cadera" value="{{ old('extension_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión extensión de rodilla</td>
                        <td scope="col">Flexione las rodillas hacia el pecho, mantenga los talones hacia las nalgas y vuelva hacia la posición inicial.</td>
                        <td scope="col"><input id="flexion_extension_rodilla" type="integer" class="form-control @error('flexion_extension_rodilla') is-invalid @enderror" name="flexion_extension_rodilla" value="{{ old('flexion_extension_rodilla') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col" rowspan = "6">Bipedestación</td>
                        <td scope="col">Flexión de tronco</td>
                        <td scope="col">Flexione el tronco hacia delante e intente alcanzar con la mano los dedos de los pies sin doblar las rodillas.</td>
                        <td scope="col"><input id="flexion_tronco" type="integer" class="form-control @error('flexion_tronco') is-invalid @enderror" name="flexion_tronco" value="{{ old('flexion_tronco') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensión de tronco</td>
                        <td scope="col">Flexione el tronco hacia atrás mientras estoy detrás de usted.</td>
                        <td scope="col"><input id="extension_tronco" type="integer" class="form-control @error('extension_tronco') is-invalid @enderror" name="extension_tronco" value="{{ old('extension_tronco') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión lateral de tronco</td>
                        <td scope="col">Inclínese a la derecha e izquierda mientras yo le sujeto la cintura.</td>
                        <td scope="col"><input id="flexion_lateral_tronco" type="integer" class="form-control @error('flexion_lateral_tronco') is-invalid @enderror" name="flexion_lateral_tronco" value="{{ old('flexion_lateral_tronco') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotación de tronco</td>
                        <td scope="col">Gire a la derecha e izquierda mientras yo le sujeto la pelvis.</td>
                        <td scope="col"><input id="rotacion_tronco" type="integer" class="form-control @error('rotacion_tronco') is-invalid @enderror" name="rotacion_tronco" value="{{ old('rotacion_tronco') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Plantiflexion del tobillo-extensión de dedos de pie</td>
                        <td scope="col">Póngase en puntillas</td>
                        <td scope="col"><input id="pantiflexion_tobillo" type="integer" class="form-control @error('pantiflexion_tobillo') is-invalid @enderror" name="pantiflexion_tobillo" value="{{ old('pantiflexion_tobillo') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexión dorsal del tobillo</td>
                        <td scope="col">Apóyese sobre los talones</td>
                        <td scope="col"><input id="flexion_dorsal_tobillo" type="integer" class="form-control @error('flexion_dorsal_tobillo') is-invalid @enderror" name="flexion_dorsal_tobillo" value="{{ old('flexion_dorsal_tobillo') }}" ></td>                  
                        </tr>
                    </body>
                </table>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('2.4 Screening Muscular') }}</h1></div><br>               
            <div class="table-responsive">                    
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Posición del paciente</th>
                        <th scope="col">Movimiento evaluado</th>
                        <th scope="col">Instrucciones al paciente</th>
                        <th scope="col">Acción del terapeuta</th>
                        <th scope="col">Calificación</th>                    
                        </tr>
                    </thead>
                    <tbody>                    
                        <tr>
                        <td scope="col" rowspan = "9">Supina</td>
                        <td scope="col">Flexores de cuello y tronco</td>
                        <td scope="col">Mantenga los brazos rectos, delante del cuerpo, levante los hombros y cabeza de la camilla. Sostenga.</td>
                        <td scope="col">Ninguna</td>
                        <td scope="col"><input id="flexores_cuello_tronco" type="integer" class="form-control @error('flexores_cuello_tronco') is-invalid @enderror" name="flexores_cuello_tronco" value="{{ old('flexores_cuello_tronco') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores de cadera</td>
                        <td scope="col">Mantenga las piernas rectas. Levante ambas piernas de la camilla simultáneamente. Sostenga.</td>
                        <td scope="col">Ninguna</td>
                        <td scope="col"><input id="flexores_cadera" type="integer" class="form-control @error('flexores_cadera') is-invalid @enderror" name="flexores_cadera" value="{{ old('flexores_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Abductores de cadera</td>
                        <td scope="col">Abduzca las piernas. Mantenga.</td>
                        <td scope="col">Intentar juntar las piernas</td>
                        <td scope="col"><input id="abductores_cadera" type="integer" class="form-control @error('abductores_cadera') is-invalid @enderror" name="abductores_cadera" value="{{ old('abductores_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Aductores de cadera</td>
                        <td scope="col">Junte las piernas. Mantenga.</td>
                        <td scope="col">Intentar separar las piernas</td>
                        <td scope="col"><input id="aductores_cadera" type="integer" class="form-control @error('aductores_cadera') is-invalid @enderror" name="aductores_cadera" value="{{ old('aductores_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores de cadera</td>
                        <td scope="col">Flexione caderas y rodillas, manteniendo las plantas de los pies sobre la camilla. levante la cadera de la camilla.</td>
                        <td scope="col">Ninguna</td>
                        <td scope="col"><input id="extensores_cadera_sup" type="integer" class="form-control @error('extensores_cadera_sup') is-invalid @enderror" name="extensores_cadera_sup" value="{{ old('extensores_cadera_sup') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Aductores del hombro</td>
                        <td scope="col">Junte las manos delante del pecho, codos rectos. Mantenga.</td>
                        <td scope="col">Intente separar los brazos horizontalmente</td>
                        <td scope="col"><input id="aductores_hombro" type="integer" class="form-control @error('aductores_hombro') is-invalid @enderror" name="aductores_hombro" value="{{ old('aductores_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores de hombro – rotadores ascendentes de escapula</td>
                        <td scope="col">Flexione hombros a 90° ,codos rectos. Mantenga.</td>
                        <td scope="col">Intente extender los  brazos.</td>
                        <td scope="col"><input id="flexores_hombro" type="integer" class="form-control @error('flexores_hombro') is-invalid @enderror" name="flexores_hombro" value="{{ old('flexores_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores del hombro-rotadores descendente de la escapula</td>
                        <td scope="col">Flexione hombros a 90° ,codos rectos. Mantenga.</td>
                        <td scope="col">Intente flexionar los  brazos.</td>
                        <td scope="col"><input id="extensores_hombro" type="integer" class="form-control @error('extensores_hombro') is-invalid @enderror" name="extensores_hombro" value="{{ old('extensores_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores de hombro – rotadores ascendentes de escapula</td>
                        <td scope="col">Flexione hombros a 90° ,codos rectos. Mantenga.</td>
                        <td scope="col">Intente empujar los  brazos hasta alcanzar la aducción horizontal.</td>
                        <td scope="col"><input id="abductores_horizontales_hombro" type="integer" class="form-control @error('abductores_horizontales_hombro') is-invalid @enderror" name="abductores_horizontales_hombro" value="{{ old('abductores_horizontales_hombro') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col" rowspan ="16">Supina o sedente </td>
                        <td scope="col">Abductores del hombro</td>
                        <td scope="col">Abduzca los hombros paralelamente al suelo, codos rectos. Mantenga.</td>
                        <td scope="col">Intente empujar los  brazos hacia abajo hasta alcanzar la abducción</td>
                        <td scope="col"><input id="abductores_hombro" type="integer" class="form-control @error('abductores_hombro') is-invalid @enderror" name="abductores_hombro" value="{{ old('abductores_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Aductores del hombro</td>
                        <td scope="col">Aduzca los hombros paralelamente al suelo, codos rectos. Mantenga.</td>
                        <td scope="col">Intente empujar los  brazos hacia la cabeza hasta alcanzar la posición de aducción.</td>
                        <td scope="col"><input id="aductores_hombro_sup" type="integer" class="form-control @error('aductores_hombro_sup') is-invalid @enderror" name="aductores_hombro_sup" value="{{ old('aductores_hombro_sup') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotadores mediales de hombro</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro. Sostenga.</td>
                        <td scope="col">Intente empujar los  brazos hacia fuera ,rotación externa.</td>
                        <td scope="col"><input id="rotadores_mediales_hombro" type="integer" class="form-control @error('rotadores_mediales_hombro') is-invalid @enderror" name="rotadores_mediales_hombro" value="{{ old('rotadores_mediales_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotadores laterales de  hombro</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro, sostenga.</td>
                        <td scope="col">Intente empujar los  brazos hacia el cuerpo  en rotación externa.</td>
                        <td scope="col"><input id="rotadores_laterales_hombro" type="integer" class="form-control @error('rotadores_laterales_hombro') is-invalid @enderror" name="rotadores_laterales_hombro" value="{{ old('rotadores_laterales_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores de codo</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro. Sostenga</td>
                        <td scope="col">Intente empujar los  antebrazos hacia la camilla hasta alcanzar la extensión de los codos.</td>
                        <td scope="col"><input id="flexores_codo" type="integer" class="form-control @error('flexores_codo') is-invalid @enderror" name="flexores_codo" value="{{ old('flexores_codo') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotadores laterales de hombro</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro, sostenga.</td>
                        <td scope="col">Intente empujar los  brazos hacia el cuerpo  en rotación externa.</td>
                        <td scope="col"><input id="rotadores_laterales_hombro" type="integer" class="form-control @error('rotadores_laterales_hombro') is-invalid @enderror" name="rotadores_laterales_hombro" value="{{ old('rotadores_laterales_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores codo</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro. Sostenga.</td>
                        <td scope="col">Intente empujar los  antebrazos hacia el hombro hasta alcanzar la flexión de los codos.</td>
                        <td scope="col"><input id="extensores_codo" type="integer" class="form-control @error('extensores_codo') is-invalid @enderror" name="extensores_codo" value="{{ old('extensores_codo') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Supinadores</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro. Gire las palmas de las manos hacia arriba. Sostenga.</td>
                        <td scope="col">Intente girar las palmas de las manos hacia abajo ,hacia la pronación.</td>
                        <td scope="col"><input id="supinadores" type="integer" class="form-control @error('supinadores') is-invalid @enderror" name="supinadores" value="{{ old('supinadores') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Pronadores</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en neutro. Sostenga.</td>
                        <td scope="col">Intente girar las palmas de las manos hacia arriba ,hacia la supinación.</td>
                        <td scope="col"><input id="pronadores" type="integer" class="form-control @error('pronadores') is-invalid @enderror" name="pronadores" value="{{ old('pronadores') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores de muñeca</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en pronación, levante las manos (muñecas). Sostenga.</td>
                        <td scope="col">Intente llevar en flexión las muñecas.</td>
                        <td scope="col"><input id="extensores_muñeca" type="integer" class="form-control @error('extensores_muñeca') is-invalid @enderror" name="extensores_muñeca" value="{{ old('extensores_muñeca') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores de muñeca</td>
                        <td scope="col"> Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en supinación, levante las manos (muñecas). Sostenga.</td>
                        <td scope="col">Intente llevar en flexión las muñecas.</td>
                        <td scope="col"><input id="flexores_muñeca" type="integer" class="form-control @error('flexores_muñeca') is-invalid @enderror" name="flexores_muñeca" value="{{ old('flexores_muñeca') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores dedos</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en supinación, apriete mis dedos. Sostenga.</td>
                        <td scope="col">Coloque el segundo y tercer dedos en las manos del paciente y trate de retirarlos.</td>
                        <td scope="col"><input id="flexores_dedos" type="integer" class="form-control @error('flexores_dedos') is-invalid @enderror" name="flexores_dedos" value="{{ old('flexores_dedos') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores de dedos</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en pronación extienda los dedos. Sostenga.</td>
                        <td scope="col">Flexione los dedos.</td>
                        <td scope="col"><input id="extensores_dedos" type="integer" class="form-control @error('extensores_dedos') is-invalid @enderror" name="extensores_dedos" value="{{ old('extensores_dedos') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Interóseos palmares</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en supinación abduzca los dedos. Sostenga.</td>
                        <td scope="col">Intente abducir  los dedos.</td>
                        <td scope="col"><input id="interoseos_palmares" type="integer" class="form-control @error('interoseos_palmares') is-invalid @enderror" name="interoseos_palmares" value="{{ old('interoseos_palmares') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Interóseos dorsales</td>
                        <td scope="col"> Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en supinación abduzca los dedos. sostenga</td>
                        <td scope="col">Intente abducir  los dedos.</td>
                        <td scope="col"><input id="interoseos_dorsales" type="integer" class="form-control @error('interoseos_dorsales') is-invalid @enderror" name="interoseos_dorsales" value="{{ old('interoseos_dorsales') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Oponente del pulgar</td>
                        <td scope="col">Mantenga los brazos a los lados del tronco, codos flexionados a 90, antebrazos en supinación pellizque mi dedo. Sostenga.</td>
                        <td scope="col">Coloque el índice entre el pulgar del paciente y cada uno de sus dedos, uno a uno.</td>
                        <td scope="col"><input id="oponente_pulgar" type="integer" class="form-control @error('oponente_pulgar') is-invalid @enderror" name="oponente_pulgar" value="{{ old('oponente_pulgar') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col" rowspan ="5">Sedente </td>
                        <td scope="col">Dorsal ancho-tríceps</td>
                        <td scope="col">Coloque las manos sobre la camilla, al lado de las caderas, codos rectos, hombros encogidos. Haga presión sobre la escapula y levante las nalgas de la camilla.</td>
                        <td scope="col">Intente abducir  los dedos.</td>
                        <td scope="col"><input id="dorsal_ancho_triceps" type="integer" class="form-control @error('dorsal_ancho_triceps') is-invalid @enderror" name="dorsal_ancho_triceps" value="{{ old('dorsal_ancho_triceps') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Trapecio superior-elevador de escapula</td>
                        <td scope="col">Suba los hombros hacia las orejas, mantenga.</td>
                        <td scope="col">Empuje los hombros hacia abajo.</td>
                        <td scope="col"><input id="trapecio_superior" type="integer" class="form-control @error('trapecio_superior') is-invalid @enderror" name="trapecio_superior" value="{{ old('trapecio_superior') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotadores mediales de cadera-evertores de pie</td>
                        <td scope="col">Gire el pie hacia afuera. Mantenga.</td>
                        <td scope="col">Presione la cara lateral de cada pie hasta alcanzar la inversión y rotación lateral de cadera.</td>
                        <td scope="col"><input id="rotadores_mediales" type="integer" class="form-control @error('rotadores_mediales') is-invalid @enderror" name="rotadores_mediales" value="{{ old('rotadores_mediales') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Dorsal ancho-tríceps</td>
                        <td scope="col">Coloque las manos sobre la camilla, al lado de las caderas, codos rectos, hombros encogidos. Haga presión sobre la escapula y levante las nalgas de la camilla.</td>
                        <td scope="col">Intente abducir  los dedos.</td>
                        <td scope="col"><input id="dorsal_ancho_triceps" type="integer" class="form-control @error('dorsal_ancho_triceps') is-invalid @enderror" name="dorsal_ancho_triceps" value="{{ old('dorsal_ancho_triceps') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Rotadores laterales de cadera-inversores de pie.</td>
                        <td scope="col">Gire el pie hacia adentro. Mantenga.</td>
                        <td scope="col">Presione la cara medial de cada pie hasta alcanzar la eversión y rotación medial de cadera.</td>
                        <td scope="col"><input id="rotadores_laterales_cadera" type="integer" class="form-control @error('rotadores_laterales_cadera') is-invalid @enderror" name="rotadores_laterales_cadera" value="{{ old('rotadores_laterales_cadera') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col" rowspan="5">Prona </td>
                        <td scope="col">Romboideos-trapecio medio-deltoides posterior</td>
                        <td scope="col">Doble los codos a nivel de hombro, junte las escapulas, levante los brazos de la camilla. Mantenga.</td>
                        <td scope="col">Presione ,intente bajar los brazos a la camilla.</td>
                        <td scope="col"><input id="romboideos" type="integer" class="form-control @error('romboideos') is-invalid @enderror" name="romboideos" value="{{ old('romboideos') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores de codo-hombro</td>
                        <td scope="col">Brazos estirados al lado del cuerpo, levante los brazos de la camilla. Mantenga.</td>
                        <td scope="col">Intentar bajar los brazos hacia la flexión.</td>
                        <td scope="col"><input id="extensores_codo_hombro" type="integer" class="form-control @error('extensores_codo_hombro') is-invalid @enderror" name="extensores_codo_hombro" value="{{ old('extensores_codo_hombro') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores de cadera, espalda, cuello, y hombros</td>
                        <td scope="col">Brazos estirados al lado del cuerpo, arquee la  espalda levantando simultáneamente de la camilla la cadera, hombros, brazos, piernas. Mantenga.</td>
                        <td scope="col">Ninguna</td>
                        <td scope="col"><input id="extensores_cadera" type="integer" class="form-control @error('extensores_cadera') is-invalid @enderror" name="extensores_cadera" value="{{ old('extensores_cadera') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Isquiotibiales</td>
                        <td scope="col">Flexione rodillas. Mantenga.</td>
                        <td scope="col">Intentar empujar las rodillas  hasta alcanzar la máxima extensión.</td>
                        <td scope="col"><input id="isquiotibiales" type="integer" class="form-control @error('isquiotibiales') is-invalid @enderror" name="isquiotibiales" value="{{ old('isquiotibiales') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Cuádriceps</td>
                        <td scope="col">Flexione rodillas. Mantenga.</td>
                        <td scope="col">Intentar empujar las rodillas  hasta alcanzar la máxima flexión.</td>
                        <td scope="col"><input id="cuadriceps" type="integer" class="form-control @error('cuadriceps') is-invalid @enderror" name="cuadriceps" value="{{ old('cuadriceps') }}" ></td>                  
                        </tr>

                        <tr>
                        <td scope="col" rowspan = "3">Bipedestación </td>
                        <td scope="col">Gastronemios-sóleo</td>
                        <td scope="col">Manténgase sobre una pierna apoyando ligeramente la otra sobre la camilla, póngase de puntas-repita la operación diez veces-haga lo mismo en la otra pierna.</td>
                        <td scope="col">Ninguna.</td>
                        <td scope="col"><input id="gastronemios" type="integer" class="form-control @error('gastronemios') is-invalid @enderror" name="gastronemios" value="{{ old('gastronemios') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Flexores dorsales de pies</td>
                        <td scope="col">Camine en talones diez pasos.</td>
                        <td scope="col">Ninguna</td>
                        <td scope="col"><input id="flexores_dorsales" type="integer" class="form-control @error('flexores_dorsales') is-invalid @enderror" name="flexores_dorsales" value="{{ old('flexores_dorsales') }}" ></td>                  
                        </tr>

                        <tr>                    
                        <td scope="col">Extensores de cadera-rodilla</td>
                        <td scope="col">Flexione rodillas. Mantenga.</td>
                        <td scope="col">Flexione las rodillas cinco veces.</td>
                        <td scope="col"><input id="extensores_cadera_rodilla" type="integer" class="form-control @error('extensores_cadera_rodilla') is-invalid @enderror" name="extensores_cadera_rodilla" value="{{ old('extensores_cadera_rodilla') }}" ></td>                  
                        </tr>
                    </body>
                </table>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('3. FUERZA MUSCULAR') }}</h1></div><br>
            <div class="form-group row">
            <label for="escala_fuerza_muscular" class="col-md-5 col-form-label">{{ __('3.1 ESCALA FUERZA MUSCULAR (DANIELS)') }}</label>
                <div class="col-md-7">
                    <select name="escala_fuerza_muscular" type="integer" class="form-control @error('escala_fuerza_muscular') is-invalid @enderror" value="{{ old('escala_fuerza_muscular') }}">>
                        <option value="{{ old('escala_fuerza_muscular') }}">{{ old('escala_fuerza_muscular') }}</option>
                        <option value=0>No contracción</option>
                        <option value=1>Contracción fuerte, no movimiento</option>
                        <option value=1+>Contracción fuerte, poco movimiento</option>
                        <option value=2->¾ movimiento sin gravedad y sin resistencia</option> 
                        <option value=2>Movimiento completo sin gravedad y sin resistencia</option>
                        <option value=2+>Movimiento completo sin gravedad y con resistencia</option>
                        <option value=3->¾ movimiento con gravedad y sin resistencia</option>
                        <option value=3>Movimiento completo con gravedad y sin resistencia</option>
                        <option value=3+>Movimiento completo con gravedad y resistencia leve</option>
                        <option value=4>Movimiento completo con gravedad y resistencia moderada</option>
                        <option value=4+>Movimiento completo con gravedad y resistencia buena</option>
                        <option value=5>Movimiento completo con gravedad y resistencia fuerte</option>    
                    </select>

                    @error('escala_fuerza_muscular')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('4. TEST DE ROMBERG') }}</h1></div><br>
            <div class="form-group row">
                <label for="romberg_estatica" class="col-md-5 col-form-label">{{ __('Prueba pesada - Estático') }}</label>
                <div class="col-md-7">
                    <Textarea id="romberg_estatica" type="text" class="form-control @error('romberg_estatica') is-invalid @enderror" name="romberg_estatica" value="{{ old('romberg_estatica') }}"></textarea>
                    @error('romberg_estatica')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="romberg_dinamica" class="col-md-5 col-form-label">{{ __('Prueba pesada - Dinámica') }}</label>
                <div class="col-md-7">
                    <Textarea id="romberg_dinamica" type="text" class="form-control @error('romberg_dinamica') is-invalid @enderror" name="romberg_dinamica" value="{{ old('romberg_dinamica') }}"></textarea>
                    @error('romberg_dinamica')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion_romberg" class="col-md-5 col-form-label">{{ __('Actitud postural') }}</label>
                <div class="col-md-7">
                    <Textarea id="descripcion_romberg" type="text" class="form-control @error('descripcion_romberg') is-invalid @enderror" name="descripcion_romberg" value="{{ old('descripcion_romberg') }}"></textarea>
                    @error('actitud_postural')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('5. COORDINACIÓN') }}</h1></div><br>
                <div class="table-responsive">                    
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Extremidad</th>
                            <th colspan="4" scope="col">Derecho</th>
                            <th colspan="4" scope="col">Izquierdo</th>                     
                        </tr>
                    </thead>
                    <tbody>                        
                        <tr>
                            <th scope="col">MMSS</th>
                            <th scope="col">Buena</th>
                            <th scope="col">Regular</th>
                            <th scope="col">Mala</th>
                            <th scope="col">Nula</th>
                            <th scope="col">Buena</th>
                            <th scope="col">Regular</th>
                            <th scope="col">Mala</th>
                            <th scope="col">Nula</th>
                        </tr>

                        <tr>
                            <td scope="col">Dedo-Dedo</td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_derecho" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_derecho" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_derecho" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_derecho" value="Nula"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_izquierdo" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_izquierdo" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_izquierdo" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_dedo_izquierdo" value="Nula"></td>
                        </tr>
                        
                        <tr>
                            <td scope="col">Dedo-Nariz</td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_derecho" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_derecho" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_derecho" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_derecho" value="Nula"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_izquierdo" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_izquierdo" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_izquierdo" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmss_dedo_nariz_izquierdo" value="Nula"></td>
                        </tr>

                        <tr>
                            <th scope="col">MMII</th>
                            <th scope="col">Buena</th>
                            <th scope="col">Regular</th>
                            <th scope="col">Mala</th>
                            <th scope="col">Nula</th>
                            <th scope="col">Buena</th>
                            <th scope="col">Regular</th>
                            <th scope="col">Mala</th>
                            <th scope="col">Nula</th>
                        </tr>

                        <tr>
                            <td scope="col">Talón-Dedo</td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_derecho" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_derecho" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_derecho" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_derecho" value="Nula"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_izquierdo" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_izquierdo" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_izquierdo" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmii_dedo_talon_izquierdo" value="Nula"></td>
                        </tr>

                        <tr>
                            <td scope="col">Talón-Rodilla</td>
                            <td scope="col"><input type="radio" name=mmii_talon_rodilla_derecho" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmmii_talon_rodilla_derecho" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmii_talon_rodilla_derecho" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmii_talon_rodilla_derecho" value="Nula"></td>
                            <td scope="col"><input type="radio" name="mmii_talon_rodilla_izquierdo" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmii_talon_rodilla_izquierdo" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmii_talon_rodilla_izquierdo" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmii_talon_rodilla_izquierdo" value="Nula"></td>
                        </tr>

                        <tr>
                            <td scope="col">Marcha-Cruzada</td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_derecho" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_derecho" value="Regular"></td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_derecho" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_derecho" value="Nula"></td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_izquierdo" value="Buena"></td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_izquierdo" value="Regular"></td>
                            <td scope="col"><input type="radio" name=mmii_marcha_cruzada_izquierdo" value="Mala"></td>
                            <td scope="col"><input type="radio" name="mmii_marcha_cruzada_izquierdo" value="Nula"></td>
                        </tr>
                    </body>
                </table>
            </div>

            <div class="form-group row">
                <label for="observaciones_coordinacion" class="col-md-5 col-form-label">{{ __('Observaciones coordinación') }}</label>
                <div class="col-md-7">
                    <Textarea id="observaciones_coordinacion" type="text" class="form-control @error('observaciones_coordinacion') is-invalid @enderror" name="observaciones_coordinacion" value="{{ old('observaciones_coordinacion') }}"></textarea>
                    @error('observaciones_coordinacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
                
            <div class="form-header2"><h1 class="form-tittle2">{{ __('6. CONTROL POSTURAL') }}</h1></div><br>
            <div class="form-group row">
                <label for="actitud_postural" class="col-md-5 col-form-label">{{ __('Actitud postural') }}</label>
                <div class="col-md-7">
                    <Textarea id="actitud_postural" type="text" class="form-control @error('actitud_postural') is-invalid @enderror" name="actitud_postural" value="{{ old('actitud_postural') }}"></textarea>
                    @error('actitud_postural')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('7. ORTESIS O REQUERIMIENTOS PROTÉSICOS') }}</h1></div><br>
            <div class="form-group row">
                <label for="observaciones_ortesis" class="col-md-5 col-form-label">{{ __('Observaciones orteosis') }}</label>
                <div class="col-md-7">
                    <Textarea id="observaciones_ortesis" type="text" class="form-control @error('observaciones_ortesis') is-invalid @enderror" name="observaciones_ortesis" value="{{ old('observaciones_ortesis') }}"></textarea>
                    @error('actitud_postural')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('8. MARCHA, LOCOMOCIÓN Y BALANCE') }}</h1></div><br>
            <div class="form-group row">
                <label for="actividad_diaria" class="col-md-5 col-form-label">{{ __('Actividades que le gusta realizar') }}</label>
                <div class="col-md-7">
                    <Textarea id="gusta_realizar" type="text" class="form-control @error('gusta_realizar') is-invalid @enderror" name="gusta_realizar" value="{{ old('gusta_realizar') }}"></textarea>
                    @error('gusta_realizar')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="table-responsive">                    
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Fases</th>
                            <th colspan="2" scope="col">Derecho</th>
                            <th colspan="2" scope="col">Izquierdo</th>
                        </tr>
                    </thead>
                    <tbody>            
                        <tr>
                            <th scope="col">Apoyo</th>
                            <th scope="col">Normal</th>
                            <th scope="col">Anormal</th>
                            <th scope="col">Normal</th>
                            <th scope="col">Anormal</th>
                        </tr>

                        <tr>
                            <td scope="col">Choque talón</td>
                            <td scope="col"><input type="radio" name="choque_talon_derecho" value="Normal"></td>
                            <td scope="col"><input type="radio" name="choque_talon_derecho" value="Anormal"></td>
                            <td scope="col"><input type="radio" name="choque_talon_izquierdo" value="Normal"></td>
                            <td scope="col"><input type="radio" name="choque_talon_izquierdo" value="Anormal"></td>
                        </tr>

                        <tr>
                            <td scope="col">Apoyo medio</td>
                            <td scope="col"><input type="radio" name="apoyo_medio_derecho" value="Normal"></td>
                            <td scope="col"><input type="radio" name="apoyo_medio_derecho" value="Anormal"></td>
                            <td scope="col"><input type="radio" name="apoyo_medio_izquierdo" value="Normal"></td>
                            <td scope="col"><input type="radio" name="apoyo_medio_izquierdo" value="Anormal"></td>
                        </tr>

                        <tr>
                            <td scope="col">Despegue dedos</td>
                            <td scope="col"><input type="radio" name="despegue_dedos_derecho" value="Normal"></td>
                            <td scope="col"><input type="radio" name="despegue_dedos_derecho" value="Anormal"></td>
                            <td scope="col"><input type="radio" name="despegue_dedos_izquierdo" value="Normal"></td>
                            <td scope="col"><input type="radio" name="despegue_dedos_izquierdo" value="Anormal"></td>
                        </tr>

                        <tr>
                            <th scope="col">Boleo</th>
                            <th scope="col">Normal</th>
                            <th scope="col">Anormal</th>
                            <th scope="col">Normal</th>
                            <th scope="col">Anormal</th>
                        </tr>
                        
                        <tr>
                            <td scope="col">Aceleración</td>
                            <td scope="col"><input type="radio" name="aceleracion_derecho" value="Normal"></td>
                            <td scope="col"><input type="radio" name="aceleracion_derecho" value="Anormal"></td>
                            <td scope="col"><input type="radio" name="aceleracion_izquierdo" value="Normal"></td>
                            <td scope="col"><input type="radio" name="aceleracion_izquierdo" value="Anormal"></td>
                        </tr>

                        <tr>
                            <td scope="col">Desaceleración</td>
                            <td scope="col"><input type="radio" name="desaceleracion_derecho" value="Normal"></td>
                            <td scope="col"><input type="radio" name="desaceleracion_derecho" value="Anormal"></td>
                            <td scope="col"><input type="radio" name="desaceleracion_izquierdo" value="Normal"></td>
                            <td scope="col"><input type="radio" name="desaceleracion_izquierdo" value="Anormal"></td>
                        </tr>
                        
                    </body>
                </table>
            </div>

            <div class="form-group row">
                <label for="marcha_observaciones" class="col-md-5 col-form-label">{{ __('Observaciones') }}</label>
                <div class="col-md-7">
                    <Textarea id="marcha_observaciones" type="text" class="form-control @error('marcha_observaciones') is-invalid @enderror" name="marcha_observaciones" value="{{ old('marcha_observaciones') }}"></textarea>
                    @error('marcha_observaciones')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('9. DIAGNÓSTICO FISIOTERAPÉUTICO') }}</h1></div>
            <div class="form-group row">
                <label for="diagnostico_fisioterapeutico" class="col-md-5 col-form-label">{{ __('Observaciones') }}</label>
                <div class="col-md-7">
                    <Textarea id="diagnostico_fisioterapeutico" type="text" class="form-control @error('diagnostico_fisioterapeutico') is-invalid @enderror" name="diagnostico_fisioterapeutico" value="{{ old('diagnostico_fisioterapeutico') }}"></textarea>
                    @error('diagnostico_fisioterapeutico')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('10. CONDUCTA') }}</h1></div>
            <div class="form-group row">
                <label for="conducta" class="col-md-5 col-form-label">{{ __('Observaciones') }}</label>
                <div class="col-md-7">
                    <Textarea id="conducta" type="text" class="form-control @error('conducta') is-invalid @enderror" name="conducta" value="{{ old('conducta') }}"></textarea>
                    @error('conducta')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <br>
            <button type="submit" class="btn-submit">
                {{ __('GUARDAR VALORACIÓN FISIOTERAPIA') }}
            </button>

        </form>        
    </div>
<div class="gradient"></div>
@endsection