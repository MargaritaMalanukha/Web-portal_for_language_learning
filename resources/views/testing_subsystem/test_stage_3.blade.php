@extends('layout')

@section('content')
    <div style="background:#FFCE78" class="">
        <div style="padding: 50px">
            <h1>Test stage 3</h1>

            <div class="">
                <form action="{{url('/home')}}" method="post">
                    @csrf
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
@endsection
