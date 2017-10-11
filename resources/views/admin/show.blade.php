@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>
                    {{ $alumnus->first_name }} {{ $alumnus->last_name }}
                </h2>
                <h2>
                    {{ $alumnus->code }}
                    <b style="color: #FFD700">[SC {{ $alumnus->sc }}]</b>
                </h2>
            </div>
            <div class="panel-body">
                <div class="col-md-4">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td>สาขา</td>
                            <td>{{ $alumnus->major }}</td>
                        </tr>
                        <tr>
                            <td>อีเมล</td>
                            <td>{{ $alumnus->email }}</td>
                        </tr>
                        <tr>
                            <td>โทรศัพท์</td>
                            <td>{{ $alumnus->tel }}</td>
                        </tr>
                        <tr>
                            <td>อาชีพ</td>
                            <td>{{ $alumnus->jobs }}</td>
                        </tr>
                        <tr>
                            <td>ตำแหน่ง</td>
                            <td>{{ $alumnus->position }}</td>
                        </tr>
                        <tr>
                            <td>อาหาร</td>
                            <td>{{ $alumnus->food }}</td>
                        </tr>
                        <tr>
                            <td>จำนวนผู้ติดตาม</td>
                            <td>{{ $alumnus->follower }}</td>
                        </tr>
                        <tr>
                            <td>ร่วมงานกตเวทิตา</td>
                            <td>
                                @if($alumnus->is_gratitude == 1)
                                    <i class="material-icons" style="color: green">check_circle</i>
                                @else
                                    <i class="material-icons" style="color: red">highlight_off</i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>ร่วมงานสังสรรค์</td>
                            <td>
                                @if($alumnus->is_party == 1)
                                    <i class="material-icons" style="color: green">check_circle</i>
                                @else
                                    <i class="material-icons" style="color: red">highlight_off</i>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>เข้าร่วมงาน</td>
                            <td>
                                @if($alumnus->is_attend == 1)
                                    <i class="material-icons" style="color: green">check_circle</i>
                                @else
                                    <i class="material-icons" style="color: red">highlight_off</i>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 well">
                    <p>ที่อยู่</p>
                    <p>{{ $alumnus->address }}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ url('/alumni/'.$alumnus->code.'/qr') }}" class="img-responsive img-thumbnail" height="300" width="300" alt="qrcode">
                </div>
            </div>
        </div>
    </div>
@endsection