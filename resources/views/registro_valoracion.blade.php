@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro programa') }}</div>

                <div class="card-body">
                    <form method="POST" action="/valoracion">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('No Identificación') }}</label>
                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" required autocomplete="id">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      
                        <div class="form-group row">
                            <label for="medica" class="col-md-4 col-form-label text-md-right">{{ __('Médica') }}</label>
                            <div class="col-md-6">
                                <Textarea id="medica" type="text" class="form-control @error('medica') is-invalid @enderror" name="medica" value="{{ old('medica') }}" required autocomplete="medica" autofocus></textarea>

                                @error('medica')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fisio" class="col-md-4 col-form-label text-md-right">{{ __('Fisioterapia') }}</label>
                            <div class="col-md-6">
                                <Textarea id="fisio" type="text" class="form-control @error('formacion') is-invalid @enderror" name="fisio" value="{{ old('fisio') }}" required autocomplete="fisio" autofocus></textarea>

                                @error('fisio')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="formacion" class="col-md-4 col-form-label text-md-right">{{ __('Nutricional') }}</label>
                            <div class="col-md-6">
                                <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{ old('formacion') }}" required autocomplete="formacion" autofocus></textarea>

                                @error('formacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="formacion" class="col-md-4 col-form-label text-md-right">{{ __('Psicológica') }}</label>
                            <div class="col-md-6">
                                <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{ old('formacion') }}" required autocomplete="formacion" autofocus></textarea>

                                @error('formacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="formacion" class="col-md-4 col-form-label text-md-right">{{ __('Enfermera') }}</label>
                            <div class="col-md-6">
                                <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{ old('formacion') }}" required autocomplete="formacion" autofocus></textarea>

                                @error('formacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="formacion" class="col-md-4 col-form-label text-md-right">{{ __('Profesional deporte') }}</label>
                            <div class="col-md-6">
                                <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{ old('formacion') }}" required autocomplete="formacion" autofocus></textarea>

                                @error('formacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="formacion" class="col-md-4 col-form-label text-md-right">{{ __('Religiosa') }}</label>
                            <div class="col-md-6">
                                <Textarea id="formacion" type="text" class="form-control @error('formacion') is-invalid @enderror" name="formacion" value="{{ old('formacion') }}" required autocomplete="formacion" autofocus></textarea>

                                @error('formacion')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
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
