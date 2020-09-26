@extends('admin.app-admin')
@section('content')
    @include('admin.nav')
 

{{-- create form --}}
<form action="{{ route('admin.category.store')}}">
    <div class="modal fade" id="modal_create" tabindex="-1" role="dialog" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-right d-block">افزودن دسته</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <table class="table">
                            <tr>
                                <td>نام دسته</td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </td>
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


{{-- edit form --}}
<form action="{{route('admin.category.update')}}">
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-right d-block">افزودن دسته</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="js_category_id" name="id">

                <div class="container-fluid">
                    <table class="table">
                        <tr>
                            <td>نام دسته</td>
                            <td>
                                <div class="form-group">
                                    <input type="text" value="" class="js_category_value form-control" name="name">
                                </div>
                            </td>
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
                <h3 class="text-right ">ویرایش دسته بندی مطالب</h3>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal_create">
                    افرودن <i class="fa fa-plus align-middle"></i>
                </button>
            </div>
            <table id="table-category" class="table text-center">
                <thead>
                    <th class=" text-center">#</th>
                    <th class=" text-center">نام دسته</th>
                    <th class=" text-center">عملیات</th>
                </thead>
            </table>
        </div>
    </div>
@endsection
