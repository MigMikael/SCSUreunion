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
                        <form class="form-horizontal" method="POST" action="{{ url('alumni/payment') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }} text-center">
                                <label for="code" class="col-md-12">รหัสนักศึกษา</label>

                                <div class="col-md-4 col-md-offset-4">
                                    <input id="code" type="text" class="form-control input-lg" name="code" value="{{ old('code') }}" required autofocus>

                                    @if ($errors->has('code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

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
