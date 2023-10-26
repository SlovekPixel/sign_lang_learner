@extends('layouts.admin')

@section('content')


    <div class="col-lg-5 enter-col upload-form">
        <form method="POST" enctype="multipart/form-data" action="{{ route('save.emot') }}">
            @csrf
            <div class="enter-container">
                <div class="enter-img-cont text-center">
                    <div class="logo text-center">
                        ЛОГО
                    </div>

                </div>
                <div class="enter-input-container">
                    <label for="">
                        <span>Гифка слова</span>
                        <input class="enter-redaction" type="file" name="url">
                    </label>
                </div>

                <div class="enter-input-container">
                    <label for="">
                        <span>Значение</span>
                        <input class="enter-redaction" type="text" name="meaning">
                    </label>
                </div>

                <div class="text-center">
                    <input class="primary-but" type="submit" value="Отправить">
                </div>
            </div>
        </form>

    </div>
    <div class="col-12">
        <div class="row">
            @foreach ($emotions as $emot)
                <div class="col-4 text-center">
                    <img src="{{ '/'. $emot->url }}" alt="">
                    <h2>{{ $emot->meaning }}</h2>
                </div>
            @endforeach
        </div>
    </div>
@endsection
