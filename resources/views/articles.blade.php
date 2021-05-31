@extends('layouts.main')

@section('content')

    <section class="main-services section-last">
        <div class="pic-tile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pic-tile__title">Наши Новости</h2>
                    </div>
                </div>

                <div class="row">

                    @foreach($articles as $article)

                    <div class="col-lg-6">
                        <div class="pic-tile__image">
                            <img class="pic-tile__img" src="/storage/{{$article->image}}" alt="">
                        </div>
                        <p class="pic-tile__image--title">
                            {{$article->name}}
                        </p>
                        <div style="width:100%"> 
                        <p>{{$article->text}}</p>
                        </div>
                        <div style="text-align: right;">
                        	<p>Дата публикации: {{ $article->created_at->format('d-m-Y') }}</p>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
