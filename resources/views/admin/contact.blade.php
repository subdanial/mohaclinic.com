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
        <h3 class="text-right ">ویرایش اطلاعات تماس</h3>
        <form action="{{route('admin.contact.update')}}">
            <table class="table">
                <tr>
                    <td><span class="pt-2 d-block text-right">تماس 1 :</span></td>
                    <td>
                        <div class="form-group">
                        <input type="nunmber" max="10000000000" placeholder="اجباری *"  required class="form-control" name="phone" value="{{$contact->phone}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">تماس 2 :</span></td>
                    <td>
                        <div class="form-group">
                        <input type="nunmber" max="10000000000" placeholder="خالی" class="form-control" name="phone2" value="{{$contact->phone2}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">تماس 3 :</span></td>
                    <td>
                        <div class="form-group">
                        <input type="nunmber" max="10000000000" placeholder="خالی"  class="form-control" name="phone3" value="{{$contact->phone3}}">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><span class="pt-2 d-block text-right">متن فرم</span></td>
                    <td>
                        <div class="form-group">
                            <div class="form-group">
                                <textarea class="form-control" name="describe" rows="3">{{$contact->describe}}</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">نقشه گوگل</span></td>
                    <td>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Latitude+Longitude" name="google" style="direction: ltr!important" dir="ltr" value="{{$contact->google}}">
                                <small class="help"><a target="_blank" href="https://www.maps.ie/coordinates.html">پیدا کردن مختصات </a></small>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">آدرس</span></td>
                    <td>
                        <div class="form-group">
                            <div class="form-group">
                                <textarea class="form-control" name="address" rows="3">{{$contact->address}}</textarea>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">ایمیل :</span></td>
                    <td>
                        <div class="form-group">
                        <input type="text" class="form-control" name="email" value="{{$contact->email}}">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><span class="pt-2 d-block text-right">اینستاگرام :</span></td>
                    <td>
                        <div class="form-group">
                        <input type="text" class="form-control" name="instagram" value="{{$contact->instagram}}">
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn float-right btn-dark">ذخیره</button>
        </form>
    </div>
</div>

@endsection
