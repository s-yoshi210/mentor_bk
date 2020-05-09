@extends('layouts.common')

@section('pageCss')
    <link rel="stylesheet" href="{{ __('css/signin.css') }}">
@endsection

@include('layouts.head')

@section('content')
    <div class="form-signin">
        <div class="container">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h3 class="text-center mb-4 font-weight-normal">ログイン</h3>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレスを入力">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="パスワードを入力">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-check">
                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="form-check-label">ログイン情報を保存</label>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-4">ログイン</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        パスワードをお忘れですか？
                    </a>
                @endif
            </form>
        </div>
    </div>
@endsection
