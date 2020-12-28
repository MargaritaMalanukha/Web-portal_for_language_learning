@extends('layout')

@section('content')
    <div style="background:#FFCE78" class="">
        <div style="padding: 50px">
            <h1>Test stage 2</h1>

            <div class="">
                <form action="{{url('/test_stage_3')}}" method="post">
                    @csrf
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
