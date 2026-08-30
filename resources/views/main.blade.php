@extends('layouts.auth')

@section('content')
<section id="em">
    <div class="container">
        <div id="game_in" class="row main-row align-items-stretch">
            <div class="col-12">
                <div class="photo-and-btn">
                    <div id="mas" class="photo-cont thirdcanvas">
                        <img id="defaultimg" src="" alt="">
                        <img id="emotion" class="static-image" alt="" src="" emotion="happy" style="max-height: 420px; object-fit: contain; opacity: 0;">
                    </div>
                    <div class="btn-bottom-cont d-flex justify-content-center">
                        <button class="play-btn" type="button" data-player="start">
                            <img src="{{ asset('img/play.png') }}" alt=""> Старт
                        </button>
                        <button class="play-btn play-next-btn disabled" type="button" data-player="start">
                            <img src="{{ asset('img/play.png') }}" alt=""> Продолжить
                        </button>
                        <button class="stop-btn disabled" type="button" data-player="stop">
                            <img src="{{ asset('img/stop.png') }}" alt=""> Закончить
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
