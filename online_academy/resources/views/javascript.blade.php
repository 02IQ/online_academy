@extends('layout')
<?php use Illuminate\Support\Facades\Auth;?>
<head>
    <link rel="stylesheet" href="{{ asset('css/javascript.css') }}">
    @section('title')Курс "JavaScript-разработчик"@endsection
</head>

@section('main_content')
<main>
    <div class="container">

        <div class="green_bg">
            <div class="flex_in_rect">
                <div class="txt_in_rect">
                    <h1 class="h_in_rect">Курс "JavaScript-разработчик"</h1>
                    <p style="width: 820px;">Основная цель курса - практика изучения JavaScript на реальных примерах для
                        frontend-разработчиков. Каждый теоретический блок заканчивается практикой. Создадите
                        реальные проекты в процессе прохождения курса.</p>
                    <a href="#"><button class="btn_in_rect">Записаться</button></a>
                </div>
                <img style="margin-left: 10px;" src="{{asset('images/javascript_main.svg')}}" alt="chel">
            </div>
        </div>

        <h1 class="h_main_Info">На курсе вы научитесь</h1>

        <div class="main_info_curs">
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2 style="margin-left: 20px;">Объектно-ориентированное программирование</h2>
                </div>
                <div>
                    <p>Учащиеся освоят концепции ООП, такие как наследование, инкапсуляция и полиморфизм</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Работа с библиотеками и фреймворками</h2>
                </div>
                <div>
                    <p>Курс научит использовать популярные библиотеки и фреймворки, такие как Spring и Hibernate,
                        для разработки приложений</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Практические навыки разработки приложений</h2>
                </div>
                <div>
                    <p>Участники курса получат опыт в разработке реальных проектов, что поможет им применить
                        теоретические знания на практике</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Основы JavaScript</h2>
                </div>
                <div>
                    <p>Вы изучите синтаксис языка, переменные, типы данных, функции и основы работы с объектами. Это
                        создаст прочную базу для дальнейшего изучения</p>
                </div>
            </div>
        </div>

        <div class="nastavnik">
            <h1 class="h_main_Info">Ведущий наставник</h1>
            <img src="{{asset('images/javascript_people.svg')}}" alt="">
            <h2>Валентин Сорокин</h2>
            <p>Высококвалифицированный разработчик на JavaScript с 4-летним опытом работы в области веб-разработки.
                Алексей обладает широкими знаниями в современных фреймворках, таких как React и Vue.js, и имеет опыт
                создания интерактивных пользовательских интерфейсов</p>
        </div>
        <h2 class="h_main_Info">Отзывы покупателей наших курсов</h2>
    </div>


    <div class="container_for_otzovs">
        @foreach ($rewiews_js as $el) 
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
            <form action="/javascript" method="post" class="input_otzov">
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