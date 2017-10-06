@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" style="padding-top: 0;text-align: center">
            <img class="img-responsive img-thumbnail" src="{{ URL::asset('image/welcome.jpg') }}" alt="">
        </div>

        <div class="row" style="text-align: center;margin-top: 2%">
            <a class="btn btn-primary btn-lg" href="{{ url('/alumni/register/step1') }}">
                ลงทะเบียนเข้าร่วมงาน
            </a>
        </div>
    </div>
@endsection
