@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($scores as $key => $value)
            <div class="col-md-3">
                @include('admin._card')
            </div>
        @endforeach
    </div>
@endsection