@extends('layouts.auth')


@section('content')


<section id="em">
    <div  class="container">
        <div id="game_in" class="row main-row" style="height: 700px">

            <div   class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 md-full pr-none pb-30">
                <div class="photo-and-btn">
                    <div id="mas" class="photo-cont thirdcanvas">
                        <img id="defaultimg" src="" alt="">
                        <img id="emotion" style="max-height: 600px; object-fit: contain" width="auto" class="static-image" alt="" src="" emotion="happy" style="opacity: 0;">
                    </div>
                    <div class="text-center" id="defaultimg">
                        <p></p>
                    </div>
                    <div class="btn-bottom-cont d-flex justify-content-center">
                        <button class="play-btn " data-player="start"><img src="/img/play.png" alt=""> Старт</button>
                        <button class="play-btn play-next-btn disabled" data-player="start"><img src="/img/play.png" alt=""> Продолжить</button>
                        <button class="stop-btn  disabled" data-player="stop"><img src="/img/stop.png" alt="">Закончить</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    p{
        margin-bottom: 0;
    }
</style>
@endsection
