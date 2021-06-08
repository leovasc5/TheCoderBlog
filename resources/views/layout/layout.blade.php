<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/topBar.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <title>TheCoderBlog</title>
    </head>

    <header>
        @yield('topBar')
        <div class="topBar" style="margin:0">
            <a href="http://127.0.0.1:8000" class="active">
                <img src='/img/cretch.png' width='22px'/>TheCoderBlog
            </a>
            <div class="lista">
                <a href="http://127.0.0.1:8000/">Home</a>
                <a href="http://127.0.0.1:8000/criar-partida">Artigos</a>
            </div>
        </div>
    </header>
    <body>
        

        @yield('content')

        @yield('footer')
        <div class="footer-basic">
            <footer>
                <div class="social">
                    <a href="https://github.com/leovasc5/"><i class="icon ion-social-github"></i></a>
                    <a href="https://www.linkedin.com/in/leonardo-vasconcelos-paulino-7a0b41200/"><i class="icon ion-social-linkedin"></i></a>
                    <a href="https://www.twitter.com/leovasc5/"><i class="icon ion-social-twitter"></i></a>
                    <a href="https://www.instagram.com/leovasc5/"><i class="icon ion-social-instagram"></i></a>
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="mailto: leovasc5@hotmail.com">E-mail</a></li>
                </ul>
                <p class="copyright">Leonardo Vasconcelos Paulino - 2021</p>
            </footer>
        </div>
    
        <script src="/js/topBar.js"></script>
    </body>
</html>
