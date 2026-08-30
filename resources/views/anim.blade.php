@extends('layouts.auth')

@section('content')
<section id="em">
    <div class="container">
        <div id="game_in" class="row main-row align-items-stretch">
            <div class="col-lg-5 col-md-12 pb-30">
                <div class="photo-and-btn">
                    <div id="mas" class="photo-cont thirdcanvas">
                        <div class="text-center" id="defaultimg">
                            <p class="def-text">Нажмите старт</p>
                        </div>
                        <img id="emotion" class="giff" alt="" src="" style="opacity: 0">
                    </div>
                    <div class="btn-bottom-cont d-flex justify-content-center">
                        <button class="play-btn" type="button" data-player="start">
                            <img src="{{ asset('img/play.png') }}" alt=""> Старт
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 answer-col">
                <div class="answer">Ваш ответ</div>
                <div class="click-emotioanls d-flex px-4 pb-4">
                    <input type="text" class="form-control add-answer-btn w-100" placeholder="Введите значение жеста" aria-label="Ответ">
                    <button class="play-btn play-next-btn disabled w-100" type="button" data-player="start">
                        <img src="{{ asset('img/play.png') }}" alt=""> Продолжить
                    </button>
                    <button class="stop-btn disabled w-100" type="button" data-player="stop">Закончить</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 pb-30">
                <div class="emotionals-result">
                    <div class="result-title text-center">Ваши результаты</div>
                    <div class="scrollable">
                        @foreach ($results as $result)
                            <div class="res-1 text-center">
                                <span class="date-test">{{ $result->created_at->format('d.m.y') }} г.</span>
                                <span>{{ floor($result->result) }}</span>
                                <span>%</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
