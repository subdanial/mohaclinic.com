@extends('layout.app')
@section('content')
<main data-barba="container" data-barba-namespace="home">
  {{-- @include('layout.nav') --}}
  <section id="home">
    <div id="hero" class="bg-green">
      <div>
        <img src="img/logo.png" id="logo">
        <div class="display-7 title text-blue text-center">{{$statics->hero}}</div>
      </div>
    </div>
    <div id="icons" class="d-flex">
      <div class="container w-80  d-flex align-items-center">
        <div class="row mx-auto">
     
          <div class="col-4 p-0 mb-3"><a href="{{route('about.index')}}">
              <img src="svg/herth.svg" class="d-block mx-auto w-auto  ">
              <span class="text-blue text-center mx-auto d-block">درباره ما</span></a>
          </div>
          <div class="col-4 p-0 mb-3"><a href="{{route('gallery.index')}}">
            <img src="svg/tooth.svg" class="d-block mx-auto w-auto  ">
            <span class="text-blue text-center mx-auto d-block">گالری تصاویر</span></a>
        </div>
          <div class="col-4 p-0 mb-3"><a href="{{route('teammate.index')}}">
              <img src="svg/nurse.svg" class="d-block mx-auto w-auto  ">
              <span class="text-blue text-center mx-auto d-block">معرفی همکاران</span></a>
          </div>
          <div class="col-4 p-0 mb-3"><a href="{{route('blog.index')}}">
              <img src="svg/blog.svg" class="d-block mx-auto w-auto ">
              <span class="text-blue pt-1 text-center mx-auto d-block">وبلاگ</span></a>
          </div>
          <div class="col-4  p-0 mb-3"><a target="_blank" href="http://instagram.com/moha.clinic">
              <img src="svg/insta.svg" class="d-block mx-auto w-auto  ">
              <span class="text-blue text-center mx-auto d-block">اینستاگرام</span></a>
          </div>
          <div class="col-4 p-0 mb-3"><a href="{{route('contact.index')}}">
              <img src="svg/call.svg" class="d-block mx-auto w-auto  ">
              <span class="text-blue text-center mx-auto d-block">تماس</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
  @endsection