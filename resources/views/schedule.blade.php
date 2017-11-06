@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>กำหนดการ</h2>
                    </div>

                    <div class="panel-body">
                        <div class="well">
                            <h3>รอการอัพเดท</h3>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <a href="{{ url('/') }}" class="btn btn-success btn-lg">
                            กลับหน้าหลัก
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection