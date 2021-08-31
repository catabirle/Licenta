@extends('layouts.user')
@section('content')

<style>
    p {
        text-align: center;
    }
    h1 {text-align: center;}
</style>
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-body">
                    <p><b>For other services we recommend:</b></p>
                </div>
            </div>
            
            
        </div>
        </div>
        <div class="card-body">
            <p><a href="https://m.facebook.com/Vulcanizare-mobila-RD-Baia-Mare-103970364381606/"><img src="{{asset ('/images/download.jpg')}}" alt="Vulcanizare 24/7" style="width:300px;height:300px;"></a></p>

            </div>

            <div class="card-body">
                <p><a href="http://www.findglocal.com/RO/Baia-Mare/1565624500332547/%C3%8Ematricul%C4%83ri-Auto-Baia-Mare"><img src="{{asset ('/images/inmatriculari.jpg')}}" alt="Inmatriculari auto" style="width:300px;height:300px;"></a></p>

            </div>
    
</div>
@endsection
@section('scripts')
@parent

@endsection