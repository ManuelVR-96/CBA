@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">

<div class="container">
    <form method="POST" class="form" action="{{route('nutricional_inicial.store')}}">
        <div class="card-header form-tittle_">Registro Test Nutricional de: {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div><br>
        <div class="card-header form-tittle_">Realizado por: {{$nutricional_inicial->encargado_->nombres}} {{$nutricional_inicial->encargado_->apellidos }} </div>
        <div class="card-body">
            <fieldset disabled>
                @csrf
                <div class="form-group row">              
                    <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                </div>

                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN NUTRICIONAL') }}</h1></div>
                <div class="form-header2"><h1 class="form-tittle2">{{ __('Cribaje del mini nutritional assessment (MNA)') }}</h1></div><br>
                <div class="form-group row">
                    <label for="cantidad_comida" class="col-md-7 col-form-label">{{ __('A. Ha comido menos por falta de apetito, problemas digestivos, dificultades de masticación o deglución en los últimos 3 meses?') }}</label>
                    <div class="col-md-5">
                        <input name="cantidad_comida" type="integer" class="form-control @error('cantidad_comida') is-invalid @enderror" value="{{ $nutricional_inicial->cantidad_comida }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="perdida_peso" class="col-md-7 col-form-label">{{ __('B.  Pérdida reciente de peso (ultimos 3 meses)') }}</label>
                    <div class="col-md-5">
                        <input name="perdida_peso" type="integer" class="form-control @error('perdida_peso') is-invalid @enderror" value="{{ $nutricional_inicial->perdida_peso }}"> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="movilidad" class="col-md-7 col-form-label">{{ __('C. Movilidad') }}</label>
                    <div class="col-md-5">
                        <input name="movilidad" type="integer" class="form-control @error('movilidad') is-invalid @enderror" value="{{ $nutricional_inicial->movilidad}}">                    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="situacion_estres" class="col-md-7 col-form-label">{{ __('D. Ha tenido una enfermedad aguda o situación de estrés psicológico en los últimos 3 meses?') }}</label>
                    <div class="col-md-5">
                        <input name="situacion_estres" type="integer" class="form-control @error('situacion_estres') is-invalid @enderror" value="{{ $nutricional_inicial->situacion_estres}}">  
                    </div>
                </div>

                <div class="form-group row">
                    <label for="problemas_neuropsicologicos" class="col-md-7 col-form-label">{{ __('E. Problemas neuropsicológicos') }}</label>
                    <div class="col-md-5">
                        <input name="problemas_neuropsicologicos" input type="integer" class="form-control @error('problemas_neuropsicologicos') is-invalid @enderror" value="{{ $nutricional_inicial->problemas_neuropsicologicos }}">                        
                    </div>
                </div>

                <div class="form-group row">
                    <label for="imc" class="col-md-7 col-form-label">{{ __('F1. Índice de masa corporal (IMC) = peso en kg / (talla en m)²') }}</label>
                    <div class="col-md-5">
                        <input name="imc" type="integer" class="form-control @error('imc') is-invalid @enderror" value="{{ $nutricional_inicial->imc }}">     
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pantorrila" class="col-md-7 col-form-label">{{ __('F2. Circunferencia de la pantorrilla (CP en cm)') }}</label>
                    <div class="col-md-5">
                        <input name="pantorrila" input type="integer" class="form-control @error('pantorrilla') is-invalid @enderror" value="{{ $nutricional_inicial->pantorilla }}">                    
                    </div>
                </div>

                <div class="form-group row">
                    <label for="total_cribaje" class="col-md-7 col-form-label">{{ __('TOTAL EXAMEN NUTRICIONAL') }}</label>
                    <div class="col-md-5">
                        <input name="total_cribaje" type="integer" class="form-control @error('total_cribaje') is-invalid @enderror" value="{{ $nutricional_inicial->total_cribaje }}">  
                    </div>
                </div>

                <div class="form-header2"><h1 class="form-tittle2">{{ __('EVALUACIÓN ANTROPOMÉTRICA Y CLÍNICA') }}</h1></div><br>
                <div class="form-group row">
                    <label for="antecedentes_nutricionales" class="col-md-7 col-form-label">{{ __('Antecedentes nutricionales') }}</label>
                    <div class="col-md-5">
                        <Textarea id="antecedentes_nutricionales" type="text" class="form-control @error('antecedentes_nutricionales') is-invalid @enderror" name="antecedentes_nutricionales" value="{{ $nutricional_inicial->antecedentes_nutricionales }}">{{ $nutricional_inicial->antecedentes_nutricionales }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="consumo_alimentos" class="col-md-7 col-form-label">{{ __('Consumo actual de alimentos') }}</label>
                    <div class="col-md-5">
                        <Textarea id="consumo_alimentos" type="text" class="form-control @error('consumo_alimentos') is-invalid @enderror" name="consumo_alimentos" value="{{ $nutricional_inicial->consumo_alimentos }}">{{ $nutricional_inicial->consumo_alimentos }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="altura" class="col-md-7 col-form-label">{{ __('Altura en centímetros') }}</label>
                    <div class="col-md-5">
                        <input id="altura" type="integer" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ $nutricional_inicial->altura }}"  autofocus> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="circunferencia_muñeca" class="col-md-7 col-form-label">{{ __('Circunferencia muñecas (CM)') }}</label>
                    <div class="col-md-5">
                        <input id="circunferencia_muñeca" type="integer" class="form-control @error('circunferencia_muñeca') is-invalid @enderror" name="circunferencia_muñeca" value="{{ $nutricional_inicial->circunferencia_muñeca }}"  autofocus> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contextura" class="col-md-7 col-form-label">{{ __('Contextura') }}</label>
                    <div class="col-md-5">
                        <input id="contextura" type="integer" class="form-control @error('contextura') is-invalid @enderror" name="contextura" value="{{ $nutricional_inicial->contextura }}"  autofocus> 
                    </div>
                </div>

                <div class="form-group row">
                    <label for="peso_ideal" class="col-md-7 col-form-label">{{ __('Peso ideal') }}</label>
                    <div class="col-md-5">
                        <input id="peso_ideal" type="integer" class="form-control @error('peso_ideal') is-invalid @enderror" name="peso_ideal" value="{{ $nutricional_inicial->peso_ideal }}"  autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="peso_actual" class="col-md-7 col-form-label">{{ __('Peso actual') }}</label>
                    <div class="col-md-5">
                        <input id="peso_actual" type="integer" class="form-control @error('peso_actual') is-invalid @enderror" name="peso_actual" value="{{ $nutricional_inicial->peso_actual }}"  autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="hallazgos_clinicos" class="col-md-7 col-form-label">{{ __('Hallazgos clínicos') }}</label>
                    <div class="col-md-5">
                        <Textarea id="hallazgos_clinicos" type="text" class="form-control @error('hallazgos_clinicos') is-invalid @enderror" name="hallazgos_clinicos" value="{{ $nutricional_inicial->hallazgos_clinicos }}">{{ $nutricional_inicial->hallazgos_clinicos }}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="diagnosticos_nutricional" class="col-md-7 col-form-label">{{ __('Diagnóstico nutricional') }}</label>
                    <div class="col-md-5">
                        <Textarea id="diagnosticos_nutricional" type="text" class="form-control @error('diagnosticos_nutricional') is-invalid @enderror" name="diagnosticos_nutricional" value="{{ $nutricional_inicial->diagnosticos_nutricional }}">{{ $nutricional_inicial->diagnosticos_nutricional }}</textarea>
                    </div>
                </div>
            </fieldset>
        </div>
    </form>
</div>
<div class="gradient"></div>
@endsection
