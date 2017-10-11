@extends('layouts.app')

@section('head')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Type', 'Amount'],
                ['มางานแล้ว',     {{ $attend }}],
                ['ยังไม่มางาน',      {{ $not_attend }}]
            ]);

            var options = {
                title: 'ผู้เข้าร่วมงานย้อนเวลา วิดยากลับวัง'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row" style="padding: 0 15px 0 15px">
            <div class="well col-md-12" style="height: 100%;background: #ffffff">
                <div class="col-md-6">
                    <div id="piechart" style="width: 100%;min-height: 250px"></div>
                </div>
                <div class="col-md-6">
                    <h3>ลงทะเบียนทั้งหมด : {{ $all }}</h3>
                    <h3>เข้าร่วมงานแล้ว : {{ $attend }}</h3>
                    <br>
                    <br>
                    <a href="{{ url('admin/summary') }}" class="btn btn-primary">รายละเอียด</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>ลงทะเบียนเข้างาน</h2>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('admin/register') }}" class="btn btn-primary">คิวอาร์โค้ด</a>
                        <a href="{{ url('admin/register') }}" class="btn btn-default">รหัสนักศึกษา</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>รายชื่อ</h2>
                    </div>
                    <div class="panel-body">
                        <a href="{{ url('admin/search') }}" class="btn btn-primary">ค้นหา</a>
                        <a href="{{ url('admin/alumni/list') }}" class="btn btn-default">ทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
