@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h2>ยืนยันการชำระเงิน</h2>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('alumni/attach/payment') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <h4>สำหรับผู้ร่วมงานเลี้ยงสังสรรค์ สามารถชำระเงินได้ที่</h4>
                            <div class="well">
                                <h3>บัญชีออมทรัพย์ ธนาคารกรุงไทย สาขาสำนักนานาเหนือ</h3>
                                <h3>ชื่อบัญชี <b style="color: #ff0000">"สมาคมศิษย์เก่าคณะวิทยาศาสตร์ มหาวิทยาลัยศิลปากร"</b></h3>
                                <h2>เลขที่บัญชี <b style="color: #ff0000">000-0-35556-9</b></h2>
                            </div>
                            <h4 style="color: #ff0000">จำนวน 1000 บาท ต่อผู้ร่วมงานหนึ่งท่าน</h4>

                            <hr>

                            <input id="code" type="hidden" class="form-control input-lg" name="code" value="{{ $alumni->code }}">

                            @if($alumni->attach_payment == null)
                                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} text-center">
                                    <label for="file" class="col-md-12">แนบหลักฐานการชำระเงิน</label>

                                    <div class="col-md-6 col-md-offset-3">
                                        <input id="file" type="file" class="form-control input-lg" name="file" value="{{ old('file') }}" required autofocus>

                                        @if ($errors->has('file'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            @else
                                <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }} text-center">
                                    <label for="file" class="col-md-12">แนบหลักฐานการชำระเงินใหม่</label>

                                    <div class="col-md-6 col-md-offset-3">
                                        <input id="file" type="file" class="form-control input-lg" name="file" value="{{ old('file') }}" required autofocus>

                                        @if ($errors->has('file'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block btn-lg">
                                        ต่อไป
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
