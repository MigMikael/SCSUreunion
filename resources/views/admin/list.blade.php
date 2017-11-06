@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center" style="padding: 0 15px 0 15px">
            <div class="well col-md-12" style="background: #ffffff">
                <h2>รายชื่อผู้ลงทะเบียนเข้าร่วมงานทั้งหมด</h2>
                <a href="{{ url('admin/alumni/export') }}" class="btn btn-success">Export</a>
            </div>
        </div>
        <div class="row" style="padding: 0 15px 0 15px">
            <div class="well col-md-12" style="background: #ffffff">
                <table class="table table-striped table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>สาขาวิชา</th>
                        <th>สถานะร่วมงาน</th>
                        <th>รายละเอียด</th>
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
                <div class="text-center">
                    {{ $alumni->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
