<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlowerAdvisor</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/844315f7aa.js" crossorigin="anonymous"></script>
</head>
<body>

    <main>
        <nav>
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="nav__brand">
            <ul class="nav__menu">
                <li class="nav__item"><a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/id1185232806" class="nav__link" target="_blank"><i class="fa-brands fa-apple fa-2xl"></i></a></li>
                <li class="nav__item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="button__logout">Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <div class="main__content">
            <h1 class="main__title">Beautiful day with<br />Beatiful <span>Flowers</span></h1>
            <p class="main__slogan">Flowers are always the best gift for all important occasions</p>
            <div class="main__button">
                <div class="button__copy">
                    <p id="copyText">HALLOW 10</p>
                    <button title="Copy to clipboard" id="buttonCopy"><i class="fa-solid fa-clipboard"></i></button>
                </div>
                <a href="https://www.floweradvisor.com.ph/flowersphilippines" class="button__cta" target="_blank">Shop Now</a>
            </div>
        </div>
        <div class="main__image">
            <img src="https://wallpaperaccess.com/full/2709463.jpg" alt="wallpaper">
        </div>
        <footer>
            <a href="https://www.floweradvisor.com.ph/" target="_blank">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="footer__image">
            </a>
            <p class="footer__text">Copyright &copy; 2022 - PT Aldmic Indonesia (FlowerAdvisor)</p>
        </footer>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
