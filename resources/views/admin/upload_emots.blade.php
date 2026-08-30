@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-5 enter-col upload-form">
        <form method="POST" enctype="multipart/form-data" action="{{ route('save.emot') }}">
            @csrf
            <div class="enter-container">
                <div class="enter-img-cont text-center">
                    <img src="{{ asset('img/logo.png') }}" width="72" height="72" alt="Жесты">
                </div>
                <div class="text-center mb-3">
                    <h2 style="font-family:Unbounded,sans-serif;font-size:18px;">Новый жест</h2>
                </div>
                <div class="enter-input-container">
                    <label>
                        <span>GIF слова</span>
                        <input class="enter-redaction" type="file" name="url" accept="image/gif,image/*" required>
                    </label>
                </div>
                <div class="enter-input-container">
                    <label>
                        <span>Значение</span>
                        <input class="enter-redaction" type="text" name="meaning" required>
                    </label>
                </div>
                <div class="text-center">
                    <input class="primary-but" type="submit" value="Сохранить">
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-7">
        <div class="row">
            @forelse ($emotions as $emot)
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset($emot->url) }}" alt="{{ $emot->meaning }}" style="max-width:100%;border:1px solid #ddd6d3;background:#fff;">
                    <h3 style="font-size:16px;margin-top:10px;font-family:Unbounded,sans-serif;">{{ $emot->meaning }}</h3>
                </div>
            @empty
                <div class="col-12">
                    <p style="color:#6b6563;">Пока нет загруженных жестов.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
