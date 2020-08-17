@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('nutricional_inicial.store')}}">
        <div class="card-header form-tittle_">Registro Evaluación Nutricional de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
        @csrf
        <div class="form-group row">
            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
        </div>

        <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN NUTRICIONAL') }}</h1></div>
        <div class="form-header2"><h1 class="form-tittle2">{{ __('Cribaje del mini nutritional assessment (MNA)') }}</h1></div><br>
        <div class="form-group row">
            <label for="cantidad_comida" class="col-md-6 col-form-label ">{{ __('A. Ha comido menos por falta de apetito, problemas digestivos, dificultades de masticación o deglución en los últimos 3 meses?') }}</label>
            <div class="col-md-6">
                <select name="cantidad_comida" type="integer" class="form-control @error('cantidad_comida') is-invalid @enderror" value="{{ old('cantidad_comida') }}">>
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
            <label for="perdida_peso" class="col-md-6 col-form-label ">{{ __('B.  Pérdida reciente de peso (ultimos 3 meses)') }}</label>
            <div class="col-md-6">
                <select name="perdida_peso" type="integer" class="form-control @error('perdida_peso') is-invalid @enderror" value="{{ old('perdida_peso') }}">>
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
            <label for="movilidad" class="col-md-6 col-form-label ">{{ __('C. Movilidad') }}</label>
            <div class="col-md-6">
                <select name="movilidad" type="integer" class="form-control @error('movilidad') is-invalid @enderror" value="{{ old('movilidad') }}">>
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
            <label for="situacion_estres" class="col-md-6 col-form-label ">{{ __('D. Ha tenido una enfermedad aguda o situación de estrés psicológico en los últimos 3 meses?') }}</label>
            <div class="col-md-6">
                <select name="situacion_estres" type="integer" class="form-control @error('situacion_estres') is-invalid @enderror" value="{{ old('situacion_estres') }}">>
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
        <label for="problemas_neuropsicologicos" class="col-md-6 col-form-label ">{{ __('E. Problemas neuropsicológicos') }}</label>
            <div class="col-md-6">
                <select name="problemas_neuropsicologicos" input type="integer" class="form-control @error('problemas_neuropsicologicos') is-invalid @enderror" value="{{ old('problemas_neuropsicologicos') }}">>
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
        <label for="imc" class="col-md-6 col-form-label ">{{ __('F1. Índice de masa corporal (IMC) = peso en kg / (talla en m)²') }}</label>
            <div class="col-md-6">
                <select name="imc" type="integer" class="form-control @error('imc') is-invalid @enderror" value="{{ old('imc') }}">>
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
        <label for="pantorrila" class="col-md-6 col-form-label ">{{ __('F2. Circunferencia de la pantorrilla (CP en cm)') }}</label>
            <div class="col-md-6">
                <select name="pantorrila" input type="integer" class="form-control @error('pantorrilla') is-invalid @enderror" value="{{ old('pantorilla') }}">>
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

        <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN ANTROPOMÉTRICA Y CLÍNICA') }}</h1></div><br>
        <div class="form-group row">
            <label for="antecedentes_nutricionales" class="col-md-6 col-form-label ">{{ __('Antecedentes nutricionales') }}</label>
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
            <label for="consumo_alimentos" class="col-md-6 col-form-label ">{{ __('Consumo actual de alimentos') }}</label>
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
            <label for="altura" class="col-md-6 col-form-label ">{{ __('Altura en centímetros') }}</label>
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
            <label for="circunferencia_muñeca" class="col-md-6 col-form-label ">{{ __('Circunferencia muñecas (CM)') }}</label>
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
            <label for="contextura" class="col-md-6 col-form-label ">{{ __('Contextura') }}</label>
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
            <label for="peso_ideal" class="col-md-6 col-form-label ">{{ __('Peso ideal') }}</label>
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
            <label for="peso_ideal" class="col-md-6 col-form-label ">{{ __('Peso habitual') }}</label>
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
            <label for="peso_actual" class="col-md-6 col-form-label ">{{ __('Peso actual') }}</label>
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
            <label for="hallazgos_clinicos" class="col-md-6 col-form-label ">{{ __('Hallazgos clínicos') }}</label>
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
            <label for="diagnosticos_nutricional" class="col-md-6 col-form-label ">{{ __('Diagnóstico nutricional') }}</label>
            <div class="col-md-6">
                <Textarea id="diagnosticos_nutricional" type="text" class="form-control @error('diagnosticos_nutricional') is-invalid @enderror" name="diagnosticos_nutricional" value="{{ old('diagnosticos_nutricional') }}"></textarea>
                @error('diagnosticos_nutricional')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <br>
        <button type="submit" class="btn-submit">
            {{ __('GUARDAR Y AGREGAR VALORACIÓN') }}
        </button>
         
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
