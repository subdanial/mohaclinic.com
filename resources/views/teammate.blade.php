@extends('layout.app')
@section('content')


    <main data-barba="container" data-barba-namespace="teammate">
        @include('layout.nav')

        <section id="teammate" class="desktop d-none d-xl-block">
            <div class="container mt-5 p-4">
                <strong class="text-center d-block font-weight-bold text-blue display-7">همکاران ما</strong>
                <strong class="text-center d-block text-blue display-8 mt-2">با تیم ما آشنا شوید</strong>
                <strong class="text-center d-block text-blue display-8 mt-2   w-15 mx-auto bg-blue d-block" style="height:2px"> </strong>
                <div class="row mt-5 justify-content-center">
                    @foreach ($teammates as $teammate)
                    <div class="col-2 pointer js-team-selector @if($loop->first)  selected @else hover-color @endif" data-scroll="{{$teammate->id}}">
                        <img src="/upload/img/{{$teammate->image}}" class="rounded-circle w-100" alt="">
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="container-fluid">
                <div class="position-relative row silde-show mb-3">
                    <div class="background"></div>

                    @foreach ($teammates as $teammate)
                    <div class="row js-team-slide  @if($loop->first) selected @endif" data-scroll="{{$teammate->id}}">
                        <div class="col-4"><img src="/upload/img/{{$teammate->image}}" class="d-block mx-auto rounded-circle w-100" alt=""></div>
                        <div class="col-7">
                            <div class="h-100 d-flex align-items-center">
                                <div class="slide-content">
                                    <div class="title text-blue h3  font-weight-bold">{{$teammate->name}}</div>
                                    <div class="describe text-blue display-9">{{$teammate->describe}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mobile d-xl-none">
            <div class="container-fluid mt-5 pt-5">
                
                @foreach ($teammates as $teammate)
                <div class="row @if($loop->even) bg-green @endif d-flex position-static p-4 mt-5">
                   <div class="row mx-auto w-80">
                    <div class="@if($loop->odd) order-md-0 @else order-md-1  @endif  col-12 col-lg-4 col-md-6 d-flex"><img src="/upload/img/{{$teammate->image}}" class="d-block  align-self-center m-auto w-60 rounded-circle w-md-100" alt=""></div>
                    <div class="@if($loop->odd) order-md-1 @else order-md-0 @endif  col-12 col-lg-8 col-md-6">
                        <div class="h-100 d-flex align-items-center">
                            <div class="slide-content w-100 mt-3  ">
                                <div class="title text-blue text-center h3  font-weight-bold">{{$teammate->name}}</div>
                                <div class="describe text-blue text-center display-9">{{$teammate->describe}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
