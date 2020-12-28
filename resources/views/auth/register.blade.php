@extends('layout')

@section('content')

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form class="main_form" action="{{ url('/register') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Ваше имя" type="text" name="name">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Электронная почта" type="text" name="email">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Пароль" type="text" name="password">
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" placeholder="Повторите пароль" type="text" name="repeat-password">
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <select name="usertype" class="register-select">
                                    @foreach($user_types as $user_type)
                                        <option value="{{ $user_type->descriptionRU }}">{{ $user_type->descriptionRU }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                <select name="level" class="register-select">
                                    @foreach($levels as $level)
                                        <option value="{{ $level->description }}">{{ $level->description }}</option>
                                    @endforeach
                                </select>
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
