@extends('admin.layout.auth')

@section('content')
    <div class="py-5 text-center w-100">
        <div class="mx-auto w-xxl w-auto-xs">
            <div class="px-3">
                <div>
                    <a href="#" class="btn btn-block indigo text-white mb-2">
                        <i class="fa fa-facebook float-left"></i>
                        Sign in with Facebook
                    </a>
                    <a href="#" class="btn btn-block red text-white">
                        <i class="fa fa-google-plus float-left"></i>
                        Sign in with Google+
                    </a>
                </div>
                <div class="my-3 text-sm">
                    OR
                </div>
                <form name="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Почта" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Телефон" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="md-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <i class="primary"></i> Запомнить меня
                        </label>
                    </div>
                    <button type="submit" class="btn primary">Войти</button>
                </form>
                <div class="my-4">
                    <a href="forgot-password.html" class="text-primary _600">Forgot password?</a>
                </div>
                <div>
                    Do not have an account?
                    <a href="{{route('register')}}" class="text-primary _600">Sign up</a>
                </div>
            </div>
        </div>
    </div>
@endsection
