@extends('admin.app-admin')
@section('content')
@include('admin.nav')
<div class="container mt-4">
    @if ($message = Session::get('msg'))
    <div class="alert alert-success auto-fade alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
    @endif


    <div class="card card-body">
    <strong class="h3">ویرایش همکار</strong>
    <form action="{{route('admin.teammate.update',$teammate)}}">
    <table class="table">
                                <tr>
                                    <td>تصویر</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group">
                                                    <span class="btn btn-dark btn-block mb-2 btn-file">
                                                    انتخاب عکس <input type="file"  class="custom-file-input js-btn-upload-gallery"  name="picture" id="picture" >
                                                </span>
                                            </span>
                                            <input type="text" style="direction: ltr!important" class="form-control w-100 mb-2" value="{{$teammate->image}}" readonly>
                                        </div>
                                        <img id='img-upload' class="w-100 d-block mx-auto"/>
                                        <div id="uploaded_image" class="w-100 d-block text-right mt-2"></div>
                                        <input type="hidden" required class="js-image-name" name="image">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>نام</td>
                                <td><div class="form-group">
                                <input type="text" class="form-control" required name="name"  value="{{$teammate->name}}">
                                </div></td>
                            </tr>
                            <tr>
                                <td>معرفی</td>
                                <td><div class="form-group">
                                <textarea class="form-control" required name="describe" rows="3">{{$teammate->describe}}</textarea>
                                </div></td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-dark">دخیره</button>
                    </form>
                    
    </div>
</div>

@endsection