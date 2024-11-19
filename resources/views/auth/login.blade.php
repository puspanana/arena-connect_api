@extends('auth-layouts.app')
@section('title')
    Login
@endsection
@section('content')
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="index.html">
                                <h4>Arena Connect</h4>
                            </a>

                            <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Masukkan email Anda">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Masukkan password Anda">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn login-form__btn w-100" type="submit">Masuk</button>
                            </form>
                            <p class="mt-5 login-form__footer">Belum punya akun? <a href="{{ url('/register') }}"
                                    class="text-primary">Register</a> sekarang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
