@extends('layouts.admin');

@section('content')
<div class="col-lg-5 enter-col upload-form">
    <form method="POST"  enctype="multipart/form-data" action="{{ route('save.default') }}">
        @csrf
        <div class="enter-container">
            <div class="enter-img-cont text-center">
                <div class="logo text-center">
                    ЛОГО
                </div>

            </div>
            <div class="enter-input-container">
                <label for="">
                    <span>Стандартная картинка лица</span>
                    <input class="enter-redaction" type="file" name="default">
                </label>
            </div>
            <div class="enter-input-container">
                <label for="">
                    <span>Тип</span>
                    <select name="type" id="">
                        <option value="1">Статичная</option>
                        <option value="2">Анимации</option>
                        <option value="3">Радикалы</option>
                    </select>
                </label>
            </div>
            <hr>

            <div class="text-center">
                <input class="primary-but" type="submit" value="Добавить">
            </div>

        </div>
    </form>
</div>

@endsection
