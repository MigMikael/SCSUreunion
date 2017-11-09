@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12 text-center" style="background: #ffffff;margin-bottom: 5%">
            <h1>จำนวนผู้ลงทะเบียน</h1>
        </div>

        <hr>

        @foreach($scores as $key => $value)
            <div class="col-md-2">
                @include('admin._card')
            </div>
        @endforeach
    </div>
@endsection