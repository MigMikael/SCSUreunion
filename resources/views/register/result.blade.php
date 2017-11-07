@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if (isset($status))
                    <div class="alert alert-success">
                        <h3>{{ $status }}</h3>
                    </div>
                @endif
                <div class="panel panel-default" style="text-align: center">
                    <div class="panel-heading">
                        <h1>{{ $alumni->first_name }} {{ $alumni->last_name }}</h1>
                    </div>

                    <div class="panel-body">
                        <h3>{{ $alumni->major }}  <b style="color: #FFD700">[SC {{ $alumni->sc }}]</b></h3>
                        <br>

                        @if($alumni->is_party == true && $alumni->attach_payment != null)
                            <p>จำนวนผู้ร่วมงานเลี้ยงสังสรรค์ {{ $alumni->follower }} ท่าน</p>
                            <p>รวมเป็นเงิน {{ $alumni->follower * 1000 }} บาท</p>
                            <p style="color: #40826d">
                                <b>ยืนยันการชำระเงินเรียบร้อย</b>
                            </p>
                        @elseif($alumni->is_party == true && $alumni->attach_payment == null)
                            <p style="color: #ff0000">
                                <b>ยังไม่ได้ยืนยันการชำระเงิน</b>
                            </p>
                        @endif

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
                        @if($alumni->is_party == 1)
                            <a href="{{ url('alumni/'.$alumni->code.'/attach/payment') }}" class="btn btn-default btn-lg">
                                ยืนยันการชำระเงิน
                            </a>
                        @endif
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
