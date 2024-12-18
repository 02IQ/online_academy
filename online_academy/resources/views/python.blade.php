@extends('layout')
<?php use Illuminate\Support\Facades\Auth;?>
<head>
    <link rel="stylesheet" href="{{ asset('css/python.css') }}">
    @section('title')Курс "Python-разработчик"@endsection
</head>

@section('main_content')
<main>
    <div class="container">
        <div class="green_bg">
            <div class="flex_in_rect">
                <div class="txt_in_rect">
                    <h1 class="h_in_rect">Курс "Python-разработчик"</h1>
                    <p>Освоите бэкенд-разработку - с нуля за 10 месяцев. Будете много практиковаться, получите
                        востребованную IT-профессию и реальный опыт.</p>
                    <a href="#"><button class="btn_in_rect">Записаться</button></a>
                </div>
                <img src="{{asset('images/python_main.svg')}}" alt="chel">
            </div>
        </div>

        <h1 class="h_main_Info">На курсе вы научитесь</h1>

        <div class="main_info_curs">
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Писать код на Python и работать с Flask</h2>
                </div>
                <div>
                    <p>Изучите синтаксис языка и познакомитесь с фреймворком Flask, разработаете свои первые проекты
                        и
                        добавите их в портфолио</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Работать с Git и SQL</h2>
                </div>
                <div>
                    <p>Сможете самостоятельно управлять базами данных и версиями проекта</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Использовать расширенные возможности Python</h2>
                </div>
                <div>
                    <p>Познакомитесь с объектно-ориентированным программированием, научитесь применять серверный
                        фреймворк Django и станете сильным backend-разработчиком</p>
                </div>
            </div>
            <div class="cont_info">
                <div class="h_in_info">
                    <div class="circle"></div>
                    <h2>Применять знания в разных направлениях</h2>
                </div>
                <div>
                    <p>Сможете освоить одну или все специализации: изучить Javascript и стать
                        fullstack-разработчиком, углубиться в работу с большими данными или развиться в Devops</p>
                </div>
            </div>
        </div>

        <div class="nastavnik">
            <h1 class="h_main_Info">Ведущий наставник</h1>
            <img src="{{asset('images/pythone_people.svg')}}" alt="">
            <h2>Григорий Моисеенко</h2>
            <p>Более 8 лет в программировании. Начинал с PHP в маленькой веб-студии. Сейчас — Python-разработчик
                рекламной сети Mail.ru Group. Имеет широкий круг профессиональных интересов: от построения
                распределенных систем до машинного обучения</p>
        </div>
        <h2 class="h_main_Info">Отзывы покупателей наших курсов</h2>
    </div>

    <div class="container_for_otzovs">
        @foreach ($rewiews_p as $el) 
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
            <form action="/python" method="post" class="input_otzov">
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