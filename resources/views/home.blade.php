@extends('layout')

@section('content')

    <section class="slider_section">
        <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/home1.jpg" alt="First slide">
                    <div class="container" style="margin-right: 50px">
                        <div class="carousel-caption relative">
                            <h1>Пора <br> Выучить <br>Английский </h1>
                            <p style="margin-top: 20px; font-weight: bold">Надоело зубрить по книгам? Хочется изучать интересно? WinLingo идет на помощь! <br>
                                Выучи английский дома, общаясь с носителями языка и другими студентами. <br> Для того, чтобы начать, нажми на кнопку и пройди тест на уровень.</p>
                            <a href="/tests">Начать обучение</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/home2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative" style="left: 36%">
                            <h1 style>Посещай <br> Видеочаты </h1>
                            <p style="margin-top: 20px; font-weight: bold">Методика WinLingo - непрерывное общение пользователей с <br>
                                периодическим выполнением теста на повышение уровня. <br>
                                Посещайте видеочаты чтобы получить необходимые навыки <br> общения и пройти тест успешно. </p>
                            <a href="/rooms">Перейти к видеокомнатам</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/home3.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative" style="left: 65%">
                            <h1 style>Приобрети <br> подписку </h1>
                            <p style="margin-top: 20px; font-weight: bold">Оформи месячную или годовую подписку <br>
                                по выгодной цене и получи возможность<br>
                                общения с носителями языка в видеочатах.
                            </p>
                            <a  href="/profile/premium">Перейти к подпискам</a>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-left'></i>
            </a>

        </div>

    </section>

@endsection
