@extends('layouts.main')

@section('content')

    <section class="main-banner banner-contact">
        <img src="/images/contacts-bg.jpg" alt="" class="main-banner__background">
        <div class="container">
            <div class="main-banner__block">
                <h1 class="main-banner__block--title">Свяжитесь с нами!</h1>
                <form class="main-banner__form" action="/request" method="POST">
                    @csrf
                    <div class="main-banner__input--block">
                        <h4 class="main-banner__input--title">Ваше имя</h4>
                        <input class="main-banner__input--input" name="name" type="text" placeholder="Турсын Алибекович">
                    </div>

                    <div class="main-banner__input--block">
                        <h4 class="main-banner__input--title">Контактный телефон</h4>
                        <input class="main-banner__input--input" id="phone__number" name="number" type="text" placeholder="+7 777 7777 77 77">
                    </div>

                    <div class="main-banner__input--block">
                        <h4 class="main-banner__input--title">Почта</h4>
                        <input class="main-banner__input--input" name="email" type="email" placeholder="info@a-lux.kz">
                    </div>

                    <div class="main-banner__input--block">
                        <h4 class="main-banner__input--title">Сообщение</h4>
                        <textarea class="main-banner__input--input" name="comment" type="text" placeholder="Чем мы можем вам помочь?"></textarea>
                    </div>
                    <input class="main-banner__input--submit" type="submit">
                </form>
            </div>
        </div>
    </section>

    <section class="our-contacts">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="our-contacts__item">
              <h4 class="our-contacts__item--title">Наш адрес:</h4>
              <a href="" class="our-contacts__item--link">{{setting('kontakty.adress')}}</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="our-contacts__item">
              <h4 class="our-contacts__item--title">Наша почта:</h4>
              <a href="mailto:info@aqtechno.com" class="our-contacts__item--link">{{setting('kontakty.email')}}</a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="our-contacts__item">
              <h4 class="our-contacts__item--title">Наши контакты:</h4>
              <a href="tel:+7 701 777 7879" class="our-contacts__item--link">{{setting('kontakty.number')}}</a>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
