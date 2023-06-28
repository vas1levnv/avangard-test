<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.min.css">
    <link rel="stylesheet" href="{{ asset('/css/trix.css') }}">
</head>
<body>
<div class="app">
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <a class="header-logo" href="/">
                    <img src="./assets/img/logo.png" alt="logo">
                </a>
                <button class="header-btn">
                    <span></span>
                </button>
                <div class="header-menu">
                    <div class="header-menu-list">
                        <div class="header-menu-item"><a href="/posts">КОРПОРАТИВНЫМ КЛИЕНТАМ</a></div>
                        <div class="header-menu-item"><a href="#">ЧАСТНЫМ КЛИЕНТАМ</a></div>
                        <div class="header-menu-item"><a href="#">КОМПАНИЯ</a></div>
                        <div class="header-menu-item"><a href="#">НОВОСТИ</a></div>
                        <div class="header-menu-item active"><a href="#">ПОДДЕРЖКА</a></div>
                    </div>
                    <div class="header-menu-language">
                        <div class="header-menu-language-item"><a href="#">Рус</a></div>
                        <div class="header-menu-language-item"><a href="#">Eng</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu">
        <div class="container">
            <div class="mobile-menu-wrapper">
                <div class="mobile-menu-language">
                    <div class="mobile-menu-language-item"><a href="#">Рус</a></div>
                    <div class="mobile-menu-language-item"><a href="#">Eng</a></div>
                </div>
                <div class="mobile-menu-list">
                    <div class="mobile-menu-item"><a href="/posts">КОРПОРАТИВНЫМ КЛИЕНТАМ</a></div>
                    <div class="mobile-menu-item"><a href="#">ЧАСТНЫМ КЛИЕНТАМ</a></div>
                    <div class="mobile-menu-item"><a href="#">КОМПАНИЯ</a></div>
                    <div class="mobile-menu-item"><a href="#">НОВОСТИ</a></div>
                    <div class="mobile-menu-item active"><a href="#">ПОДДЕРЖКА</a></div>
                </div>
            </div>
        </div>
    </div>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-wrapper row">
                <ul class="footer-menu col-xl-6">
                    <li class="footer-menu-item"><a href="#">Компания</a></li>
                    <li class="footer-menu-item"><a href="#">Вакансии</a></li>
                    <li class="footer-menu-item"><a href="#">Контакты</a></li>
                    <li class="footer-menu-item"><a href="#">Раскрытие информации</a></li>
                </ul>
                <div class="footer-content col-xl-6">
                    <div class="footer-logo"><img src="./assets/img/logo.png" alt="logo"></div>
                    <div class="footer-content-description">
                        Общество с ограниченной ответственностью «АТОМАЙЗ» 1111111, Москва, Пушкина, дом 1, офис 1, этаж
                        1,
                        Кабинет 1А, ОГРН: 01010101010101. Лицензия Банка России № ХХХ от 00.00.0000
                    </div>
                    <div class="footer-privacy">
                        <a href="#">Политика конфедициальности</a>
                    </div>
                    <div class="footer-copyright">
                        2021 © Atomyze
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="./assets/js/trix.js')">
<script src="./assets/js/app.js"></script>
</body>
</html>
