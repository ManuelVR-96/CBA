@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Test Delta de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('delta.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>
                        <h4> Dependencia general </h4>
                        <div class="form-group row">
                            <label for="dependencia_movilizacion" class="col-md-4 col-form-label text-md-right">{{ __('Movilización') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_movilizacion" class="form-control @error('dependencia_movilizacion') is-invalid @enderror" value="{{ old('dependencia_movilizacion') }}">>
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
                            <label for="dependencia_deambulacion" class="col-md-4 col-form-label text-md-right">{{ __('Deambulación y desplazamiento') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_deambulacion" class="form-control @error('dependencia_deambulacion') is-invalid @enderror" value="{{ old('dependencia_deambulacion') }}">>
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
                            <label for="dependencia_aseo" class="col-md-4 col-form-label text-md-right">{{ __('Aseo') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_aseo" class="form-control @error('dependencia_aseo') is-invalid @enderror" value="{{ old('dependencia_aseo') }}">>
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
                            <label for="dependencia_vestido" class="col-md-4 col-form-label text-md-right">{{ __('Vestido') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_vestido" class="form-control @error('dependencia_vestido') is-invalid @enderror" value="{{ old('dependencia_vestido') }}">>
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
                            <label for="dependencia_alimentacion" class="col-md-4 col-form-label text-md-right">{{ __('Alimentación') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_vestido" class="form-control @error('dependencia_alimentacion') is-invalid @enderror" value="{{ old('dependencia_alimentacion') }}">>
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
                            <label for="dependencia_esfinteriana" class="col-md-4 col-form-label text-md-right">{{ __('Higiene esfinteriana') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_esfinteriana" class="form-control @error('dependencia_esfinteriana') is-invalid @enderror" value="{{ old('dependencia_esfinteriana') }}">>
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
                            <label for="dependencia_tratamientos" class="col-md-4 col-form-label text-md-right">{{ __('Administración tratamientos') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="dependencia_tratamientos" class="form-control @error('dependencia_tratamientos') is-invalid @enderror" value="{{ old('dependencia_tratamientos') }}">>
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
                            <label for="descripcion_dependencia" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones de dependencia general') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion_dependencia" type="text" class="form-control @error('descripcion_dependencia') is-invalid @enderror" name="descripcion_dependencia" value="{{ old('descripcion_dependencia') }}"></textarea>
                                @error('descripcion_dependencia')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        Responsable
                        <h4> Deficiencia Física </h4>

               
                        <div class="form-group row">
                            <label for="fisica_estabilidad" class="col-md-4 col-form-label text-md-right">{{ __('Estabilidad') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="fisica_estabilidad" class="form-control @error('fisica_estabilidad') is-invalid @enderror" value="{{ old('fisica_estabilidad') }}">>
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
                            <label for="vision_audicion" class="col-md-4 col-form-label text-md-right">{{ __('Visión y audición') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="vision_audicion" class="form-control @error('vision_audicion') is-invalid @enderror" value="{{ old('vision_audicion') }}">>
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
                            <label for="fisica_locomotor" class="col-md-4 col-form-label text-md-right">{{ __('Alteración del aparato locomotor') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="fisica_locomotor" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ old('fisica_locomotor') }}">>
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
                            <label for="fisica_neuronologicas" class="col-md-4 col-form-label text-md-right">{{ __('Otras funciones neurológicas') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="fisica_neurologicas" class="form-control @error('fisica_neurologias') is-invalid @enderror" value="{{ old('fisica_neurologicas') }}">>
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
                            <label for="fisica_cardiovascular" class="col-md-4 col-form-label text-md-right">{{ __('Aparato respiratorio y cardiovascular') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="fisica_cardiovascular" class="form-control @error('fisica_cardiovascular') is-invalid @enderror" value="{{ old('fisica_cardiovascular') }}">>
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
                            <label for="descripcion_fisica" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones deficiencias físicas') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion_fisica" type="text" class="form-control @error('descripcion_fisica') is-invalid @enderror" name="descripcion_fisica" value="{{ old('descripcion_fisica') }}"></textarea>
                                @error('descripcion_fisica')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        Responsable
                        <h4> Deficiencia Psíquica </h4>

               
                        <div class="form-group row">
                            <label for="lenguaje_comprension" class="col-md-4 col-form-label text-md-right">{{ __('Lenguaje y comprensión') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="lenguaje_comprension" class="form-control @error('lenguaje_comprension') is-invalid @enderror" value="{{ old('lenguaje_compresion') }}">>
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
                            <label for="orientacion_memoria" class="col-md-4 col-form-label text-md-right">{{ __('Orientación y memoria') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="orientacion_memoria" class="form-control @error('orientacion_memoria') is-invalid @enderror" value="{{ old('orientacion_memoria') }}">>
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
                            <label for="trastorno_comportamiento" class="col-md-4 col-form-label text-md-right">{{ __('Trastornos del comportamiento ') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="trastorno_comportamiento" class="form-control @error('fisica_locomotor') is-invalid @enderror" value="{{ old('fisica_locomotor') }}">>
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
                            <label for="capacidad_juicio" class="col-md-4 col-form-label text-md-right">{{ __('Capacidad de juicio') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="capacidad_juicio" class="form-control @error('capacidad_juicio') is-invalid @enderror" value="{{ old('capacidad_juicio') }}">>
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
                            <label for="alteracion_sueño" class="col-md-4 col-form-label text-md-right">{{ __('Alteraciones del sueño') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="alteracion_sueño" class="form-control @error('alteracion_sueño') is-invalid @enderror" value="{{ old('alteracion_sueño') }}">>
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
                            <label for="descripcion_psiquica" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones de dependencia psiquica') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion_psiquica" type="text" class="form-control @error('descripcion_psiquica') is-invalid @enderror" name="descripcion_psiquica" value="{{ old('descripcion_psiquica') }}"></textarea>
                                @error('descripcion_psiquica')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        Responsable
                        <h4> Evaluación médica</h4>

                        <div class="form-group row">
                            <label for="antecedentes_patologicos" class="col-md-4 col-form-label text-md-right">{{ __('Antecedentes patológicos') }}</label>
                            <div class="col-md-6">
                                <Textarea id="antecedentes_patologicas" type="text" class="form-control @error('antecedentes_patologicos') is-invalid @enderror" name="antecedentes_patologicos" value="{{ old('antecedentes_patologicos') }}"></textarea>
                                @error('antecedentes_patologicos')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="morbilidad_actual" class="col-md-4 col-form-label text-md-right">{{ __('Morbilidad Actual') }}</label>
                            <div class="col-md-6">
                                <Textarea id="morbilidad_actual" type="text" class="form-control @error('morbilidad_actual') is-invalid @enderror" name="morbilidad_actual" value="{{ old('morbilidad_actual') }}"></textarea>
                                @error('morbilidad_actual')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="consumo_medicinas" class="col-md-4 col-form-label text-md-right">{{ __('Consumo actual de medicinas') }}</label>
                            <div class="col-md-6">
                                <Textarea id="consumo_medicinas" type="text" class="form-control @error('consumo_medicinas') is-invalid @enderror" name="consumo_medicinas" value="{{ old('consumo_medicinas') }}"></textarea>
                                @error('consumo_medicinas')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="signos_vitales" class="col-md-4 col-form-label text-md-right">{{ __('Signos vitales: (TA, FC, SpO2, Talla, Peso)') }}</label>
                            <div class="col-md-6">
                                <Textarea id="signos_vitales" type="text" class="form-control @error('signos_vitales') is-invalid @enderror" name="signos_vitales" value="{{ old('signos_vitales') }}"></textarea>
                                @error('signos_vitales')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="resumen_fisico" class="col-md-4 col-form-label text-md-right">{{ __('Resumen del examen físico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="resumen_fisico" type="text" class="form-control @error('resumen_fisico') is-invalid @enderror" name="resumen_fisico" value="{{ old('resumen_fisico') }}"></textarea>
                                @error('resumen_fisico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnostico" type="text" class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico" value="{{ old('diagnostico') }}"></textarea>
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="conducta" class="col-md-4 col-form-label text-md-right">{{ __('Conducta') }}</label>
                            <div class="col-md-6">
                                <Textarea id="conducta" type="text" class="form-control @error('conducta') is-invalid @enderror" name="conducta" value="{{ old('conducta') }}"></textarea>
                                @error('conducta')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        Responsable
                        <h4> Evaluación nutricional </h4>

                        <h5>CRIBAJE DEL MINI NUTRITIONAL ASSESSMENT (MNA)</h5>

                        <div class="form-group row">
                            <label for="cantidad_comida" class="col-md-4 col-form-label text-md-right">{{ __('A. Ha comido menos por falta de apetito, problemas digestivos, dificultades de masticación o deglución en los últimos 3 meses?') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="cantidad_comida" class="form-control @error('cantidad_comida') is-invalid @enderror" value="{{ old('cantidad_comida') }}">>
                                    <option value="{{ old('cantidad_comida') }}">{{ old('cantidad_comida') }}</option>
                                    <option value=0>0 = Ha comido mucho menos</option>
                                    <option value=1>1 = Ha comido menos</option>
                                    <option value=2>2 = Ha comido igual</option>
                                </select>

                                @error('cantidad_comida')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="perdida_peso" class="col-md-4 col-form-label text-md-right">{{ __('B.  Pérdida reciente de peso (ultimos 3 meses)') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="perdida_peso" class="form-control @error('perdida_peso') is-invalid @enderror" value="{{ old('perdida_peso') }}">>
                                    <option value="{{ old('perdida_peso') }}">{{ old('perdida_peso') }}</option>
                                    <option value=0>0 = Pérdida de peso mayor a 3 kg</option>
                                    <option value=1>1 = No lo sabe</option>
                                    <option value=2>2 = Pérdida de peso entre 1 y 3 kg</option>
                                    <option value=3>3 = No ha habido pérdida de peso</option>
                                </select>

                                @error('perdida_peso')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="movilidad" class="col-md-4 col-form-label text-md-right">{{ __('C. Movilidad') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="movilidad" class="form-control @error('movilidad') is-invalid @enderror" value="{{ old('movilidad') }}">>
                                    <option value="{{ old('movilidad') }}">{{ old('movilidad') }}</option>
                                    <option value=0>0 = De la cama al sillón</option>
                                    <option value=1>1 = Autonomía en el interior</option>
                                    <option value=2>2 = Sale del domicilio</option>
                                </select>

                                @error('movilidad')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="situacion_estres" class="col-md-4 col-form-label text-md-right">{{ __('D. Ha tenido una enfermedad aguda o situación de estrés psicológico en los últimos 3 meses?') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="situacion_estres" class="form-control @error('situacion_estres') is-invalid @enderror" value="{{ old('situacion_estres') }}">>
                                    <option value="{{ old('situacion_estres') }}">{{ old('situacion_estres') }}</option>
                                    <option value=0>0 = Sí</option>
                                    <option value=1>1 = No</option>
                                    
                                </select>

                                @error('situacion_estres')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <label for="problemas_neuropsicologicos" class="col-md-4 col-form-label text-md-right">{{ __('E. Problemas neuropsicológicos') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="problemas_neuropsicologicos" class="form-control @error('problemas_neuropsicologicos') is-invalid @enderror" value="{{ old('problemas_neuropsicologicos') }}">>
                                    <option value="{{ old('problemas_neuropsicologicos') }}">{{ old('problemas_neuropsicologicos') }}</option>
                                    <option value=0>0 = Demencia o depresión grave</option>
                                    <option value=1>1 = Demencia moderada</option>
                                    <option value=2>2 = Sin problemas psicológicos</option>
                                    
                                </select>

                                @error('problemas_neuropsicologicos')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="imc" class="col-md-4 col-form-label text-md-right">{{ __('F1. Índice de masa corporal (IMC) = peso en kg / (talla en m)²') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="imc" class="form-control @error('imc') is-invalid @enderror" value="{{ old('imc') }}">>
                                    <option value=3>{{ old('imc') }}</option>
                                    <option value=0>0 = IMC &lt 19 </option>
                                    <option value=1>2 = 21 ≤ IMC < 23</option>
                                    <option value=2>3 = IMC ≥ 23</option>
                                    
                                </select>

                                @error('imc')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <p>Si el índice de masa corporal no está disponible, por favor sustituya la pregunta F1 con la F2. (no conteste la pregunta F2 si ha podido contestar a la F1</p>
                        <div class="form-group row">
                        <label for="pantorrila" class="col-md-4 col-form-label text-md-right">{{ __('F2. Circunferencia de la pantorrilla (CP en cm)') }}</label>
                            <div class="col-md-6">
                                <input type="integer" select name="pantorrila" class="form-control @error('pantorrilla') is-invalid @enderror" value="{{ old('pantorilla') }}">>
                                    <option value="{{ old('imc') }}">{{ old('imc') }}</option>
                                    <option value=0>0 = IMC &lt 19 </option>
                                    <option value=1>2 = 21 ≤ IMC < 23</option>
                                    <option value=2>3 = IMC ≥ 23</option>
                                    
                                </select>

                                @error('imc')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    Responsable

                        <h4>EVALUACIÓN ANTROPOMÉTRICA Y CLÍNICA</h4>

                        <div class="form-group row">
                            <label for="antecedentes_nutricionales" class="col-md-4 col-form-label text-md-right">{{ __('Antecedentes nutricionales') }}</label>
                            <div class="col-md-6">
                                <Textarea id="antecedentes_nutricionales" type="text" class="form-control @error('antecedentes_nutricionales') is-invalid @enderror" name="antecedentes_nutricionales" value="{{ old('antecedentes_nutricionales') }}"></textarea>
                                @error('antecedentes_nutricionales')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="consumo_alimentos" class="col-md-4 col-form-label text-md-right">{{ __('Consumo actual de alimentos') }}</label>
                            <div class="col-md-6">
                                <Textarea id="consumo_alimentos" type="text" class="form-control @error('consumo_alimentos') is-invalid @enderror" name="consumo_alimentos" value="{{ old('consumo_alimentos') }}"></textarea>
                                @error('consumo_alimentos')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura en centímetros') }}</label>
                            <div class="col-md-6">
                                <input id="altura" type="integer" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ old('altura') }}"  autofocus>

                                @error('altura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="circunferencia_muñeca" class="col-md-4 col-form-label text-md-right">{{ __('Circunferencia muñecas (CM)') }}</label>
                            <div class="col-md-6">
                                <input id="circunferencia_muñeca" type="integer" class="form-control @error('circunferencia_muñeca') is-invalid @enderror" name="circunferencia_muñeca" value="{{ old('circunferencia_muñeca') }}"  autofocus>

                                @error('circunferencia_muñeca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contextura" class="col-md-4 col-form-label text-md-right">{{ __('Contextura') }}</label>
                            <div class="col-md-6">
                                <input id="contextura" type="integer" class="form-control @error('contextura') is-invalid @enderror" name="contextura" value="{{ old('contextura') }}"  autofocus>

                                @error('contextura')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso_ideal" class="col-md-4 col-form-label text-md-right">{{ __('Peso ideal') }}</label>
                            <div class="col-md-6">
                                <input id="peso_ideal" type="integer" class="form-control @error('peso_ideal') is-invalid @enderror" name="peso_ideal" value="{{ old('peso_ideal') }}"  autofocus>

                                @error('peso_ideal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso_actual" class="col-md-4 col-form-label text-md-right">{{ __('Peso actual') }}</label>
                            <div class="col-md-6">
                                <input id="peso_actual" type="integer" class="form-control @error('peso_actual') is-invalid @enderror" name="peso_actual" value="{{ old('peso_actual') }}"  autofocus>

                                @error('peso_actual')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="peso_habitual" class="col-md-4 col-form-label text-md-right">{{ __('Peso habitual') }}</label>
                            <div class="col-md-6">
                                <input id="peso_habitual" type="integer" class="form-control @error('peso_habitual') is-invalid @enderror" name="peso_habitual" value="{{ old('peso_habitual') }}"  autofocus>

                                @error('peso_habitual')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hallazgos_clinicos" class="col-md-4 col-form-label text-md-right">{{ __('Hallazgos clínicos') }}</label>
                            <div class="col-md-6">
                                <Textarea id="hallazgos_clinicos" type="text" class="form-control @error('hallazgos_clinicos') is-invalid @enderror" name="hallazgos_clinicos" value="{{ old('hallazgos_clinicos') }}"></textarea>
                                @error('hallazgos_clinicos')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diagnosticos_nutricional" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico nutricional') }}</label>
                            <div class="col-md-6">
                                <Textarea id="diagnosticos_nutricional" type="text" class="form-control @error('diagnosticos_nutricional') is-invalid @enderror" name="diagnosticos_nutricional" value="{{ old('diagnosticos_nutricional') }}"></textarea>
                                @error('diagnosticos_nutricional')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="conducta_nutricional" class="col-md-4 col-form-label text-md-right">{{ __('Conducta') }}</label>
                            <div class="col-md-6">
                                <Textarea id="conducta_nutricional" type="text" class="form-control @error('conducta_nutricional') is-invalid @enderror" name="conducta_nutricional" value="{{ old('conducta_nutricional') }}"></textarea>
                                @error('conducta_nutricional')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




Responsable: 

            <h5>PERFIL RECREACIÓN</h5>

            <div class="form-group row">
                            <label for="tiempo_libre" class="col-md-4 col-form-label text-md-right">{{ __('1.Qué hace en su tiempo libre? (actividades recreativas)') }}</label>
                            <div class="col-md-6">
                                <Textarea id="tiempo_libre" type="text" class="form-control @error('tiempo_libre') is-invalid @enderror" name="tiempo_libre" value="{{ old('tiempo_libre') }}"></textarea>
                                @error('tiempo_libre')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            <div class="form-group row">
                            <label for="tiene_hobbies" class="col-md-4 col-form-label text-md-right">{{ __('Tiene Hobbies?') }}</label>
                                <div class="col-md-6">
                                    <select name="tiene_hobbies" class="form-control @error('tiene_hobbies') is-invalid @enderror" value="{{ old('tiene_hobbies') }}">>
                                        <option value="{{ old('tiene_hobbies') }}">{{ old('tiene_hobbies') }}</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        
                                        
                                    </select>

                                    @error('tiene_hobbies')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                <p>Si respondió SÍ a la pregunta anterior, contestar las preguntas 3, 4,5 y 6 de lo contrario seguir con la pregunta 7.</p>
            
                <div class="form-group row">
                            <label for="aun_practica" class="col-md-4 col-form-label text-md-right">{{ __('Aún lo practica?') }}</label>
                                <div class="col-md-6">
                                    <select name="aun_practica" class="form-control @error('aun_practica') is-invalid @enderror" value="{{ old('aun_practica') }}">>
                                        <option value="{{ old('aun_practica') }}">{{ old('aun_practica') }}</option>
                                        <option value="No">No</option>
                                        <option value="Si">Si</option>
                                        
                                        
                                    </select>

                                    @error('aun_practica')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                <div class="form-group row">
                        <label for="cual_hobbies" class="col-md-4 col-form-label text-md-right">{{ __('Cual es o era su Hobbie y con qué frencuencia lo practicaba o practica (Días y horas diarias)') }}</label>
                        <div class="col-md-6">
                            <Textarea id="cual_hobbies" type="text" class="form-control @error('cual_hobbies') is-invalid @enderror" name="cual_hobbies" value="{{ old('cual_hobbies') }}"></textarea>
                            @error('cual_hobbies')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                <div class="form-group row">
                            <label for="compañia_hobbie" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica su hobby en forma individual o con otras personas? ') }}</label>
                                <div class="col-md-6">
                                    <select name="compañia_hobbie" class="form-control @error('compañia_hobbie') is-invalid @enderror" value="{{ old('compañia_hobbie') }}">>
                                        <option value="{{ old('compañia_hobbie') }}">{{ old('compañia_hobbie') }}</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Acomapañado">Acompañada</option>
                                        
                                        
                                    </select>

                                    @error('compañia_hobbie')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                <div class="form-group row">
                            <label for="actividades" class="col-md-4 col-form-label text-md-right">{{ __('¿En qué actividades recreativas le gustaría participar en el C.B.A San José? ') }}</label>
                                <div class="col-md-6">
                                   
                                <input type="checkbox" name="actividades[]" value="Juegos">Juegos de mesa, Juegos de salón o juegos tradicionales</br>
                                <input type="checkbox" name="actividades[]" value="Integraciones">Integraciones artísticas-culturales </br>
                                <input type="checkbox" name="actividades[]" value="Salidas">Salidas de esparcimiento o artísticas-culturales</br>
                                <input type="checkbox" name="actividades[]" value="Recreo-Deportivas">Actividades recreo-deportivas</br>
                                <input type="checkbox" name="actividades[]" value="Baile">Baile</br>
 

                                    @error('compañia_hobbie')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <h5>PERFIL ACTIVIDAD FÍSICA</h5>

<div class="form-group row">
                <label for="practica_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica o ha practicado actividad física?)') }}</label>
                <div class="col-md-6">
                    <Textarea id="practica_fisica" type="text" class="form-control @error('practica_fisica') is-invalid @enderror" name="practica_fisica" value="{{ old('practica_fisica') }}"></textarea>
                    @error('practica_fisica')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

<div class="form-group row">
                <label for="aun_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica aún actividad física?') }}</label>
                    <div class="col-md-6">
                        <select name="aun_fisica" class="form-control @error('aun_fisica') is-invalid @enderror" value="{{ old('aun_fisica') }}">>
                            <option value="{{ old('aun_fisica') }}">{{ old('aun_fisica') }}</option>
                            <option value="No">No</option>
                            <option value="Si">Si</option>
                            
                            
                        </select>

                        @error('tiene_hobbies')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    <p>Si respondió que NO a la pregunta anterior, contestar las preguntas 3,4, 5 y 6, de lo contrario seguir con la pregunta 7.</p>



    <div class="form-group row">
            <label for="tipo_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Qué tipo de actividad física practicaba?') }}</label>
            <div class="col-md-6">
                <Textarea id="tipo_fisica" type="text" class="form-control @error('tipo_fisica') is-invalid @enderror" name="tipo_fisica" value="{{ old('tipo_fisica') }}"></textarea>
                @error('tipo_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="abandono_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Hace cuánto abandonó la actividad física?') }}</label>
            <div class="col-md-6">
                <Textarea id="abandono_fisica" type="text" class="form-control @error('abandono_fisica') is-invalid @enderror" name="abandono_fisica" value="{{ old('abandono_fisica') }}"></textarea>
                @error('abandono_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="porque_abandono" class="col-md-4 col-form-label text-md-right">{{ __('¿Qué motivos lo llevaron a abandonar la actividad física?') }}</label>
            <div class="col-md-6">
                <Textarea id="porque_abandono" type="text" class="form-control @error('porque_abandono') is-invalid @enderror" name="porque_abandono" value="{{ old('porque_abandono') }}"></textarea>
                @error('porque_abandono')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="practicar_nuevo" class="col-md-4 col-form-label text-md-right">{{ __('¿Le gustaría volver a practicar actividad física? ¿Porqué?') }}</label>
            <div class="col-md-6">
                <Textarea id="practicar_nuevo" type="text" class="form-control @error('practicar_nuevo') is-invalid @enderror" name="practicar_nuevo" value="{{ old('practicar_nuevo') }}"></textarea>
                @error('practicar_nuevo')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="cual_hobbies" class="col-md-4 col-form-label text-md-right">{{ __('¿Qué tipo de actividad física practica?') }}</label>
            <div class="col-md-6">
                <Textarea id="cual_hobbies" type="text" class="form-control @error('cual_hobbies') is-invalid @enderror" name="cual_hobbies" value="{{ old('cual_hobbies') }}"></textarea>
                @error('cual_hobbies')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="frecuencia_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Con qué frecuencia practica actividad física?') }}</label>
            <div class="col-md-6">
                <Textarea id="frecuencia_fisica" type="text" class="form-control @error('frecuencia_fisica') is-invalid @enderror" name="frecuencia_fisica" value="{{ old('frecuencia_fisica') }}"></textarea>
                @error('frecuencia_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
                            <label for="compañia_fisica" class="col-md-4 col-form-label text-md-right">{{ __('¿Practica actividad física en forma individual o con otras personas? ') }}</label>
                                <div class="col-md-6">
                                    <select name="compañia_fisica" class="form-control @error('compañia_fisica') is-invalid @enderror" value="{{ old('compañia_fisica') }}">>
                                        <option value="{{ old('compañia_fisica') }}">{{ old('compañia_fisica') }}</option>
                                        <option value="Solo">Solo</option>
                                        <option value="Acomapañado">Acompañado</option>
                                        
                                        
                                    </select>

                                    @error('compañia_fisica')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

        <div class="form-group row">
            <label for="cual_fisica" class="col-md-4 col-form-label text-md-right">{{ __('Qué actividades le gustaría realizar en el C.B.A San José?') }}</label>
            <div class="col-md-6">
                <Textarea id="cual_fisica" type="text" class="form-control @error('cual_fisica') is-invalid @enderror" name="cual_fisica" value="{{ old('cual_fisica') }}"></textarea>
                @error('cual_fisica')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="observaciones_actfi" class="col-md-4 col-form-label text-md-right">{{ __('Observaciones') }}</label>
            <div class="col-md-6">
                <Textarea id="observaciones_actfi" type="text" class="form-control @error('observaciones_actfi') is-invalid @enderror" name="observaciones_actfi" value="{{ old('observaciones_actfi') }}"></textarea>
                @error('observaciones_actfi')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>





  

                     <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar y agregar Valoraciones') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
