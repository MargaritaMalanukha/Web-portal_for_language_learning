@extends('layout')

@section('content')

    <form class="col-md-12" action="{{ route('rooms.store') }}" method="post" style="margin-top: 70px">
        @csrf
        <button class="read-more" type="submit">Создать новую</button>
    </form>

    <div class="service" >
        <div class="container">
            <div class="row" style="font-family: sans-serif">
                @foreach($rooms as $room)
                    <a class="col-xl-4 col-lg-4 col-md-4 col-sm-12" href="{{ route('rooms.show', $room->id) }}">
                        <form class="service-box" action="{{ route('rooms.destroy', $room->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <h3>Комната #{{ $room->id }}</h3>
                            <p>Посещений комнаты: {{ $participants[$loop->index] }}</p>
                            <div class="col-md-12" style="margin-top: 20px">
                                <button class="send" type="submit">Удалить</button>
                            </div>
                        </form>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

@endsection
