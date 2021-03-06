@extends('layout')

@section('content')

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
                    <form class="service-box">
                        <i><img src="{{ asset('icon/no-stopping.svg') }}"/></i>
                        <h3>Стандартная подписка</h3>
                        <p>бесплатно <br/> безлимитные комнаты и тесты  </p>
                        <div class="col-md-12" style="margin-top: 20px">
                            <a class="send" href="/profile/premium/{{$subscriptions[0]->description}}">Приобрести</a>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="service-box">
                        <i><img src="{{ asset('icon/star.svg') }}"/></i>
                        <h3>Месячная подписка</h3>
                        <p>150 грн/месяц<br> + безлимитное общение с native</p>
                        <div class="col-md-12" style="margin-top: 20px">
                            <a class="send" href="/profile/premium/{{$subscriptions[2]->description}}">Приобрести</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <form class="service-box">
                        <i><img src="{{ asset('icon/crown.svg') }}"/></i>
                        <h3>Годовая подписка</h3>
                        <p>1000 грн/год <br> + безлимитное общение с native</p>
                        <div class="col-md-12" style="margin-top: 20px">
                            <a class="send" href="/profile/premium/{{$subscriptions[1]->description}}">Приобрести</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
