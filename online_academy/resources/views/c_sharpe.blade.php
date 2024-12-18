@extends('layout')
<?php use Illuminate\Support\Facades\Auth;?>

<head>
    <link rel="stylesheet" href="{{ asset('css/c_sharpe.css') }}">
    @section('title')Курс "C#-разработчик"@endsection
</head>
@section('main_content')
<main>
    <div class="container">
        <div class="green_bg">
            <div class="flex_in_rect">
                <div class="txt_in_rect">
                    <h1 class="h_in_rect">Курс "C#-разработчик"</h1>
                    <p style="width: 820px;">Научитесь создавать сайты, серверные. десктопные и мобильные приложения
                        с помощью языка С# от Microsoft.</p>
                    <a href="#"><button class="btn_in_rect">Записаться</button></a>
                </div>
                <img style="margin-left: 20px;" src="{{ asset('images/c_sharpe.svg') }}" alt="chel">
            </div>
        </div>
        <h1 class="h_main_Info">На курсе вы научитесь</h1>

        <div class="main_info_curs">
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2 style="margin-left: 20px;">Основы языка C#</h2>
                </div>
                <div>
                    <p>Студенты изучат синтаксис языка, типы данных, управление потоком, а также принципы
                        объектно-ориентированного программирования, такие как наследование, инкапсуляция и
                        полиморфизм</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Работа с базами данных</h2>
                </div>
                <div>
                    <p>Курс может охватывать взаимодействие с базами данных с использованием Entity Framework,
                        ADO.NET и SQL, что позволит студентам научиться выполнять CRUD-операции и работать с
                        реляционными базами данных
                    </p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Разработка приложений с использованием .NET</h2>
                </div>
                <div>
                    <p>Участники курса получат практические навыки работы с платформой .NET, включая создание
                        консольных приложений, веб-приложений с использованием ASP.NET и разработку десктопных
                        приложений</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Тестирование и отладка</h2>
                </div>
                <div>
                    <p>Участники курса узнают о методах тестирования программного обеспечения, включая
                        юнит-тестирование с использованием таких инструментов, как NUnit или MSTest, а также освоят
                        техники отладки и оптимизации кода</p>
                </div>
            </div>
        </div>
        <div class="nastavnik">
            <h1 class="h_main_Info">Ведущий наставник</h1>
            <img src="{{ asset('images/c_sharpe_people.svg') }}" alt="">
            <h2>Павел Мотросов</h2>
            <p>Dысококвалифицированный разработчик на C# с 6-летним опытом работы в области разработки программного
                обеспечения. Алексей специализируется на создании приложений для платформы .NET и имеет опыт работы
                с различными фреймворками</p>
        </div>
        <h2 class="h_main_Info">Отзывы покупателей наших курсов</h2>
    </div>
    <div class="container_for_otzovs">
        @foreach ($rewiews_c as $el) 
            <div class="otzovs">
                <div class="rewiew">
                    <div class="h_in_info">
                        <div class="circle"></div>
                        <h3>{{ $el->name }}</h3>
                    </div>
                    <p class="rewiew_title">{{ $el->message }}</p>
                </div>
            </div>
        @endforeach
        <h1 class="header_otzov">Оставьте отзыв о пройденном курсе</h1>

        @if (Auth::check())

            @if ($errors->any())
                <div class="allert_errors">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="error_name">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/c_sharpe" method="post" class="input_otzov">
                @csrf
                <input type="name" id="name" name="name" value="{{ Auth::user()->name }}" readonly class="name_rewiew_input"><br>
                <label>Отзыв: </label>
                <textarea name="message" id="message"></textarea>
                <button class="btn_otzov" type="submit">Отправить отзыв</button>
            </form>
        @else
            <div class="rewiew_auth">
                <h2 class="rewiew_auth">Что бы оставить отзыв, <a href="/login" class="rewiew_auth">войдите </a>или <a
                        href="/register" class="rewiew_auth">зарагистрируйтесь.</a></h2>
            </div>
        @endif
    </div>
</main>
@endsection