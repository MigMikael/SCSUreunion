@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding-top: 0">
        <div class="row" style="text-align: center">
            <div class="col-md-10 col-md-offset-1">
                <img class="img-responsive img-thumbnail" src="{{ URL::asset('image/welcome.jpg') }}" alt="">
            </div>
        </div>

        <div class="row" style="text-align: center;margin-top: 1%;margin-bottom: 5%">
            <a class="btn btn-primary btn-lg" href="{{ url('/alumni/register/step1') }}">
                ลงทะเบียนเข้าร่วมงาน
            </a>

            <a class="btn btn-success btn-lg" href="{{ url('/alumni/payment') }}">
                ยืนยันการชำระเงิน
            </a>
        </div>
    </div>
@endsection
