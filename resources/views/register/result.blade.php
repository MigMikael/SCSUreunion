@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (isset($status))
                    <div class="alert alert-success">
                        {{ $status }}
                    </div>
                @endif
                <div class="panel panel-default" style="text-align: center">
                    <div class="panel-heading">
                        <h1>{{ $alumni->first_name }} {{ $alumni->last_name }}</h1>
                    </div>

                    <div class="panel-body">
                        <h3>{{ $alumni->major }}  <b style="color: #FFD700">[SC {{ $alumni->sc }}]</b></h3>
                        <br>

                        <p style="color: #ff0000">
                            <b>***กรุณาบันทึกคิวอาร์โค้ดด้านล่างเพื่อใช้ลงทะเบียนในวันงาน***</b>
                        </p>
                        <img src="{{ url('/alumni/'.$alumni->code.'/qr') }}" class="img-responsive img-thumbnail" height="300" width="300" alt="qrcode">
                    </div>

                    <div class="panel-footer">
                        <a href="{{ url('/alumni/'.$alumni->code.'/qr_download') }}" target="_blank" class="btn btn-primary btn-lg">
                            บันทึก
                        </a>
                        <button class="btn btn-success btn-lg" onclick="printFunction()">
                            พิมพ์
                        </button>
                        <a href="" class="btn btn-default btn-lg">แก้ไขข้อมูล</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function printFunction() {
            window.print();
        }
    </script>
@endsection
