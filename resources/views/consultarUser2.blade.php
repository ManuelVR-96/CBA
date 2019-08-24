@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    
                    <a href="/register" class="btn btn-primary btn-sm">Nueva Nota</a>
                </div>
                <form method="POST" action="{{route('lista_nombres')}}">
                @csrf
                <div>
                    <input id="busqueda" name="busqueda" type="text">
                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buscar') }}
                                </button>
                            </div>
                        </div>
                </div>
                </form>
                <div class="card-body">      
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombres }}</td>
                                <td>{{ $item->apellidos }}</td>
                                <td>{{ $item->cargo }}</td>
                             
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection