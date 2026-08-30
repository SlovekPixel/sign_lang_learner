@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="face-container text-center mb-4">
            <img src="{{ asset('img/logo.png') }}" width="64" height="64" alt="Жесты" style="margin-bottom:16px;">
            <h2 style="font-family:Unbounded,sans-serif;font-size:22px;margin-bottom:24px;">Управление жестами</h2>
            <a href="/admin/2">Добавить жесты</a>
            <a href="{{ route('profile') }}" style="margin-left:12px;background:#0a0a0a;">К обучению</a>
        </div>
    </div>
</div>
@endsection
