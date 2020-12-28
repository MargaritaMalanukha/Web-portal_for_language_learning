@extends('layout')

@section('content')
    <div style="">

        <div style="padding: 50px">
            <div class="title_WithNoAfterPseudo">
                <h2>Прохождение теста</h2>
            </div>
            <div class="">
                <form action="{{url('/test_stage_3')}}" method="post">
                    @csrf
                    @foreach($questionArray as $question)
                        <div style="margin: 20px; margin-left: 100px">
                            <h2>{{$question->question}}</h2>
                            <p><input name="{{$question->id}}" type="radio" value="1"> {{$question->answer1}}</p>
                            <p><input name="{{$question->id}}" type="radio" value="2"> {{$question->answer2}}</p>
                            <p><input name="{{$question->id}}" type="radio" value="3"> {{$question->answer3}}</p>
                            <p><input name="{{$question->id}}" type="radio" value="4"> {{$question->answer4}}</p>
                        </div>
                    @endforeach
                    <div class=" col-md-12">
                        <button class="send" type="submit">Завершить тест</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
