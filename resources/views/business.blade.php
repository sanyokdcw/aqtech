@extends('layouts.main')

@section('content')

  <section class="main-banner ">
    <img src="/images/buisness.jpg" alt="" class="main-banner__background">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="main-banner__title">{{setting('dlya-biznesa.text')}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <p class="main-banner__description">{{setting('dlya-biznesa.desc')}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

        </div>
      </div>
    </div>
  </section>

  <section class="use-functions">

      @foreach($business as $step)

      @if($loop->even)
      <div class="info-list many-items-odd">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <h2 class="info-list__title">{{$step->name}}</h2>
                  </div>
              </div>
              <div class="row reverse-item">
                  <div class="col-xl-7">
                      <div class="info-list__bg">
                          <img class="info-list__bg--img" src="/storage/{{$step->image}}" alt="">
                      </div>
                  </div>
                  <div class="col-xl-5">
                      <div class="lists">
                          {!!$step->text!!}
                      </div>
                  </div>
              </div>
          </div>
      </div>
      @else
      <div class="info-list many-items-odd">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <h2 class="info-list__title">{{$step->name}}</h2>
                  </div>
              </div>
              <div class="row reverse-item">
                  <div class="col-xl-7">
                      <div class="info-list__bg">
                          <img class="info-list__bg--img" src="/storage/{{ $step->image }}" alt="">
                      </div>
                  </div>
                  <div class="col-xl-5">
                      <div class="lists">
                          {!!$step->text!!}
                      </div>
                  </div>
              </div>
          </div>
      </div>
      @endif
      @endforeach

<section id="four_sec">
  <div class="container-fluid">
    <div class="row">
    <div class="col-xl-2"></div>
    <div class="col-xl-5 mt-5">
      <h1 class="two_header_text">{!!$block3->name!!}</h1>

        <div class="lists">
            {!!$block3->text!!}
        </div>
    <a href="/business" target="_blank" class="btn_green btn btn-xl mt31"><div class="pt5 bold">Подробнее</div></a>
    </div>

    <div class="col-xl-5">
      <div class="level_1 mob_mt20">
      <img src="/storage/{{$block3->image}}" width="100%">
        </div>
      <div class="level_2">
      <img src="/images/cube.svg" style="position: absolute; bottom: -18px; left:-18px; ">
      </div>
    </div>
  </div>
  </div>
</div>

  <section class="accums section-last">

    <div class="li-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="info-list__title">7  ПРИЧИН ПОЧЕМУ ЛУЧШЕ ПРИМЕНЯТЬ ЛИТИЙ-ИОННЫЕ АККУМУЛЯТОРЫ</h2>
          </div>
        </div>
        <div class="row">
            @foreach($reasons as $reason)
          <div class="col-lg-6">
              <div class="lists">
                <li>
                    <div class="info-list__item li-content__item">
                      <h4>{{$reason->name}}</h4>
                      <p style="padding-left:0"> {{$reason->text}}
                             </p>
                    </div>
                </li>
              </div>
          </div>
            @endforeach
        </div>


      </div>
    </div>
  </section>
@endsection
