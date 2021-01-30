@extends('layout')
@php
    $title = 'エンジニア';
    $description = '';
@endphp
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="{{$description}}">
<meta name="keywords" content="">
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:description" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="{{$title}}" />
<meta property="og:locale" content="ja_JP" />
<meta name="twitter:card" content="">
<title>{{$title}}</title>
@section('content')
<header class="header">
  <div class="wrap">
    <p class="logo"><a href="#"><img src="{{ asset('/img/isa.png') }}" alt="ロゴ"></a></p>

    <nav class="pc-gnav">
      <ul class="pc-gnav__list">
        <li class="pc-gnav__item"><a href="#">プロフィール</a></li>
        <li class="pc-gnav__item"><a href="#">お問い合わせ</a></li>
      </ul>
    </nav>
    <!-- /pc-gnav -->

    <div id="menu-btn" class="menu-btn">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div><!-- /wrap -->
</header>

<nav id="sp-gnav" class="sp-gnav">
  <div id="close-btn" class="close-btn">
    <span></span>
    <span></span>
  </div>
  <ul class="sp-gnav__list wrap">
    <li class="sp-gnav__item"><a href="#">プロフィール</a></li>
    <li class="sp-gnav__item"><a href="#">お問い合わせ</a></li>
  </ul>
</nav>
<!-- /sp-gnav -->


{{-- <img class="img-mv" src="{{ asset('/img/aaa.png') }}" alt=""> --}}
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ mix('js/jquery.js') }}"></script>
<script>
  console.log("aaaa")
</script>
@endsection
