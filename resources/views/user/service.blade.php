@extends('layouts.user')
@section('content')
<style>
    p {
        text-align: center;
    }
    h1 {text-align: center;}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <p><b>24/7 Service</b></p>
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i><b>Asistenta Rutiera:</i></b><br>
                    Nume: Avram Daniel<br>
                    Telefon: 0722334409
                    <p> </p>
                    <i><b>Tractari:</i></b><br>
                    Nume: Popescu Ion<br>
                    Telefon: 0711334409
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
