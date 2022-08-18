@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modulos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                    <div >
                        <a href="/home/pacientes" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Ingreso Paciente</a>
                        <a href="/home/consulta" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Consulta Masiva</a>
                        <a href="#" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Control de Calidad</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
