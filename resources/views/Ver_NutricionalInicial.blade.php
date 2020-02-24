@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro Test Delta de {{$nuevoCliente->nombres}} {{$nuevoCliente->apellidos}}</div>
                <div class="card-header">Realizado por {{$nutricional_inicial->encargado_->nombres}} {{$nutricional_inicial->encargado_->apellidos }} </div>
                <div class="card-body">
                    <form method="POST" action="{{route('nutricional_inicial.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="miembro" class="col-md-4 col-form-label text-md-right">{{ __('Miembro') }}</label>
                            <div class="col-md-6">
                            <input id="miembro" type="hidden" class="form-control @error('miembro') is-invalid @enderror" name="miembro" value="{{ $nuevoCliente->id }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            <input id="miembro_" type="text" class="form-control @error('miembro_') is-invalid @enderror" name="miembro_" value="{{ $nuevoCliente->nombres }}" placeholder = "{{ $nuevoCliente->nombres }}" autofocus readonly="readonly">
                            </div>
                        </div>

<h4> Evaluación nutricional </h4>

<h5>CRIBAJE DEL MINI NUTRITIONAL ASSESSMENT (MNA)</h5>

<div class="form-group row">
    <label for="cantidad_comida" class="col-md-4 col-form-label text-md-right">{{ __('A. Ha comido menos por falta de apetito, problemas digestivos, dificultades de masticación o deglución en los últimos 3 meses?') }}</label>
    <div class="col-md-6">
        <input name="cantidad_comida" type="integer" class="form-control @error('cantidad_comida') is-invalid @enderror" value="{{ $nutricional_inicial->cantidad_comida }}">
           
    </div>
</div>

<div class="form-group row">
    <label for="perdida_peso" class="col-md-4 col-form-label text-md-right">{{ __('B.  Pérdida reciente de peso (ultimos 3 meses)') }}</label>
    <div class="col-md-6">
        <input name="perdida_peso" type="integer" class="form-control @error('perdida_peso') is-invalid @enderror" value="{{ $nutricional_inicial->perdida_peso }}">
            
    </div>
</div>

<div class="form-group row">
    <label for="movilidad" class="col-md-4 col-form-label text-md-right">{{ __('C. Movilidad') }}</label>
    <div class="col-md-6">
        <input name="movilidad" type="integer" class="form-control @error('movilidad') is-invalid @enderror" value="{{ $nutricional_inicial->movilidad}}">
        
    </div>
</div>

<div class="form-group row">
    <label for="situacion_estres" class="col-md-4 col-form-label text-md-right">{{ __('D. Ha tenido una enfermedad aguda o situación de estrés psicológico en los últimos 3 meses?') }}</label>
    <div class="col-md-6">
        <input name="situacion_estres" type="integer" class="form-control @error('situacion_estres') is-invalid @enderror" value="{{ $nutricional_inicial->situacion_estres}}">
           
    </div>
</div>

<div class="form-group row">
<label for="problemas_neuropsicologicos" class="col-md-4 col-form-label text-md-right">{{ __('E. Problemas neuropsicológicos') }}</label>
    <div class="col-md-6">
        <input name="problemas_neuropsicologicos" input type="integer" class="form-control @error('problemas_neuropsicologicos') is-invalid @enderror" value="{{ $nutricional_inicial->problemas_neuropsicologicos }}">
            
    </div>
</div>

<div class="form-group row">
<label for="imc" class="col-md-4 col-form-label text-md-right">{{ __('F1. Índice de masa corporal (IMC) = peso en kg / (talla en m)²') }}</label>
    <div class="col-md-6">
        <input name="imc" type="integer" class="form-control @error('imc') is-invalid @enderror" value="{{ $nutricional_inicial->imc }}">
            
    </div>
