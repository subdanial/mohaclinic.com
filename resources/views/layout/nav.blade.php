<?php
$statics = App\Statics::first();
?>


<nav class="d-lg-none navbar navbar-expand-lg fixed-top navbar-dark bg-blue z-10">
  <button class="btn text-white nav-open" type="button" data-menu="main-menu">
    <i class="fa fa-bars align-middle" aria-hidden="true"></i>
  </button>
  <a class="navbar-brand p-0 m-0  small" href="#"> کلینیک تخصصی دندان پزشکی مها </a>
</nav>

<div class="h-100  w-100 position-fixed bg-dark nav-full ">
  <div class="d-flex h-100  w-100 justify-content-between align-items-center">
    <div class="mx-auto w-100">
      <div class="logo w-50 w-md-30 mx-auto font-weight-bold text-center pb-2 text-blue bg-white">
        <img src="{{asset('svg/logoblue.svg')}}" height="115px" class="mx-auto w-auto d-block p-3" alt="">
        کلینیک تخصصی دندان پزشکی مها
      </div>

      <div class="mt-3 text-center display-7 w-100 "><a class="text-white nav-full-link "
          href="{{route('index')}}">خانه</a></div>
      <div class="mt-3 text-center display-7 w-100 "><a class="text-white nav-full-link"
          href="{{route('about.index')}}">درباره ما</a></div>
      <div class="mt-3 text-center display-7 w-100 "><a class="text-white nav-full-link"
          href="{{route('gallery.index')}}">گالری تصاویر</a></div>
      <div class="mt-3 text-center display-7 w-100 "><a class="text-white nav-full-link"
          href="{{route('teammate.index')}}">معرفی همکاران</a></div>
      <div class="mt-3 text-center display-7 w-100 "><a class="text-white nav-full-link"
          href="{{route('blog.index')}}">اخبار کلینیک</a></div>
      <div class="mt-3 text-center display-7 w-100 "><a class="text-white nav-full-link"
          href="{{route('contact.index')}}">ارتباط باما</a></div>
    </div>
  </div>
  <div class="nav-close position-absolute text-white pointer display-6" style="top:5px;right:15px;">&times;</div>

</div>

<nav class="desktop-navbar d-none d-lg-block">
  <div class="container">
    <div class="d-flex justify-content-between">
      <ul class="nav ">
        <li class=""><a href="{{route('index')}}"><img src="{{asset('svg/logoblue.svg')}}" class="desktop-navbar-logo ml-5 w-auto"
              alt=""></a></li>
        <li class="nav-item "><a href="{{route('index')}}">خانه</a></li>
        <li class="nav-item {{ (request()->routeIs('about.index')) ? 'active' : '' }}"><a
            href="{{route('about.index')}}">درباره ما</a></li>
        <li class="nav-item {{ (request()->routeIs('gallery.index')) ? 'active' : '' }} "><a
            href="{{route('gallery.index')}}">گالری تصاویر</a></li>
        <li class="nav-item {{ (request()->routeIs('teammate.index')) ? 'active' : '' }}"><a
            href="{{route('teammate.index')}}">معرفی همکاران</a></li>
        <li
          class="nav-item {{ (request()->routeIs('post.show')) ? 'active' : '' }}    {{ (request()->routeIs('blog.index')) ? 'active' : '' }}">
          <a href="{{route('blog.index')}}">اخبار کلینیک</a></li>
        <li class="nav-item {{ (request()->routeIs('contact.index')) ? 'active' : '' }}"><a
            href="{{route('contact.index')}}">ارتباط باما</a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item pl-0"> <a class="nav-item" href="#"> {{$statics->phone}} <img
              src="{{asset('svg/phoneblue.svg')}}" height="28px" class="w-auto"alt=""></a></li>
      </ul>
    </div>
  </div>
</nav>
