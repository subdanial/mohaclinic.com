@extends('admin.app-admin')
@section('content')
@include('admin.nav')



<form action="{{route('admin.teammate.store')}}">
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-right d-block">افزودن همکار جدید <small class="text-muted d-block">تصویر حداکثر 4 مگابایت استاندارد 500 کلیوبایت </small></h5><br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <table class="table">
                                <tr>
                                    <td>تصویر</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group">
                                                    <span class="btn btn-dark btn-block mb-2 btn-file">
                                                        انتخاب عکس <input type="file" required class="custom-file-input js-btn-upload-gallery" name="picture" id="picture" >
                                                </span>
                                            </span>
                                            <input type="text" class="form-control w-100 mb-2" value="نام عکس آپلود شده" readonly>
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
                                  <input type="text" class="form-control" required name="name">
                                </div></td>
                            </tr>
                            <tr>
                                <td>معرفی</td>
                                <td><div class="form-group">
                                  <textarea class="form-control" required name="describe" rows="3"></textarea>
                                </div></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer float-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">لغو</button>
                    <button type="submit" class="btn btn-dark js-submit-gallery-image">ذخیره</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div class="container pt-3">

        @if ($message = Session::get('msg'))
        <div class="alert alert-success auto-fade alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
        </div>
        @endif

        <div class="card p-4">
            <div class="d-flex justify-content-between mb-3 ">
                <h3 class="text-right ">ویرایش همکاران </h3>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modelId">
                    افرودن <i class="fa fa-plus align-middle"></i>
                </button>
            </div>
        <table id="table-teammate" class="table text-center">
            <thead>
                <th class=" text-center">#</th>
                <th class=" text-center">تصویر</th>
                <th class=" text-center">نام</th>
                <th class=" text-center">توضیح</th>
                <th class=" text-center">عملیات</th>
            </thead>
        </table>
        </div>
    </div>
@endsection