</div>
<p>Si el índice de masa corporal no está disponible, por favor sustituya la pregunta F1 con la F2. (no conteste la pregunta F2 si ha podido contestar a la F1</p>
<div class="form-group row">
<label for="pantorrila" class="col-md-4 col-form-label text-md-right">{{ __('F2. Circunferencia de la pantorrilla (CP en cm)') }}</label>
    <div class="col-md-6">
        <input name="pantorrila" input type="integer" class="form-control @error('pantorrilla') is-invalid @enderror" value="{{ $nutricional_inicial->pantorilla }}">
           
    </div>
</div>
Responsable

<h4>EVALUACIÓN ANTROPOMÉTRICA Y CLÍNICA</h4>

<div class="form-group row">
    <label for="antecedentes_nutricionales" class="col-md-4 col-form-label text-md-right">{{ __('Antecedentes nutricionales') }}</label>
    <div class="col-md-6">
        <Textarea id="antecedentes_nutricionales" type="text" class="form-control @error('antecedentes_nutricionales') is-invalid @enderror" name="antecedentes_nutricionales" value="{{ $nutricional_inicial->antecedentes_nutricionales }}">{{ $nutricional_inicial->antecedentes_nutricionales }}</textarea>
        
    </div>
</div>

<div class="form-group row">
    <label for="consumo_alimentos" class="col-md-4 col-form-label text-md-right">{{ __('Consumo actual de alimentos') }}</label>
    <div class="col-md-6">
        <Textarea id="consumo_alimentos" type="text" class="form-control @error('consumo_alimentos') is-invalid @enderror" name="consumo_alimentos" value="{{ $nutricional_inicial->consumo_alimentos }}">{{ $nutricional_inicial->consumo_alimentos }}</textarea>
        
    </div>
</div>
<div class="form-group row">
    <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura en centímetros') }}</label>
    <div class="col-md-6">
        <input id="altura" type="integer" class="form-control @error('altura') is-invalid @enderror" name="altura" value="{{ $nutricional_inicial->altura }}"  autofocus>

        
    </div>
</div>

<div class="form-group row">
    <label for="circunferencia_muñeca" class="col-md-4 col-form-label text-md-right">{{ __('Circunferencia muñecas (CM)') }}</label>
    <div class="col-md-6">
        <input id="circunferencia_muñeca" type="integer" class="form-control @error('circunferencia_muñeca') is-invalid @enderror" name="circunferencia_muñeca" value="{{ $nutricional_inicial->circunferencia_muñeca }}"  autofocus>

        
    </div>
</div>

<div class="form-group row">
    <label for="contextura" class="col-md-4 col-form-label text-md-right">{{ __('Contextura') }}</label>
    <div class="col-md-6">
        <input id="contextura" type="integer" class="form-control @error('contextura') is-invalid @enderror" name="contextura" value="{{ $nutricional_inicial->contextura }}"  autofocus>

        
    </div>
</div>

<div class="form-group row">
    <label for="peso_ideal" class="col-md-4 col-form-label text-md-right">{{ __('Peso ideal') }}</label>
    <div class="col-md-6">
        <input id="peso_ideal" type="integer" class="form-control @error('peso_ideal') is-invalid @enderror" name="peso_ideal" value="{{ $nutricional_inicial->peso_ideal }}"  autofocus>

    </div>
</div>

<div class="form-group row">
    <label for="peso_actual" class="col-md-4 col-form-label text-md-right">{{ __('Peso actual') }}</label>
    <div class="col-md-6">
        <input id="peso_actual" type="integer" class="form-control @error('peso_actual') is-invalid @enderror" name="peso_actual" value="{{ $nutricional_inicial->peso_actual }}"  autofocus>

    </div>
</div>

<div class="form-group row">
    <label for="hallazgos_clinicos" class="col-md-4 col-form-label text-md-right">{{ __('Hallazgos clínicos') }}</label>
    <div class="col-md-6">
        <Textarea id="hallazgos_clinicos" type="text" class="form-control @error('hallazgos_clinicos') is-invalid @enderror" name="hallazgos_clinicos" value="{{ $nutricional_inicial->hallazgos_clinicos }}">{{ $nutricional_inicial->hallazgos_clinicos }}</textarea>
    
    </div>
</div>

<div class="form-group row">
    <label for="diagnosticos_nutricional" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico nutricional') }}</label>
    <div class="col-md-6">
        <Textarea id="diagnosticos_nutricional" type="text" class="form-control @error('diagnosticos_nutricional') is-invalid @enderror" name="diagnosticos_nutricional" value="{{ $nutricional_inicial->diagnosticos_nutricional }}">{{ $nutricional_inicial->diagnosticos_nutricional }}</textarea>
       
    </div>
</div>



</form>
</div>
</div>
</div>
</div>
</div>
@endsection
