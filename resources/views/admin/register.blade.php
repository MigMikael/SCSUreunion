@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h2>ลงทะเบียนเข้างาน</h2>
                    </div>

                    <div class="panel-body" style="padding-top: 5%;">
                        <form class="form-horizontal" method="POST" action="{{ url('admin/register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }} text-center">
                                <label for="code" class="col-md-12">รหัสนักศึกษา</label>

                                <div class="col-md-4 col-md-offset-4">
                                    <input id="code" type="text" class="form-control input-lg" name="code" value="{{ old('code') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="panel-footer" style="height: 80px">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if($errors->has('code'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('code') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
