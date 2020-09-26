@extends('admin.app-admin')
@section('content')
    <div class="container justify-content-center d-flex h-100">
        <div class="row align-self-center">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <label> ایمیل</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>ایمیل اشتباه است</strong>
                    </span>
                    @enderror
                    <label>
                        رمز عبور
                    </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>رمز عبور اشتباه است</strong>
                    </span>
                    @enderror
                    <div class="form-inline mt-2 float-left">
                        <div class="form-group">
                            <label for="">به خاطر بسپار؟</label><input class="form-check-input mr-2" type="checkbox"
                                name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </div>
                    </div>
                    <button type="submit" class="btn mt-3 btn-dark">
                        ورورد
                    </button>
                </form>

            </div>
        </div>
            @endsection
