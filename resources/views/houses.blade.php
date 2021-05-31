@extends('layouts.main')

@section('content')

  <section class="main-banner ">
    <img src="/images/houses.jpg" alt="" class="main-banner__background">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="main-banner__title"> {{setting('castnym-domam.text')}} </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <p class="main-banner__description">{{setting('castnym-domam.desc')}}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

        </div>
      </div>
    </div>
  </section>

  <section class="trouble-electry">
    <div class="info-list">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="info-list__title">{{ $firstBlock->name }}</h2>
          </div>
          <div class="col-xl-7">
            <div class="info-list__bg">
              <img class="info-list__bg--img" src="/storage/{{ $firstBlock->image }}" alt="">
            </div>
          </div>
          <div class="col-xl-5">
            <div class="lists">
                  {!!$firstBlock->text!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="system-electry">
    <div class="info-items">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="info-items__title">Комплексные системы
              бесперебойного электроснабжения</h2>
          </div>
        </div>
        <div class="row">
           @foreach($features as $feature)
              <div class="col-lg-6">
                <div class="info-items__item">
                  <img class="info-items__item--img" src="/storage/{{ $feature->image }}" alt="">
                  <p class="info-items__item--text">{{ strip_tags(htmlspecialchars_decode($feature->text)) }}</p>
                </div>
              </div>
           @endforeach
        </div>
      </div>
    </div>
  </section>

  <section class="services section-last">

    @foreach($steps as $step)

    @if($loop->odd)
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
              @if($step->image_description != null)
            <div class="info-list__content"><p>{{$step->image_description}}</p></div>
@endif

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
        @if($step->image_description != null)
            <div class="info-list__content bottom"><p>{{$step->image_description}}</p></div>
@endif

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
</section>


@endsection
