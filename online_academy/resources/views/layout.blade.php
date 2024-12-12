<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Rubik+Wet+Paint&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Lora:ital,wght@0,400..700;1,400..700&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Oswald:wght@200..700&family=Rubik+Wet+Paint&display=swap"
            rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <title>@yield('title')</title>
    </head>
<body>
<header>
            <div class="container">
                <div class="nav">
                    <div class="logo">
                        <img src="{{asset('images/logo.svg')}}" alt="">
                        <h2><a href="/" style="color: black;">Онлайн-Академия</a></h2>
                    </div>
                    <div class="butons_header">
                        <a href="/auth" class="btn_nav">Войти</a>
                        <a href="/registration" class="btn_nav">Зарегестрироваться</a>
                    </div>
                </div>
            </div>
        </header>
    @yield('main_content')
    <footer>
            <div class="blockfoot">
                <div class="columnfoot1">
                    <div class="logofoot"><img src="{{asset('images/logo_footer.svg')}}" alt=""></div>
                    <div class="textfoot">Свяжитесь с нами для получения дополнительной информации о курсах и возможностях обучения. Мы всегда рады помочь!</div>
                    <div class="socseti"><img src="{{asset('images/social.svg')}}" alt=""></div>
                </div>
                <div class="columnfoot2">
                    <div class="contact">Контакты</div>
                    <div class="info_contact"><span class="img_foot"><img src="{{asset('images/phone.svg')}}" alt=""></span> Phone : 8 800 555335</div>
                    <div class="info_contact"><span class="img_foot"><img src="{{asset('images/email.svg')}}" alt=""></span> Email : contact@info.com</div>
                    <div class="info_contact"><span class="img_foot"><img src="{{asset('images/addres.svg')}}" alt=""></span> Address : Россия, Ульяновск</div>
                </div>
            </div>
            <div class="copyright">Copyright 2024 Онлайн-Академия. Design By <span class="copyr">Онлайн-Акадмемия</span></div>
        </footer>
</body>
</html>