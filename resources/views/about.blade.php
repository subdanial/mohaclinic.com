@extends('layout.app')
@section('content')
<main data-barba="container" data-barba-namespace="about">
@include('layout.nav')
<section id="about">

<div class="container mt-5 mb-5 ">
    <h4 class="font-weight-bold h4 text-blue mt-5 pt-5 pt-lg-0 mt-lg-0">درباره کلینیک مها</h4>
<div class="content">{!!$about->text!!}</div>
</div>
</section>
</main>

@endsection