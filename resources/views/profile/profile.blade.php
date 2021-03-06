@extends('layout')

@section('content')

    <div class="service">
        <div class="container">
            <div class="row" style="font-family: sans-serif">
                <a href="{{ url('/profile/edit_name') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('icon/user.svg')}}"/></i>
                        <h3>Имя: {{ $user->name}} </h3>
                        <p>Нажмите для изменения имени пользователя</p>
                    </div>
                </a>
                <a href="{{ url('/profile/edit_email_password') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('icon/email.svg')}}"/></i>
                        <h3>Почта: {{ $email }}</h3>
                        <p>Нажмите для изменения адреса электронной почты и пароля.</p>
                    </div>
                </a>
                <a href="{{ url('/tests') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="icon/service6.png"/></i>
                        <h3>Уровень английского: {{ $level }}</h3>
                        @if ($level != 'C2')
                            <p>Продолжайте заниматься чтобы повысить свой уровень! </p>
                        @else
                            <p>Продолжайте заниматься чтобы поддерживать свой уровень! </p>
                        @endif
                    </div>
                </a>
                <a href="{{ url('/rooms') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('icon/videocall.svg')}}"/></i>
                        <h3>Посещений за месяц: {{ $attends }}</h3> <!---todo параметризация количества видеозвонков-->
                        <p>Нажмите для перехода на страницу видеозвонков </p>
                    </div>
                </a>
                <a href="{{ url('/rooms') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('icon/videocall2.svg')}}"/></i>
                        <h3>Всего посещений: {{ $attends }}</h3> <!---todo параметризация количества видеозвонков-->
                        <p>Нажмите для перехода на страницу видеозвонков </p>
                    </div>
                </a>
                @if($is_native)
                    <a href="{{ url('/profile/edit_card') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="service-box">
                            <i><img src="{{asset('icon/credit-card.svg')}}"/></i>
                            <h3>Номер карты: {{ $creditCardNum }}</h3>
                            <p>Нажмите для изменения карты, на которую будет поступать оплата. </p>
                        </div>
                    </a>
                @else
                <a href="{{ url('/profile/premium') }}" class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{asset('icon/diamond.svg')}}"/></i>
                        <h3>Подписка: {{ $subscriptionType }}</h3>
                        <p>Нажмите для оформления подписки на WinLingo </p>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </div>

@endsection
