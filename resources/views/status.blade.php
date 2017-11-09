@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="text-align: center">
                    <div class="panel-heading">
                        <h1>{{ $title }}</h1>
                    </div>

                    <div class="panel-body">
                        <h3>{{ $body }}</h3>
                    </div>

                    <div class="panel-footer">
                        <a class="btn btn-success" href="{{ $url }}">กลับ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection