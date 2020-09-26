@extends('admin.app-admin')
@section('content')
@include('admin.nav')



    <div class="container pt-3">
        @if ($message = Session::get('msg'))
        <div class="alert alert-success auto-fade alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="card p-4">
            <div class="d-flex justify-content-between mb-3 ">
                <h3 class="text-right ">ویرایش وبلاگ </h3>
            <a href="{{route('admin.post.create')}}"  class="text-white btn btn-dark" >
                    افرودن <i class="fa fa-plus align-middle"></i>
                </a>
            </div>
        <table id="table-post" class="table text-center">
            <thead>
                <th class=" text-center">#</th>
                <th class=" text-center">تصویر</th>
                <th class=" text-center">عنوان</th>
                <th class=" text-center">متن کوتاه</th>
                <th class=" text-center">انتشار</th>
                <th class=" text-center">عملیات</th>
            </thead>
        </table>
        </div>
    </div>
@endsection