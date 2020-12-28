@extends('layout')

@section('content')
<div style="margin-bottom: 70px" class="">
    <div class="about">
        <div class="container">
            <div class="row">
                <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <figure><img src="images/growth.png"/></figure>
                    </div>
                </dir>
                <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="about_box">
                        <h3>Выбор языкового уровня</h3>
                        <p style="font-size: large">
                            Здравствуйте. Вы находитесь на начальном этапе прохождения тестирования.
                            Тестирование позволит вам повысить свой уровень владения языком на нашем сайте.
                            Выберите желаемый уровень для прохождения теста. Система автоматически сформирует список необходимых вопросов
                        </p>
                        <p style="font-size: large">
                            Такую процедуру можно проходить неограниченное количество раз.
                            Если Вы уверены в своих силах, Вы можете пройти сразу несколько уровней за один подход.
                            Когда вы дадите 80 и более % правильных ответов, мы присвоим Вам новый уровень владения языком.
                        </p>
                    </div>
                </dir>
            </div>
        </div>
    </div>

    <form action="{{url('/test_stage_2')}}" method="post">
        @csrf
        <div class="whyschose">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-0">
                        <div class="title_WithNoAfterPseudo">
                            <h2>Ваш текущий языковой уровень <strong class="black">{{$userLevel->description}}</strong></h2>
                            <span>
                                Желаемый уровень :
                                <select style="border: 2px solid #ffc221;" size="1" name="choosedLevelID">
                                        @foreach($availableLevels as $level)
                                        <option value="{{$level['id']}}">{{$level['description']}}</option>
                                    @endforeach
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-md-12">
            <button class="send" type="submit">Начать тест</button>
        </div>
    </form>
</div>
@endsection
