@extends('layouts.app')

@section('content')
    <nav id="main--page--nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 m-auto logo--main--page">
                    <h3 class="text-center">Выучи язык жестов уже сегодня!</h3>
                </div>
            </div>
        </div>
    </nav>
    <section id="main--page--section">
        <div class="container position-relative">
            <img class=" big--back--logo" src="/img/back--logo.png" alt="logo">
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <div class="main--page--info--block">
                        <h2>Вход</h2>
                        <hr>
                        <p>Войдите или <a href="/register"> зарегистрируйтесь</a>, <br> чтобы получить доступ к сервису обучению жестам</p>

                        <a class="btn--main--page" href="/login">Войти</a>
                        <a class="btn--main--page--reverse" href="/register">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<footer id="main--page--footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="">
                    <a href="">Политика конфиденциальности</a>
                    и
                    <a href="">оферта</a>
                </p>
            </div>
            <div class="col-lg-6">
                <p style="font-size: 10px;">Мы используем файлы "cookie", чтобы обеспечить максимальное удобство пользователям.</p>
            </div>
        </div>
    </div>
</footer>

@endsection

@section('script')
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap&subset=cyrillic');
    body {
        height: 100vh;
    }
    *{
        padding: 0;
        margin: 0;
    }
    .ml-auto{
        margin-left: auto;
    }
    .position-relative{
        position: relative;
    }
    #main--page--nav{
        padding-top: 40px;
    }
    .logo--main--page{
        display: flex;
        align-items: flex-end;
    }
    .logo--main--page img{
        margin-right: 40px;
    }
    .logo--main--page h3{
        margin-bottom: 0;
        font-size: 30px;
        letter-spacing: 0px;
        color: rgb(0,0,0);
        font-family: "Roboto";
        font-weight: normal;
    }
    .soc--links{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    .soc--links p{
        margin-bottom: 0;
    }
    #main--page--section{
        margin-top: 96px;
        min-height: 72vh;
    }
    img.example{
        margin-top: 20px;
    }
    ul{
        list-style: none;
    }
    ul li{
        font-size: 14px;
        letter-spacing: 0px;
        line-height: 24px;
        color: rgb(0,0,0);
        font-family: "Roboto";
    }
    ul li:before{
        content: "";
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 5px;
        background-color: #0067ff;
        margin-right: 10px;
    }

    .sale--banner{
        background-color: #0067ff;
        border-radius: 10px;
        padding: 12px 0 ;
        text-align: center;
        overflow: hidden;
    }
    .sale--banner .percent--img{
        position: absolute;
        left: 0;
    }
    .sale--banner p{
        margin-bottom: 0;
        font-size: 16px;
        letter-spacing: 0px;
        color: rgb(255,255,255);
        font-family: "Roboto";
        text-align: center;
    }
    .sale--banner h3{
        margin-top: 10px;
        margin-bottom: 0;
        font-size: 18px;
        letter-spacing: 0px;
        color: rgb(255,255,255);
        font-family: "Roboto";
        text-align: center;
    }
    .sale--banner small{
        text-decoration: line-through;
        font-size: 12px;
        letter-spacing: 0px;
        color: rgb(255,255,255);
        font-family: "Roboto";
        text-align: center;
    }

    .main--page--info--block{

        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 1px 35px rgba(0,104,255,0.11);
        background-color: #ffffff;
        height: 100%;
        width: 100%;
    }
    .btn--main--page{
        box-sizing: border-box;
        border: 1px solid  #0067ff;
        margin: 20px 0;
        color: white;
        display: block;
        border-radius: 10px;
        background-color: #0067ff;
        padding: 23px 0;
        text-align: center;
    }
    .btn--main--page:hover{
       color: white;
        background: #1669e4;
        border: 1px solid  #1669e4;
    }
    .btn--main--page--reverse{
        box-sizing: border-box;
        border: 1px solid  #0067ff;
        margin: 20px 0;
        color: #0067ff;
        display: block;
        border-radius: 10px;
        background-color: white;
        padding: 23px 0;
        text-align: center;
    }
    .btn--main--page--reverse:hover{
        background-color: #fbfbfb;

        color: #0067ff;
    }
    .main--page--info--block h2{
        margin-top: 25px;
        font-size: 30px;
        letter-spacing: 0px;
        color: rgb(0,0,0);
        font-family: "Roboto";
        font-weight: normal;
    }
    .main--page--info--block hr{
        margin-bottom: 10px;
        border-color: #e0e0e0!important;
    }
    .main--page--info--block p {
        padding-bottom: 30px;
        font-size: 16px;
        letter-spacing: 0px;
        color: rgb(0,0,0);
        font-family: "Roboto";
    }
    .big--back--logo{
        position: fixed;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 30%;
    }


    #main--page--footer{
        padding: 17px 0;
        background-color: #edf3f9;

    }
    #main--page--footer p{
        margin-bottom: 0;
    }
    @media (max-width: 1024px){
        .main--page--info--block{
            margin-top: 20px;

        }
        #main--page--section{
            margin-bottom: 40px;
        }
        .soc--links{
            display: none;
        }
        .main--page--info--block h2{
            font-size: 24px;
            text-align: center;
        }
        .main--page--info--block p{
            font-size: 12px;
            text-align: center;
        }
        .logo--main--page h3{
            font-size: 16px;
        }
        .logo--main--page{
            justify-content: center;
            align-items: center;
        }
    }
</style>
@endsection
