@extends('layout')

@section('content')

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Электронная почта" type="text" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Пароль" type="text" name="password">
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
