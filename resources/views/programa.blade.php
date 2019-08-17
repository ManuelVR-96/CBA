
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf                               

                        <div class="form-group row">                            
                            <label for="agenda" class="col-md-4 col-form-label text-md-right">{{ __('Agenda') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control @error('agenda') is-invalid @enderror" name="agenda" value="{{ old('agenda') }}" type="date">                                        
                                </div>                           
                        </div>

                        <div class="form-group row">
                            <label for="encargado" class="col-md-4 col-form-label text-md-right">{{ __('Encargado') }}</label>
                            <div class="col-md-6">
                                <input id="encargado" type="text" class="form-control @error('encar') is-invalid @enderror" name="encargado" value="{{ old('encargado') }}" required autocomplete="encargado" autofocus>

                                <!-- @error('encargado')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                      
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agendar') }}
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
