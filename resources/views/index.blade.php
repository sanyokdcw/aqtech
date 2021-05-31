@extends('layouts.main')

@section('content')


<section id="one_sec">
<div class="container-fluid">
<div class="container">
  <div class="row">
    <div class="col-md-6">
        <h1 class="one_sec_text mob_mt20">{{setting('glavnaya-o-nas.text')}}</h1>
        <p class="one_sec_minitext mt30">{!! setting('glavnaya-o-nas.desc') !!}</p>


    </div>
  </div>


  </div>
</div>
</section>

<section>
  <div class="container">

    <div class="row" id="miniblock">
        @foreach($features as $feature)
        @if($loop->index == 1)
      <div class="col-xl-4 col-12 mob_mt20 text-center rel_block">
          <img src="/images/line.svg" height="190px" class="d-none d-xl-block" style="position: absolute; right:10px">
          <img src="/images/line.svg" height="190px" class="d-none d-xl-block" style="position: absolute; left:10px">

          <img src="/storage/{{$feature->image}}">
        <h2 class="mini_block_header">{{$feature->name}}</h2>
        <p class="mini_block_text mt15">{{$feature->text}}</p>
      </div>
        @else
        <div class="col-xl-4 col-12 mob_mt20 text-center">
            <img src="/storage/{{$feature->image}}">
            <h2 class="mini_block_header">{{$feature->name}}</h2>
            <p class="mini_block_text mt15">{{$feature->text}}</p>
        </div>
        @endif
    @endforeach

  </div>
</section>


<section id="two_sec">

  <div class="container-fluid">
<div class="row">
  <div class="col-xl-6 col-12" >
    <div class="level_1">
    <img src="/storage/{{$block1->image}}" class="w-100">
      </div>
    <div class="level_2">
    <img src="/images/cube.svg" style="position: absolute; bottom: -22px; right:-22px; ">
    </div>
  </div>

  <div class="col-xl-5 mt-5 col-12">
    <div class="padding_left">
    <h1 class="two_header_text">{!! $block1->name !!}</h1>

      <div class="lists">
        {!!$block1->text!!}
      </div>

  <a href="/houses" class="btn_green btn btn-xl mt31"><div class="pt5 bold">Подробнее</div></a>
</div>
</div>
</div>


</div>


<div class="container mt100">
  <div class="row text-center">
      @foreach($imageBlock1 as $img)
    <div class="col-xl-4 col-lg-4 col-12">
      <img src="/storage/{{$img->image}}">

      <p class="mini_block_text mt15">{{$img->name}}</p>
    </div>
      @endforeach

  </div>
</div>
</section>

<section id="three_sec">
  <div class="container-fluid">
    <div class="row">
    <div class="col-xl-2 mt-5"></div>
    <div class="col-xl-4 col-lg-12 mt-5">
      <h1 class="three_header_text">{!! $block2->name !!}</h1>

      <span class="three_block_text">
{!! $block2->text !!}

</span>

    <a href="/business" target="_blank" class="btn_green btn btn-xl mt31"><div class="pt5 bold">Подробнее</div></a>
  </div>

    <div class="col-xl-6 col-lg-12" >
      <div class="level_1 mob_mt20">
      <img src="/storage/{{$block2->image}}" width="100%">
        </div>
      <div class="level_2">
      <img src="/images/cube.svg" style="position: absolute; bottom: -18px; left:-18px; ">
      </div>
    </div>
  </div>
</div>

</div>
  <div class="container mt100">
    <div class="row">
        @foreach($imageBlock2 as $img)
      <div class="col-xl-4">
       <div class="row">

        <div class="col-xl-2 col-2">
            <img src="/storage/{{$img->image}}" width="49px" height="49px">
        </div>
        <div class="col-xl-9 col-9">
          <p class="mini_block_text">{{$img->name}} </p>
        </div>
       </div>
      </div>
@endforeach
    </div>
</section>



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
<div class="li-content mt100">
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 class="info-list__title">7  ПРИЧИН ПОЧЕМУ ЛУЧШЕ ПРИМЕНЯТЬ ЛИТИЙ-ИОННЫЕ АККУМУЛЯТОРЫ
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

  <div class="container mt100">
    <div class="row text-center">
        @foreach($imageBlock3 as $img)
      <div class="col-xl-4">
        <img src="/storage/{{$img->image}}" width="380px" height="215px" class="w-100">
        <p class="tecnology_header mt20"> {{$img->name}}</p>
      </div>
        @endforeach
    </div>
  </div>

</section>




@endsection
