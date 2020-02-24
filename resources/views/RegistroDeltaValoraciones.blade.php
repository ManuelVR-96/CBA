@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('delta.store')}}">
        
        <div class="card-header form-tittle_">Registro Test Delta de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>       
        <div class="card-body">
            @csrf            
            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">         
            <div class="form-header2"><h1 class="form-tittle2">{{ __('DEPENDENCIA GENERAL') }}</h1></div><br>
            <div class="form-group row">
                <label for="dependencia_movilizacion" class="col-md-4 col-form-label">{{ __('Movilización') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_movilizacion" type="integer" class="form-control @error('dependencia_movilizacion') is-invalid @enderror" value="{{ old('dependencia_movilizacion') }}">>
                        <option value="{{ old('dependencia_movilizacion') }}">{{ old('dependencia_movilizacion') }}</option>
                        <option value=0>(0)	Autónomo.</option>
                        <option value=1>(1)	Asistencia ocasional para la movilización desde la cama, sanitario, silla o silla de ruedas.</option>
                        <option value=2>(2)	Precisa ayuda frecuente para la movilización desde la cama, sanitario, silla o silla de ruedas.</option>
                        <option value=3>(3)	La ayuda es necesaria de forma permanente.</option>
                    </select>

                    @error('dependencia_movilizacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_deambulacion" class="col-md-4 col-form-label">{{ __('Deambulación y desplazamiento') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_deambulacion" type="integer" class="form-control @error('dependencia_deambulacion') is-invalid @enderror" value="{{ old('dependencia_deambulacion') }}">>
                        <option value="{{ old('dependencia_deambulacion') }}">{{ old('dependencia_deambulacion') }}</option>
                        <option value=0>(0)	Autónomo, aunque lleva algún medio de apoyo.</option>
                        <option value=1>(1)	Necesita ayuda esporádica.</option>
                        <option value=2>(2)	Precisa ayuda con frecuencia para la deambulación.</option>
                        <option value=3>(3)	Hay que desplazarle siempre. Incapaz de impulsar la silla de ruedas. Encamado</option>
                    </select>

                    @error('dependencia_deambulacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_aseo" class="col-md-4 col-form-label">{{ __('Aseo') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_aseo" type="integer" class="form-control @error('dependencia_aseo') is-invalid @enderror" value="{{ old('dependencia_aseo') }}">>
                        <option value="{{ old('dependencia_aseo') }}">{{ old('dependencia_aseo') }}</option>
                        <option value=0>(0)	Autónomo</option>
                        <option value=1>(1)	Precisa ayuda ocasional en el aseo diario: lavado de manos, cara; afeitado, peinado, baño.</option>
                        <option value=2>(2)	Necesita ayuda frecuentemente para el aseo diario.</option>
                        <option value=3>(3)	Hay que ayudarlo siempre.</option>
                    </select>

                    @error('dependencia_aseo')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_vestido" class="col-md-4 col-form-label">{{ __('Vestido') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_vestido" type="integer" class="form-control @error('dependencia_vestido') is-invalid @enderror" value="{{ old('dependencia_vestido') }}">>
                        <option value="{{ old('dependencia_vestido') }}">{{ old('dependencia_vestido') }}</option>
                        <option value=0>(0)	Autónomo</option>
                        <option value=1>(1)	En ocasiones hay que ayudarle. Precisa de supervisión.</option>
                        <option value=2>(2)	Necesita siempre ayuda para ponerse alguna prenda o calzarse</option>
                        <option value=3>(3)	Es necesario vestirlo y calzarlo totalmente.</option>
                    </select>

                    @error('dependencia_vestido')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_alimentacion" class="col-md-4 col-form-label">{{ __('Alimentación') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_vestido" type="integer" class="form-control @error('dependencia_alimentacion') is-invalid @enderror" value="{{ old('dependencia_alimentacion') }}">>
                        <option value="{{ old('dependencia_alimentacion') }}">{{ old('dependencia_alimentacion') }}</option>
                        <option value=0>(0)	Autónomo</option>
                        <option value=1>(1)	Precisa ayuda ocasional para comer. A veces hay que prepararle los alimentos.</option>
                        <option value=2>(2)	Precisa con frecuencia ayuda para comer. Se le suelen preparar los alimentos.</option>
                        <option value=3>(3)	Hay que administrarle la comida.</option>
                    </select>

                    @error('dependencia_alimentacion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_esfinteriana" class="col-md-4 col-form-label">{{ __('Higiene esfinteriana') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_esfinteriana" type="integer" class="form-control @error('dependencia_esfinteriana') is-invalid @enderror" value="{{ old('dependencia_esfinteriana') }}">>
                        <option value="{{ old('dependencia_esfinteriana') }}">{{ old('dependencia_esfinteriana') }}</option>
                        <option value=0>(0)	Continencia. Incontinencia urinaria esporádica.</option>
                        <option value=1>(1)	Incontinencia urinaria nocturna y fecal esporádica. Colostomia.</option>
                        <option value=2>(2)	Incontinencia urinaria permanente diurna y nocturna. Sonda vesical.</option>
                        <option value=3>(3)	Incontinencia urinaria y fecal totales.</option>
                    </select>

                    @error('dependencia_esfinteriana')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dependencia_tratamientos" class="col-md-4 col-form-label">{{ __('Administración tratamientos') }}</label>
                <div class="col-md-8">
                    <select name="dependencia_tratamientos" type="integer" class="form-control @error('dependencia_tratamientos') is-invalid @enderror" value="{{ old('dependencia_tratamientos') }}">>
                        <option value="{{ old('dependencia_tratamientos') }}">{{ old('dependencia_tratamientos') }}</option>
                        <option value=0>(0)	No precisa. Gestión autónoma.</option>
                        <option value=1>(1)	Necesita supervisión en la toma de medicación y/o ayuda ocasional en la administración de determinados tratamientos.</option>
                        <option value=2>(2)	Hay que prepararle y administrarle la medicación diariamente.</option>
                        <option value=3>(3)	Precisa sueroterapia, oxigenoterapia, alimentación por sonda nasogástrica, otros procedimientos especializados.</option>
                    </select>

                    @error('dependencia_tratamientos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="cuidados_enfermeria" class="col-md-4 col-form-label">{{ __('Cuidados de enfermeria') }}</label>
                <div class="col-md-8">
                    <select name="cuidados_enfermeria" type="integer" class="form-control @error('cuidados_enfermeria') is-invalid @enderror" value="{{ old('cuidados_enfermeria') }}">>
                        <option value="{{ old('cuidados_enfermeria') }}">{{ old('cuidados_enfermeria') }}</option>
                        <option value=0>(0)	No precisa. </option>
                        <option value=1>(1)	(1)	Precisa cura o actuación de enfermería ocasional.</option>
                        <option value=2>(2)	(2)	Precisa cura o actuación de enfermería periódicamente.</option>
                        <option value=3>(3)	(3)	Supervisión continuada: atención a enfermos terminales, curas de lesiones graves.</option>
                    </select>

                    @error('cuidados_enfermeria')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="necesidad_vigilancia" class="col-md-4 col-form-label">{{ __('Necesidad de vigilancia') }}</label>
                <div class="col-md-8">
                    <select name="necesidad_vigilancia" type="integer" class="form-control @error('necesidad_vigilancia') is-invalid @enderror" value="{{ old('necesidad_vigilancia') }}">>
                        <option value="{{ old('necesidad_vigilancia') }}">{{ old('necesidad_vigilancia') }}</option>
                        <option value=0>(0)	No precisa.</option>
                        <option value=1>(1)	necesidad_vigilancia.</option>
                        <option value=2>(2)	(2)	Trastornos de conducta permanentes que alteren la convivencia de forma leve o 
moderada (por ejemplo: ideas de muerte, auto-hetero agresividad,...)</option>
                        <option value=3>(3)	(3)	Trastornos de conducta intensos  permanentes que alteren la convivencia de forma 
grave (por ejemplo: riesgo de suicidio, vagabundeó, síndrome de fuga.)</option>
                    </select>

                    @error('necesidad_vigilancia')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="colaboracion" class="col-md-4 col-form-label">{{ __('	Colaboración') }}</label>
                <div class="col-md-8">
                    <select name="colaboracion" type="integer" class="form-control @error('colaboracion') is-invalid @enderror" value="{{ old('colaboracion') }}">>
                        <option value="{{ old('colaboracion') }}">{{ old('colaboracion') }}</option>
                        <option value=0>(0)	Colaborador.</option>
                        <option value=1>(1)Comportamiento pasivo (necesita estímulo).</option>
                        <option value=2>(2) No colabora.</option>
                        <option value=3>(3)	Rechazo categórico y constante.</option>
                    </select>

                    @error('colaboracion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion_dependencia" class="col-md-4 col-form-label">{{ __('Observaciones de dependencia general') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion_dependencia" type="text" class="form-control @error('descripcion_dependencia') is-invalid @enderror" name="descripcion_dependencia" value="{{ old('descripcion_dependencia') }}"></textarea>
                    @error('descripcion_dependencia')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('DEFICIENCIA FÍSICA') }}</h1></div><br>            
            <div class="form-group row">
                <label for="fisica_estabilidad" class="col-md-4 col-form-label">{{ __('Estabilidad') }}</label>
                <div class="col-md-8">
                    <select name="fisica_estabilidad" type="integer" class="form-control @error('fisica_estabilidad') is-invalid @enderror" value="{{ old('fisica_estabilidad') }}">>
                        <option value="{{ old('fisica_estabilidad') }}">{{ old('fisica_estabilidad') }}</option>
                        <option value=0>(0)	Se mantiene bien de pie o en cualquier postura.</option>
                        <option value=1>(1)	Ligera inseguridad en la marcha. Riesgo leve de caída (por ejemplo: mareos frecuentes).</option>
                        <option value=2>(2)	Marcada inseguridad en la marcha. Caídas frecuentes</option>
                        <option value=3>(3)	No puede permanecer de pie sin apoyo.</option>
                    </select>

                    @error('dependencia_tratamientos')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="vision_audicion" class="col-md-4 col-form-label">{{ __('Visión y audición') }}</label>
                <div class="col-md-8">
                    <select name="vision_audicion" type="integer" class="form-control @error('vision_audicion') is-invalid @enderror" value="{{ old('vision_audicion') }}">>
                        <option value="{{ old('vision_audicion') }}">{{ old('vision_audicion') }}</option>
                        <option value=0>(0)	Visión Normal o corrección con lentes. Oye bien. Casos no valorables.</option>
                        <option value=1>(1)	Ligera disminución de la visión, mal compensada con lentes. Sordera moderada. Lleva audífono.</option>
                        <option value=2>(2)	Marcada disminución de la visión, que no puede compensarse con lentes. Sordera total.</option>
                        <option value=3>(3)	Ceguera total.</option>
                    </select>

                    @error('vision_audicion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row">
                <label for="fisica_locomotor" class="col-md-4 col-form-label">{{ __('Alteración del aparato locomotor') }}</label>
                <div class="col-md-8">
                    <select name="fisica_locomotor" type="integer" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ old('fisica_locomotor') }}">>
                        <option value="{{ old('fisica_locomotor') }}">{{ old('fisica_lomotor') }}</option>
                        <option value=0>(0)	Movilidad y fuerza normales. Sensibilidad total. Casos no valorables.</option>
                        <option value=1>(1)	Ligera limitación de la movilidad en alguna de las extremidades o tronco.</option>
                        <option value=2>(2)	Limitación moderada de la movilidad en alguna de las extremidades o tronco. Anquilosis de alguna articulación importante. Amputación parcial de alguna extremidad.</option>
                        <option value=3>(3)	Limitación grave de la movilidad. Amputación completa sin prótesis. Desarticulación.</option>
                    </select>

                    @error('fisica_locomotor')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="fisica_neuronologicas" class="col-md-4 col-form-label">{{ __('Otras funciones neurológicas') }}</label>
                <div class="col-md-8">
                    <select name="fisica_neurologicas" type="integer" class="form-control @error('fisica_neurologias') is-invalid @enderror" value="{{ old('fisica_neurologicas') }}">>
                        <option value="{{ old('fisica_neurologicas') }}">{{ old('fisica_neurologicas') }}</option>
                        <option value=0>(0)	Sin alteraciones.</option>
                        <option value=1>(1)	Temblor ligero. Movimientos anormales ocasionales. Ligera hipertonía. Ligera rigidez.</option>
                        <option value=2>(2)	Temblor moderado. Crisis comiciales ocasionales. Movimientos anormales frecuentes (disquinesias, distonías). Rigidez moderada.</option>
                        <option value=3>(3)	Temblor importante. Crisis comiciales frecuentes. Rigidez importante. Movimientos anormales permanentes.</option>
                    </select>

                    @error('fisica_neurologicas')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="fisica_cardiovascular" class="col-md-4 col-form-label">{{ __('Aparato respiratorio y cardiovascular') }}</label>
                <div class="col-md-8">
                    <select name="fisica_cardiovascular" type="integer" class="form-control @error('fisica_cardiovascular') is-invalid @enderror" value="{{ old('fisica_cardiovascular') }}">>
                        <option value="{{ old('fisica_cardiovascular') }}">{{ old('fisica_cardiovascular') }}</option>
                        <option value=0>(0)	Sin alteraciones.</option>
                        <option value=1>(1)	Disnea de mediano esfuerzo (escaleras, cuestas). Claudicación intermitente leve.</option>
                        <option value=2>(2)	Disnea de mínimos esfuerzos. Dolor vascular ligero y permanente.</option>
                        <option value=3>(3)	Disnea continua grave. Dolor vascular permanentemente moderado o grave. </option>
                    </select>

                    @error('fisica_cardiovascular')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion_fisica" class="col-md-4 col-form-label">{{ __('Observaciones deficiencias físicas') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion_fisica" type="text" class="form-control @error('descripcion_fisica') is-invalid @enderror" name="descripcion_fisica" value="{{ old('descripcion_fisica') }}"></textarea>
                    @error('descripcion_fisica')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-header2"><h1 class="form-tittle2">{{ __('DEFICIENCIA PSÍQUICA') }}</h1></div><br>    
            <div class="form-group row">
                <label for="lenguaje_comprension" class="col-md-4 col-form-label">{{ __('Lenguaje y comprensión') }}</label>
                <div class="col-md-8">
                    <select name="lenguaje_comprension" type="integer" class="form-control @error('lenguaje_comprension') is-invalid @enderror" value="{{ old('lenguaje_compresion') }}">>
                        <option value="{{ old('lenguaje_compresion') }}">{{ old('lenguaje_comprension') }}</option>
                        <option value=0>(0)	Habla normalmente. Comprensión buena.</option>
                        <option value=1>(1)	Alguna dificultad en la expresión oral. En ocasiones no entiende lo que se le dice.</option>
                        <option value=2>(2)	Disartria o disfasia intensa. Poca coherencia o expresividad. Es frecuente que no responda órdenes y sugerencias.</option>
                        <option value=3>(3)	Afasia. Lenguaje inteligible o incoherente. Apenas habla. No responde a órdenes sencillas.</option>
                    </select>

                    @error('lenguaje_comprension')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="orientacion_memoria" class="col-md-4 col-form-label">{{ __('Orientación y memoria') }}</label>
                <div class="col-md-8">
                    <select name="orientacion_memoria" type="integer" class="form-control @error('orientacion_memoria') is-invalid @enderror" value="{{ old('orientacion_memoria') }}">>
                        <option value="{{ old('orientacion_memoria') }}">{{ old('orientacion_memoria') }}</option>
                        <option value=0>(0)	Bien orientado en tiempo y espacio. Buena memoria</option>
                        <option value=1>(1)	Desorientación ocasional. Buen manejo en su casa o planta. Despistes y olvidos ocasionales.</option>
                        <option value=2>(2)	Desorientado en tiempo o espacio. Pérdida frecuente de objetos. Identifica mal a las personas, reconociendo lazos afectivos, o recuerda mal acontecimientos nuevos y nombres.</option>
                        <option value=3>(3)	Desorientación total. Pérdida de la propia identidad. No reconoce lazos afectivos. </option>
                    </select>

                    @error('vision_audicion')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="trastorno_comportamiento" class="col-md-4 col-form-label">{{ __('Trastornos del comportamiento ') }}</label>
                <div class="col-md-8">
                    <select name="trastorno_comportamiento" type="integer" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ old('fisica_locomotor') }}">>
                        <option value="{{ old('trastorno_comportamiento') }}">{{ old('trastorno_comportamiento') }}</option>
                        <option value=0>(0)	No presenta problemas.</option>
                        <option value=1>(1)	Trastornos de comportamiento con alteraciones conductuales leves (por ejemplo: irritabilidad, trastornos del control de los impulsos).</option>
                        <option value=2>(2)	Trastornos del comportamiento con alteraciones conductuales moderadas (por ejemplo: agresividad moderada, conducta desorganizada).</option>
                        <option value=3>(3)	Trastornos del comportamiento con alteraciones conductuales graves.</option>
                    </select>

                    @error('fisica_locomotor')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="capacidad_juicio" class="col-md-4 col-form-label">{{ __('Capacidad de juicio') }}</label>
                <div class="col-md-8">
                    <select name="capacidad_juicio" type="integer" class="form-control @error('capacidad_juicio') is-invalid @enderror" value="{{ old('capacidad_juicio') }}">>
                        <option value="{{ old('capacidad_juicio') }}">{{ old('capacidad_juicio') }}</option>
                        <option value=0>(0)	Normal para su edad y situación.</option>
                        <option value=1>(1)	Tiene alguna dificultad para resolver problemas y        situaciones nuevas.</option>
                        <option value=2>(2)	Le cuesta mucho resolver problemas sencillos.</option>
                        <option value=3>(3)	No puede desarrollar ningún razonamiento.</option>
                    </select>

                    @error('capacidad_juicio')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="alteracion_sueño" class="col-md-4 col-form-label">{{ __('Alteraciones del sueño') }}</label>
                <div class="col-md-8">
                    <select name="alteracion_sueño" type="integer" class="form-control @error('alteracion_sueño') is-invalid @enderror" value="{{ old('alteracion_sueño') }}">>
                        <option value="{{ old('alteracion_sueño') }}">{{ old('alteracion_sueño') }}</option>
                        <option value=0>(0)	Duerme bien habitualmente sin medicación.</option>
                        <option value=1>(1)	Duerme bien con medicación.</option>
                        <option value=2>(2)	Duerme mal con medicación sin afectar al entorno.</option>
                        <option value=3>(3)	Alteraciones graves del sueño con agitación nocturna.</option>
                    </select>

                    @error('alteracion_sueño')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="descripcion_psiquica" class="col-md-4 col-form-label">{{ __('Observaciones de dependencia psiquica') }}</label>
                <div class="col-md-8">
                    <Textarea id="descripcion_psiquica" type="text" class="form-control @error('descripcion_psiquica') is-invalid @enderror" name="descripcion_psiquica" value="{{ old('descripcion_psiquica') }}"></textarea>
                    @error('descripcion_psiquica')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn-submit">
                {{ __('Guardar') }}
            </button>
            
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
