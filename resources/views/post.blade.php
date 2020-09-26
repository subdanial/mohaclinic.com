@extends('layout.app')
@section('content')
<main data-barba="container" data-barba-namespace="blog">
    @include('layout.nav')
    <div class="position-absolute bg-light w-100 h-100"></div>
    <section id="blog">
        <div class="container  mt-0 mt-lg-5 px-lg-5">
            <div class="divider pt-5 mt-5 mt-lg-0 pt-lg-0"></div>
            <div class="post px-0 px-lg-5">
                <div class="row px-3 px-lg-5">
                    <div class="col">
                            
                        <div class="card p-5 border-0 shadow card-body">
                            <div class="header">
                                <div class="writer_image">
                                    <div class="row pb-3">
                                        <div class="col-2 col-lg-1 pl-0">
                                            <div class="rounded-circle w-100">
                                                <img src="{{ asset('img/circle.png') }}" class="d-inline w-100" alt="">
                                            </div>
                                        </div>
                                        <div class="col-8 pl-0 pr-2">
                                            <span class="pt-2 text-blue d-block">نوشته شده توسط مها کلینیک</span>
                                        <span class="small text-muted d-block">{{verta($post->created_at)->formatDifference()}} / {{$post->category->name}}</span>
                                        </div>

                                        <div class="d-none d-md-block col-2 col-lg-3  pr-2">
                                            <a href="{{url()->previous()}}" class="pt-2 btn-sm btn btn-blue text-white d-block float-left ">بازگشت</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <h4 class="font-weight-bold h4 text-blue mb-3"> {{$post->title}} </h4>
                            </div>
                            <div class="image"><img class="picture" src="/upload/img/{{$post->image}}"
                                    class="w-100">
                            </div>
                            <div class="content mt-4">{!!$post->content!!}
   <div class="d-block d-md-none ">
                                            <a href="{{url()->previous()}}" class="pt-2 btn-sm btn btn-blue btn-block text-white d-block float-left ">بازگشت</a>
                                        </div>
</div>

                        </div>



                    </div>

                </div>
            </div>

    </section>
</main>
@endsection
