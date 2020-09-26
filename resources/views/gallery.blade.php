@extends('layout.app')
@section('content')
<main data-barba="container" data-barba-namespace="gallery">
    @include('layout.nav')
    <section id="gallery">
        <div class="container mt-5 p-4">

            <h3 class="text-right text-blue font-weight-bold text-center mt-5 pt-5 pt-xl-0 mt-xl-0 ">گالری تصاویر</h3>
            <p class="text-center text-blue"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است،<br> چاپگرها و
                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که</p>
     
                <div class="row mt-3 px-15">
               
                    @foreach ($galleries as $gallery)
                    <div class="col-6 col-md-4 p-2">
                        <a data-barba-prevent="self" data-caption="{{$gallery->describe}}"
                            href="/upload/img/{{$gallery->image}}" data-fancybox="gallery"><img
                                src="/upload/img/thumb/{{$gallery->image}}" class="w-100 d-block mx-auto" alt=""></a>
                    </div>

                    @endforeach

                    <div class="col-6"></div>
                </div>
            </div>
    </section>
</main>
@endsection