<form class="form-horizontal" method="POST" action="{{ url('step2') }}">
    {{ csrf_field() }}

    {!! Form::hidden('code', $code, ['class' => 'form-control']) !!}

    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label for="first_name" class="col-md-4 control-label">
            ชื่อ <b style="color: #ff0000">*</b>
        </label>

        <div class="col-md-6">
            <input id="first_name" type="text" class="form-control input-lg" name="first_name" value="{{ old('first_name') }}" required autofocus>

            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
        <label for="last_name" class="col-md-4 control-label">
            นามสกุล <b style="color: #ff0000">*</b>
        </label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control input-lg" name="last_name" value="{{ old('last_name') }}" required>

            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="last_name" class="col-md-4 control-label">
            สาขาวิชา <b style="color: #ff0000">*</b>
        </label>
        <div class="col-md-6">
            {!! Form::select('major', $major, null, ['class' => 'form-control']) !!}<br>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'ที่อยู่ ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('address', null, ['class' => 'form-control input-lg']) !!}<br>
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">อีเมล</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}">

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
            <input id="tel" type="text" class="form-control input-lg" name="tel" value="{{ old('tel') }}">

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
            <input id="job" type="text" class="form-control input-lg" name="job" value="{{ old('job') }}">

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
            <input id="position" type="text" class="form-control input-lg" name="position" value="{{ old('position') }}">

            @if ($errors->has('position'))
                <span class="help-block">
                    <strong>{{ $errors->first('position') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('is_gratitude', 'ร่วมพิธีแสดงกตเวทิตา', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-2">
            {!! Form::checkbox('is_gratitude', 1, true, ['class' => 'form-control']) !!}<br>
        </div>
        <div class="col-md-4">
            เวลา 14.00 - 16.00
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('is_party', 'ร่วมงานเลี้ยงสังสรรค์', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-2">
            {!! Form::checkbox('is_party', 1, false, ['class' => 'form-control']) !!}<br>
        </div>
        <div class="col-md-4">
            เวลา 17.30 - 21.00
        </div>
        <div class="col-md-6">
            <p style="color:#ff0000;"><b>หมายเหตุ</b> ค่าใช้จ่ายเพิ่มเติมท่านละ 1000 บาท</p>
        </div>
    </div>

    <div class="form-group">
        <label for="last_name" class="col-md-4 control-label">
            อาหาร <b style="color: #ff0000">*</b>
        </label>

        <div class="col-md-6">
            {!! Form::select('food', $food, null, ['class' => 'form-control']) !!}<br>
        </div>
    </div>

    <div class="form-group{{ $errors->has('follower') ? ' has-error' : '' }}">

        <label for="last_name" class="col-md-4 control-label">
            จำนวนผู้ติดตาม <b style="color: #ff0000">*</b>
        </label>

        <div class="col-md-6">
            @if(Request::is('*/edit'))
                <input id="follower" type="number" class="form-control input-lg" name="follower" min="0" value="{{ old('follower') }}" required>
            @else
                <input id="follower" type="number" class="form-control input-lg" name="follower" min="0" value="0" required>
            @endif

            @if ($errors->has('follower'))
                <span class="help-block">
                    <strong>{{ $errors->first('follower') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary btn-lg">
                ต่อไป
            </button>
        </div>
    </div>
</form>