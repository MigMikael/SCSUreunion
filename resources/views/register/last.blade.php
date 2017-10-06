@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>ลงทะเบียน ขั้นตอนที่ 2</h2>
                    </div>

                    <div class="panel-body">
                        @include('register._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
