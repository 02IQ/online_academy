@extends('layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/java.css') }}">
    @section('title')Курс "Java-разработчик"@endsection
</head>


@section('main_content')
<main>
    <div class="container">

        <div class="green_bg">
            <div class="flex_in_rect">
                <div class="txt_in_rect">
                    <h1 class="h_in_rect">Курс "Java-разработчик"</h1>
                    <p style="width: 820px;">Вы научитесь программировать с нуля на самом популярном языке
                        программирования Java, добавите сильные проекты к себе в портфолию и станете востребованным
                        специалистом для любой Digital-компании</p>
                    <a href="#"><button class="btn_in_rect">Записаться</button></a>
                </div>
                <img style="margin-left: 20px;" src="{{asset('images/java_main.svg')}}" alt="chel">
            </div>
        </div>

        <h1 class="h_main_Info">На курсе вы научитесь</h1>

        <div class="main_info_curs">
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2 style="margin-left: 20px;">Основы программирования на Java</h2>
                </div>
                <div>
                    <p>Курс предоставит знания о синтаксисе языка, базовых конструкциях и принципах работы с
                        переменными, типами данных и управляющими структурами</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Работа с библиотеками и фреймворками</h2>
                </div>
                <div>
                    <p>Курс познакомит с популярными библиотеками и фреймворками, такими как Spring и Hibernate, что
                        поможет в разработке веб-приложений
                    </p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Объектно-ориентированное программирование</h2>
                </div>
                <div>
                    <p>Вы узнаете, как использовать ООП-подход, включая классы, объекты, наследование, полиморфизм и
                        инкапсуляцию</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Разработка и тестирование приложений</h2>
                </div>
                <div>
                    <p>Курс познакомит с популярными библиотеками и фреймворками, такими как Spring и Hibernate, что
                        поможет в разработке веб-приложений</p>
                </div>
            </div>
        </div>

        <div class="nastavnik">
            <h1 class="h_main_Info">Ведущий наставник</h1>
            <img src="{{asset('images/java_people.svg')}}" alt="">
            <h2>Владимир Попов</h2>
            <p>Опытный разработчик на Java с 5-летним стажем работы в сфере разработки программного обеспечения.
                Елена специализируется на разработке корпоративных приложений и веб-сервисов, обладает знаниями в
                области Spring и Hibernate</p>
        </div>
        <h2 class="h_main_Info">Отзывы покупателей наших курсов</h2>
    </div>


    <div class="container_for_otzovs">
        @foreach ($rewiews_j as $el) 
            <div class="otzovs">
                <div class="rewiew">
                    <div class="h_in_info">
                        <div class="circle"></div>
                        <h3>Иван Иванов</h3>
                    </div>
                    <p>{{ $el->message }}</p>
                </div>
            </div>
        @endforeach
        <h1 class="header_otzov">Оставьте отзыв о пройденном курсе</h1>
        @if ($errors->any())
            <div class="allert_errors">
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="error_name">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/java" method="post" class="input_otzov">
            @csrf
            <label>Ваше имя:</label>
            <p id="user_name">Иван Иванов</p>
            <label>Отзыв: </label>
            <textarea name="message" id="message"></textarea>
            <button class="btn_otzov" type="submit">Отправить отзыв</button>
        </form>
    </div>
</main>

@endsection