@extends('admin.app-admin')
@section('content')
@include('admin.nav')

<div class="container pt-3">
    <div class="card p-4">
        <h3 class="text-right ">ویرایش اطلاعات اصلی</h3>
        <form action="{{route('admin.statics.update')}}">
            <table class="table">
                <tr>
                    <td><span class="pt-2 d-block text-right">عنوان سایت</span></td>
                    <td>
                        <div class="form-group">
                        <input type="text" class="form-control" name="title" value="{{$statics->title}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">شماره تماس</span></td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" value="{{$statics->phone}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">متن صفحه اصلی</span></td>
                    <td>
                        <div class="form-group">
                            <div class="form-group">
                                <textarea class="form-control" name="hero" rows="3">{{$statics->hero}}</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn float-right btn-dark">ذخیره</button>
        </form>
    </div>
</div>

@endsection
