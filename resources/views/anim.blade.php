@extends('layouts.auth')

@section('content')
<section id="em">
    <div class="container">
        <div id="game_in" class="row main-row">
            <div class="offset-lg-1 col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 md-full pr-none pb-30">
                <div class="photo-and-btn">
                    <div id="mas" class="photo-cont thirdcanvas">
                        <div class="text-center" id="defaultimg">
                            <p class="def-text">Нажмите старт</p>
                        </div>
                        <img id="emotion" class="giff"  alt="" src="" style="opacity: 0">
                    </div>
                    <div class="btn-bottom-cont d-flex justify-content-center">
                        <button class="play-btn " data-player="start"><img src="/img/play.png" alt=""> Старт</button>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-12 answer-col">
                <div class="answer">
                    Ваш ответ:
                </div>
                <div class="click-emotioanls d-flex">
                    <input type="text" class="form-control add-answer-btn w-100">
                    <button class="play-btn play-next-btn disabled w-100" data-player="start" style="margin: 30px 0px"><img src="/img/play.png" alt=""> Продолжить</button>
                    <button class="stop-btn  disabled w-100" data-player="stop">Закончить</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col-12  pb-30">
                <div class="emotionals-result ">
                    <div class="text-center result-img">
                        <img src="/img/em.png" alt="">
                    </div>
                    <div class="result-title text-center">Ваши результаты</div>
                    <div class="scrollable">
                        @foreach ($results as $result)
                    <div class="res-1 text-center">
                        <span class="date-test">{{ $result->created_at->format('d.m.y' . 'г.')}}</span>
                        <span></span>
                    <span>{{ floor($result->result)  }}</span>
                        <span>%</span>
                    </div>
                    @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>

<style>
    div#defaultimg {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 150px;
  background: gray;
}

@media screen and (max-width: 992px) {
div#defaultimg {
    width: 100%;
    height: 167px;
    background: gray;
  }
}
</style>
@endsection
