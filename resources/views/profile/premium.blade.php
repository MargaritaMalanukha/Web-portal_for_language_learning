@extends('layout')

@section('content')

    @if($is_user)
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title">
                        <h2>оформить <strong class="black">подписку</strong></h2>
                        <span>Простой и эффективный способ учить язык быстрее!</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <form class="service-box" method="POST" action="{{ url('/profile/premium/', $subscriptions[0]) }}">
                        <i><img src="{{ asset('icon/no-stopping.svg') }}"/></i>
                        <h3>Стандартная подписка</h3>
                        <p>бесплатно <br/> безлимитные комнаты и тесты  </p>
                        <div class="col-md-12" style="margin-top: 20px">
                            <button class="send" type="submit">Приобрести</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <form class="service-box" method="POST" action="/profile/premium/{{$subscriptions[1]->id}}">
                        <i><img src="{{ asset('icon/star.svg') }}"/></i>
                        <h3>Месячная подписка</h3>
                        <p>150 грн/месяц<br> + безлимитное общение с native</p>
                        <div class="col-md-12" style="margin-top: 20px">
                            <button class="send" type="submit">Приобрести</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <form class="service-box" method="POST" action="{{ url('/profile/premium/', $subscriptions[2]) }}">
                        <i><img src="{{ asset('icon/crown.svg') }}"/></i>
                        <h3>Годовая подписка</h3>
                        <p>1000 грн/год <br> + безлимитное общение с native</p>
                        <div class="col-md-12" style="margin-top: 20px">
                            <button class="send" type="submit">Приобрести</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @else

        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <form class="main_form" action="{{ url('/profile/premium') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" placeholder="Введите номер карты для ежемесячного получения платы за конференции"
                                           type="text" name="creditCardNum" @if($creditCardNum != null) value="{{ $creditCardNum }} @endif">
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

    @endif

@endsection
