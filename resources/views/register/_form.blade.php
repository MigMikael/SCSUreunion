<form class="form-horizontal" method="POST" action="{{ url('step2') }}">
    {{ csrf_field() }}

    {!! Form::hidden('code', $code, ['class' => 'form-control']) !!}

    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label for="first_name" class="col-md-4 control-label">ชื่อ</label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
        <label for="last_name" class="col-md-4 control-label">นามสกุล</label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('major', 'สาขาวิชา', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('major', $major, null, ['class' => 'form-control']) !!}<br>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'ที่อยู่ ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('address', null, ['class' => 'form-control']) !!}<br>
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">อีเมล</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
        <label for="tel" class="col-md-4 control-label">โทรศัพท์</label>

        <div class="col-md-6">
            <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}">

            @if ($errors->has('tel'))
                <span class="help-block">
                    <strong>{{ $errors->first('tel') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
        <label for="job" class="col-md-4 control-label">อาชีพ</label>

        <div class="col-md-6">
            <input id="job" type="text" class="form-control" name="job" value="{{ old('job') }}">

            @if ($errors->has('job'))
                <span class="help-block">
                    <strong>{{ $errors->first('job') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
        <label for="position" class="col-md-4 control-label">ตำแหน่งงาน</label>

        <div class="col-md-6">
            <input id="position" type="text" class="form-control" name="position" value="{{ old('position') }}">

            @if ($errors->has('position'))
                <span class="help-block">
                    <strong>{{ $errors->first('position') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('food', 'อาหาร', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('food', $food, null, ['class' => 'form-control']) !!}<br>
        </div>
    </div>

    <div class="form-group{{ $errors->has('follower') ? ' has-error' : '' }}">
        <label for="follower" class="col-md-4 control-label">จำนวนผู้ติดตาม</label>

        <div class="col-md-6">
            <input id="follower" type="number" class="form-control" name="follower" value="{{ old('follower') }}" required>

            @if ($errors->has('follower'))
                <span class="help-block">
                    <strong>{{ $errors->first('follower') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Next
            </button>
        </div>
    </div>
</form>