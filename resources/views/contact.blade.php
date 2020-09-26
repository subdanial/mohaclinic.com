@extends('layout.app')
@section('content')
    <main data-barba="container" data-barba-namespace="about">
        @include('layout.nav')
        <section id="about">
            <div class="divider mt-4 pt-4 pt-lg-0 mt-lg-0"></div>
            <div class="container-fluid">
                <div class="row">
                    <div style="width: 100%"><iframe width="100%" class="map" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q={{ $contact->google }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>
            <div class="container mt-3 mb-5 ">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-0">
                        <hr class="d-block d-lg-none">
                        <p class="h3 text-blue font-weight-bold mt-3">باما در ارتباط باشید</p>
                        <p class="text-blue">{{ $contact->describe }} </p>
                        <form action="">
                            <div class="form-group">
                                <label class="text-blue">نام شما:</label>
                                <input type="text" class="form-control" name="name" placeholder="نام شما ">
                            </div>
                            <div class="form-group">
                                <label class="text-blue">ایمیل:</label>
                                <input type="text" class="form-control" name="name" placeholder="example@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="text-blue">متن پیام :</label>
                                <textarea class="form-control" name="" id="" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-blue rounded-0">ارسال</button>
                        </form>
                    </div>
                    <div class="col-lg-6   order-0 order-lg-1">
                        <div class="row p-0 m-0 mt-3">
                            <div class="col-2 p-0"><b class="text-blue">تماس : </b></div>
                            <div class="col-10"><span class="text-blue text-right d-block">{{ $contact->phone }}</span>
                            </div>
                            @if ($contact->phone2)
                                <div class="col-2 p-0"><b class="text-blue"></b></div>
                                <div class="col-10"><span class="text-blue text-right d-block">{{ $contact->phone2 }}</span>
                                </div>
                            @endif
                            @if ($contact->phone3)
                                <div class="col-2 p-0"><b class="text-blue"></b></div>
                                <div class="col-10"><span class="text-blue text-right d-block">{{ $contact->phone3 }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="row p-0 m-0 mt-3">
                            <div class="col-2 p-0"><b class="text-blue">آدرس : </b></div>
                            <div class="col-10"><span class="text-blue text-right d-block">{{ $contact->address }}</span></div>
                        </div>
                        <div class="row p-0 m-0 mt-3">
                            <div class="col-2 p-0"><b class="text-blue">ایمیل : </b></div>
                            <div class="col-10"><a href="mailto:{{ $contact->email }}"
                                    class="text-blue text-right d-block">{{ $contact->email }}</a></div>
                        </div>
                        <div class="row p-0 m-0 mt-3">
                            <div class="col-2 p-0"><b class="text-blue">اینستاگرام : </b></div>
                            <div class="col-10"><a href="http://instagram.com/{{ $contact->instagram }}" target="_blank"
                                    class="text-blue text-right d-block">{{ $contact->instagram }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
