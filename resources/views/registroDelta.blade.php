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

                        <div class="form-group row">
                            <label for="dependencia_movilizacion" class="col-md-4 col-form-label text-md-right">{{ __('Movilización') }}</label>
                            <div class="col-md-6">
                                <select name="dependencia_movilizacion" class="form-control @error('dependencia_movilizacion') is-invalid @enderror" value="{{ old('dependencia_movilizacion') }}">>
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
                                <select name="dependencia_deambulacion" class="form-control @error('dependencia_deambulacion') is-invalid @enderror" value="{{ old('dependencia_deambulacion') }}">>
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
                                <select name="dependencia_aseo" class="form-control @error('dependencia_aseo') is-invalid @enderror" value="{{ old('dependencia_aseo') }}">>
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
                                <select name="dependencia_vestido" class="form-control @error('dependencia_vestido') is-invalid @enderror" value="{{ old('dependencia_vestido') }}">>
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



                        VESTIDO





                    
                        <div class="form-group row">
                            <label for="medica" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <Textarea id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="medica" autofocus></textarea>
                                @error('Descripción')
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
