@extends('layouts.main')

@section('content')

    <section class="main-services section-last">
        <div class="pic-tile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pic-tile__title">{{ $page->name }}</h2>
                    </div>
                </div>

                <div class="row">

                    @foreach ($page_contents as $content)
                    <div class="col-lg-6">
                        {{-- <p class="pic-tile__image--title">{{$content->title}}</p> --}}
                        <div class="pic-tile__image">
                            <img class="pic-tile__img" src="{{$content->image}}" alt="">
                        </div>
                        <p class="pic-tile__image--title">{{$content->name}}</p>
                        <div style="width:100%"> 
                            <p>{{$content->text}}</p>
                        </div>
                        <div style="text-align: right;">
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection
