@extends('layout')

@section('content')

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" action="{{ url('/profile/edit_name') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" value="{{ session('name') }}" type="text" name="name">
                            </div>

                            <div class="col-md-12">
                                <button class="send" type="submit">Отправить</button>
                            </div>
                            @foreach($errors->all() as $error)
                                {{ $error }}<br/>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
