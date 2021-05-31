@extends('layouts.main')

@section('content')
    <section class="main-banner ">
        <img src="/images/partner.jpg" alt="" class="main-banner__background">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="main-banner__title">{{setting('uslugi.text')}}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="main-services section-last">
        <div class="pic-tile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pic-tile__title">Наши услуги</h2>
                    </div>
                </div>

                <div class="row">

                    @foreach($services as $service)

                    <div class="col-lg-6">
                        <div class="pic-tile__image">
                            <img class="pic-tile__img" src="/storage/{{$service->image}}" alt="">
                        </div>
                        <p class="pic-tile__image--title">
                            {{$service->name}}
                        </p>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
