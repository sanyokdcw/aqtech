<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="AQtech">
    <title>AQtech</title>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(76570633, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/76570633" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EJX7PLVTJF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EJX7PLVTJF');
</script>
    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-xl navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="/" target="_blank"><img src="/images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color:#000;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-xl-0">
          </ul>
          <ul class="navbar-nav ml-auto mb-2 mb-xl-0">
            <li class="nav-item p-3">
              <a class="nav-link active menu_text" aria-current="page" href="/"">{{  __('content.main')  }}</a>
            </li>
            <li class="nav-item p-3">
              <a class="nav-link menu_text" href="/services" >{{  __('content.services')  }}</a>
            </li>
            <li class="nav-item p-3">
              <a class="nav-link menu_text" href="/houses" >{{  __('content.houses')  }}</a>
            </li>
            <li class="nav-item p-3">
              <a class="nav-link menu_text" href="/business">{{  __('content.business')  }}</a>
            </li>
            	         	            <li class="nav-item p-3">
              <a class="nav-link menu_text" href="/articles">{{  __('content.articles')  }}</a>
            </li>
            <li class="nav-item p-3">
              <a class="nav-link menu_text" href="/contacts">{{  __('content.contact')  }}</a>
            </li>

            <li class="nav-item p-3">
                <a class="nav-link menu_text" 
                href="/setlocale/ru"
                @if(session('locale') == 'ru')
                style="color: black !important;"
                @endif
                >RU</a>
            </li>
            <li class="nav-item pt-3">
                <a class="nav-link active menu_text"
                href="/setlocale/kz"
                @if(session('locale') == 'kz')
                style="color: black !important;"
                @endif>KZ</a>
            </li>            <li class="nav-item p-3">
                <a class="nav-link menu_text"
                href="/setlocale/en"
                @if(session('locale') == 'en')
                style="color: black !important;"
                @endif>EN</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


@yield('content')

    <section>

        <div class="container padding_left" id="footer">
      <div class="row">
        <div class="col-md-12 mt100">
          <h1 class="footer_header">{{  __('content.more')  }}</h1>
          <p class="footer_text mt31">{{  __('content.title')  }}</p>
          <a href="/contacts" target="_blank" class="btn_green btn btn-xl mt15"><div class="pt5 bold">{{  __('content.button')  }}</div></a>
        </div>
      </div>


      <div class="row mt100">
        <div class="col-xl-4">
          <a href="/about" target="_blank" class="nav-link active">{{  __('content.about')  }}</a>
          <a href="/houses"  class="nav-link footer_menu">{{  __('content.houses')  }}</a>
        </div>
        <div class="col-xl-4">
          <a href="/services"  class="nav-link footer_menu">{{  __('content.services')  }}</a>
          <a href="/business"  class="nav-link footer_menu">{{  __('content.business')  }}</a>
        </div>
        <div class="col-xl-4">
                  <a href="/articles" class="nav-link footer_menu">{{  __('content.articles')  }}</a>
          <a href="/contacts" class="nav-link footer_menu">{{  __('content.contact')  }}</a>
        </div>
        @foreach ($pages->chunk(2) as $chuk)
        <div class="col-xl-4">
          @foreach ($chuk as $thomas_shelby)
          <a href="/page/{{ $thomas_shelby->id }}" class="nav-link footer_menu">{{ $thomas_shelby->name }}</a>
          @endforeach
        </div>
        @endforeach
      </div>
      </div>


      </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
     crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
        <script src="../../public/js/bootstrap.bundle.min.js"></script>
        <script src="../../public/js/main.js"></script>
  </body>
</html>
