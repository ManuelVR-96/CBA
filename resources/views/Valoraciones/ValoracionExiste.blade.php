@extends('layouts.app')

@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/../css/estilo.css">
<div class="gradient"></div>

<div class="container">
    <form method="POST" class="form">           
        <div class="form-header"><br>
            <img src="/img/LogoInicio.png" style="width:150px; height:130px;" class="center">
            <h1 class="form-tittle">{{ __('Ya existe una valoracion para el residente actual.') }}</h1>
        </div>
    </form>    
</div>

@endsection
