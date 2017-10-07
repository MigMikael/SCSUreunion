@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    ค้นหา
                </h2>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{ url('admin/search') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-md-4">
                            {!! Form::select('keyword', $keyword, null, ['class' => 'form-control']) !!}<br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            {!! Form::text('query', null, ['class' => 'form-control']) !!}<br>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @if(isset($alumni))
            <div class="row" style="padding: 0 15px 0 15px">
                <div class="well col-md-12" style="background: #ffffff">
                    <table class="table table-hover table-responsive table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Major</th>
                            <th>Attend</th>
                            <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alumni as $alumnus)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $alumnus->first_name }}</td>
                                <td>{{ $alumnus->last_name }}</td>
                                <td>{{ $alumnus->major }}</td>
                                <td>
                                    @if($alumnus->is_attend == 1)
                                        <i class="material-icons" style="color: green">check_circle</i>
                                    @else
                                        <i class="material-icons" style="color: red">highlight_off</i>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/alumni/show/'.$alumnus->code) }}" target="_blank">view</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection