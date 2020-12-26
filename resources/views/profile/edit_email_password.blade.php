@extends('layout')

@section('content')

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" action="{{ url('/profile/edit_email_password') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" value="{{ session('email') }}" type="text" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Введите старый пароль" type="text" name="old-password">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Введите новый пароль" type="text" name="new-password">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Повторите новый пароль" type="text" name="repeat-password">
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
