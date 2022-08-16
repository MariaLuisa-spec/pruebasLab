@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $paciente->Identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $paciente->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $paciente->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $paciente->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $paciente->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Eps:</strong>
                            {{ $paciente->EPS }}
                        </div>
                        <div class="form-group">
                            <strong>Tp:</strong>
                            {{ $paciente->TP }}
                        </div>
                        <div class="form-group">
                            <strong>Ptt:</strong>
                            {{ $paciente->PTT }}
                        </div>
                        <div class="form-group">
                            <strong>Iii:</strong>
                            {{ $paciente->III }}
                        </div>
                        <div class="form-group">
                            <strong>At Iii:</strong>
                            {{ $paciente->AT_III }}
                        </div>
                        <div class="form-group">
                            <strong>Tt:</strong>
                            {{ $paciente->TT }}
                        </div>
                        <div class="form-group">
                            <strong>Fibrinogeno:</strong>
                            {{ $paciente->Fibrinogeno }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
