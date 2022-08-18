@extends('layouts.app')

@section('template_title')
    paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('paciente') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <form action = "/home/consulta/{{$paciente->id}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="thead">
                                        <tr>
                                                                                   
                                            <th>TP</th>
                                            <th>PTT</th>
                                            <th>III</th>
                                            <th>AT III</th>
                                            <th>TT</th>
                                            <th>Fibrinogeno</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>                                                                                       
                                            <td>{{ $paciente->TP}}</td>
                                            <td>{{ $paciente->PTT }}</td>
                                            <td>{{ $paciente->III }}</td>
                                            <td>{{ $paciente->AT_III }}</td>
                                            <td>{{ $paciente->TT}}</td>
                                            <td>{{ $paciente->Fibrinogeno }}</td>
                                            
                                        </tr>
                                        <div class="float-right">
                                            <a class="btn btn-primary" href="/home/consulta"> Back</a>
                                        </div>    
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>               
            </div>
        </div>
    </div>
@endsection
