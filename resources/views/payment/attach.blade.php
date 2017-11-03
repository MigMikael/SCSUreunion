@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>ยืนยันการชำระเงิน</h2>
                    </div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('alumni/attach/payment') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
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
