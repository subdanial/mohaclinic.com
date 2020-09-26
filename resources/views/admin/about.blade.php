@extends('admin.app-admin')
@section('content')
@include('admin.nav')
<div class="container mt-4">
    <form action="{{route('admin.about.update')}}">
    <div class="card card-body">
        <div class="d-flex mb-4 justify-content-between">
            <h3>ویرایش درباره ما</h3>
            <a class="btn btn-dark d-block" href="{{route('admin.about.restart')}}" role="button">بازگشت به مقدار اول</a>
        </div>

    <textarea  id="tiny" name="text" cols="30" class="" rows="10">{{$about->text}}</textarea>
        <button class="btn btn-dark" type="submit">ذخیره</button>
    </form>
    </div>
</div>
@endsection