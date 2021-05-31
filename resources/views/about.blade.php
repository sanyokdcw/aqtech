@extends('layouts.main')

@section('content')
<div class="container" style="max-width: 60%; margin: 100px auto;">
{!! setting('stranica-o-nas.text')  !!}
</div>


<style> h1 {text-align:center;} 
ul {
    padding: 0;
  margin: 0;
	list-style: disc;   }

li {
padding-left: 16px;	}
</style>
@endsection
