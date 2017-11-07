@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>ข้อมูลการชำระเงิน</h2>
                    </div>

                    <div class="panel-body">
                        <h4>สำหรับผู้ร่วมงานเลี้ยงสังสรรค์ สามารถชำระเงินได้ที่</h4>
                        <div class="well">
                            <h3>บัญชีออมทรัพย์ ธนาคารกรุงไทย สาขาสำนักนานาเหนือ</h3>
                            <h3>ชื่อบัญชี <b style="color: #ff0000">"สมาคมศิษย์เก่าคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร"</b></h3>
                            <h2>เลขที่บัญชี <b style="color: #ff0000">000-0-35556-9</b></h2>
                        </div>
                        <h4 style="color: #ff0000">จำนวน 1000 บาท ต่อผู้ร่วมงานหนึ่งท่าน</h4>
                    </div>

                    <div class="panel-footer">
                        <a href="{{ url('alumni/payment') }}" class="btn btn-success btn-lg">
                            ยืนยันการชำระเงิน
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection