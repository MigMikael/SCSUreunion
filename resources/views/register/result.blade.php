@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="text-align: center">
                    <div class="panel-heading">
                        <h1>ลงทะเบียนเสร็จสมบูรณ์</h1>
                    </div>

                    <div class="panel-body">
                        <h2>{{ $alumni->first_name }} {{ $alumni->last_name }}</h2>
                        <h3>{{ $alumni->major }}</h3>
                        <h1>SC : <b>{{ $alumni->sc }}</b></h1>
                        <br>

                        <p style="color: #ff0000">
                            <b>***กรุณาบันทึกคิวอาร์โค้ดด้านล่างเพื่อใช้ลงทะเบียนในวันงาน***</b>
                        </p>
                        <img src="{{ url('/alumni/'.$alumni->code.'/qr') }}" class="img-responsive img-thumbnail" height="300" width="300" alt="qrcode">
                    </div>

                    <div class="panel-footer">
                        <a href="" class="btn btn-success btn-lg">พิมพ์</a>
                        <a href="{{ url('/alumni/'.$alumni->code.'/qr_download') }}" target="_blank" class="btn btn-primary btn-lg">บันทึก</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
