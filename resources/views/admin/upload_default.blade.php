@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5 enter-col upload-form">
        <form method="POST" enctype="multipart/form-data" action="{{ route('save.default') }}">
            @csrf
            <div class="enter-container">
                <div class="enter-img-cont text-center">
                    <img src="{{ asset('img/logo.png') }}" width="72" height="72" alt="Жесты">
                </div>
                <div class="text-center mb-3">
                    <h2 style="font-family:Unbounded,sans-serif;font-size:18px;">Стандартное изображение</h2>
                </div>
                <div class="enter-input-container">
                    <label>
                        <span>Картинка</span>
                        <input class="enter-redaction" type="file" name="default" required>
                    </label>
                </div>
                <div class="enter-input-container">
                    <label>
                        <span>Тип</span>
                        <select name="type" class="enter-redaction" style="height:48px;width:100%;">
                            <option value="1">Статичная</option>
                            <option value="2">Анимации</option>
                            <option value="3">Радикалы</option>
                        </select>
                    </label>
                </div>
                <div class="text-center">
                    <input class="primary-but" type="submit" value="Добавить">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
