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
        <link rel="stylesheet" href="{{ asset('css/auth_registration.css') }}">
    <title>Авторизация</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img src="{{asset('images/logo.svg')}}" alt="logo">
                    <h2><a href="/" style="color: black;">Онлайн-Академия</a></h2>
                </div>
                <div class="butons_header">
                    <a href="/login" class="btn_nav">Войти</a>
                    <a href="/register" class="btn_nav">Зарегестрироваться</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <h1 class="title">Вход</h1>
        <div class="auth_wrap">
                <form action="{{ url('login') }}" method="POST"class="form_style">
                @csrf
                    <label for="email">Почта</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Пароль</label><br>
                    <input type="password" id="password" name="password" required><br>
                    <button type="submit" class="btn_auth">Войти</button>
                </form>
                <h2 class="reg">Нет аккаунта? <a href="/register" class="reg_a">Зарегестрируйтесь!</a></h2>
        </div>
    </main>
</body>
</html>