<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/topBar.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/css/scrollBar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/img/icons/icon2.svg">
        <title>TheCoderBlog</title>
    </head>

    <header>
        @yield('topBar')
        <div class="topBar" style="margin:0" title="TheCoderBlog">
            <a href="http://127.0.0.1:8000" class="active">
                <img src='/img/icons/icon3.svg' width='45px'/>
                <br>
                <label>TheCoderBlog</label>
            </a>
            <div class="lista">
                <a href="http://127.0.0.1:8000/">Home</a>
                <a href="http://127.0.0.1:8000/criar-partida">Artigos</a>
                <a href="http://127.0.0.1:8000/criar-partida">Discussão</a>
                <a href="http://127.0.0.1:8000/criar-partida">Vídeos</a>
                <a href="http://127.0.0.1:8000/criar-partida">Projetos</a>
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
