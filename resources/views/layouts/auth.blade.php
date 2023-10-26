<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Жесты</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <section class="header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 col-3 logo-col">
                    <div class="logo text-center">
                        <img src="/img/logo.png" width="55px" alt="logo">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="result-one">
                        <img src="/img/icon.png" alt="">
                        <span class="count-big"> {{floor($middle_result ?? '0') }}</span>
                        <span class="percent-big">%</span>
                        <span class="result-txt">Ваш средний результат</span>
                    </div>
                </div>
                <div class="col-lg-3 justify-content-end col-md-12 d-flex">
                    <div class="result-two">
                    <span class="count-small">{{ floor($all_middle_result ?? '0')}}</span>
                        <span class="percent-small">%</span>
                        <span class="result-txt">Средний результат всех пользователей</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 col-xs-9 col-9  npdng">
                    <div class="mode d-flex">
                        <div class="select">
                            <div class="mode-add-txt">
                                Выберите режим
                            </div>
                            <select  onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" name="slct" id="slct">
                                <option selected="" disabled=""> {{ $page ?? " "}} </option>
                                {{! $route = Request::route()->getName() }}
                                @if($route != "profile") <option value="{{ route('profile')}}">Обучение</option> @endif
                                @if($route != "anim")<option value="{{ route('anim') }}">Игра</option> @endif
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="user--sidebar">
        <div class="line visible">
            <svg fill="white">
                <path d="M1,70C100,32 70,9 190,70" stroke="white" stroke-width="3"/>
              </svg>

        </div>
        <div class="sidebar--toggler">
            <svg  xmlns="http://www.w3.org/2000/svg" viewBox="-42 0 512 512.002"><path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/></svg>
        </div>
        <div class="user--profile">
            <div class="user--info--main">


                <p class="user--email">{{ Auth::user()->email }}</p>
                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Выйти
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

            <div class="tab-nav">
                <div class="tab-name active">Мои результаты</div>
                <div class="tab-name">Настройки</div>
            </div>
            <div class="tab-body">
                <div class="tab-content show">
                    <div class="text-center">
                        <h3>Результаты</h3>
                    </div>
                    @foreach ($results as $result)
                    <div class="res-1 text-center">
                        <span class="date-test">{{ $result->created_at->format('d.m.y' . 'г.')}}</span>
                        <span>Ваш результат</span>
                    <span>{{ floor($result->result)  }}</span>
                        <span>%</span>
                    </div>
                    @endforeach
                </div>
                <div class="tab-content">
                    <div class="text-center">
                        <h3>Смена почты</h3>
                    </div>
                <form class="" method="POST" action="{{ route('new.email') }}">
                    @csrf
                        <div class="enter-input-container text-center">
                            <label for="">
                                <span>email</span>
                                <input class="enter-redaction" type="email" name="email" placeholder="Email" required>
                                @error('email')<p class="feedback">{{ $message }}</p>
                                <script>alert('{{ $message }}');</script> @enderror
                            </label>
                        </div>
                        <div class="text-center">
                            <input class="primary-but" type="submit" value="Применить">
                        </div>
                    </form>
                    <hr>
                    <div class="text-center">
                        <h3>Смена пароля</h3>
                    </div>

                <form class="profile--form" method="POST"  action="{{ route('new.password') }}">
                    @csrf
                        <div class="enter-input-container text-center">
                            <label for="">
                                <span>Старый пароль</span>
                                <input class="enter-redaction" type="password" name="old_password" placeholder="Старый пароль" required>
                                @error('old_password')
                                <p class="feedback">{{ $message }}</p>
                                <script>alert('{{ $message }}');</script>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                        <script>alert('{{ session('message') }}');</script>
                                    </div>
                                @endif
                            </label>
                        </div>
                        <div class="enter-input-container text-center">
                            <label for="">
                                <span>Новый пароль</span>
                                <input class="enter-redaction" type="password" name="password" placeholder="Новый пароль" required>
                                @error('password')
                                <p class="feedback">{{ $message }}</p>
                                <script>alert('{{ $message }}');</script>
                                @enderror
                            </label>
                        </div>

                        <div class="enter-input-container text-center">
                            <label for="">
                                <span>Повторите новый пароль</span>
                                <input class="enter-redaction" type="password" name="password_confirmation" placeholder="Повторите новый пароль" required>
                                @error('password_confirmation')
                                <p class="feedback">{{ $message }}</p>
                                <script>alert('{{ $message }}');</script>
                                @enderror
                            </label>
                        </div>
                        <div class="text-center">
                            <input class="primary-but" type="submit" value="Применить">
                        </div>
                    </form>
                    <hr>



                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="{{ asset('js/game.js') }}" defer></script>
    @yield('script')
</body>
</html>
