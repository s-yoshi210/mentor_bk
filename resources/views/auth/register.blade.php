@extends('layouts.common')

@section('pageCss')
    <link rel="stylesheet" href="{{ __('css/account.css') }}">
@endsection

@include('layouts.head')

@section('content')
    <div class="form-account">
        <div class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <h3 class="text-center mb-4 font-weight-normal">アカウント作成</h3>
                <div class="form-group">
                    <label for="user-name">ユーザー名</label>
                    <input id="user-name" type="text" class="form-control @error('user-name') is-invalid @enderror" name="user_name" value="{{ old('user-name') }}" required autocomplete="user-name" autofocus placeholder="ユーザー名を入力">

                    @error('user-name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="パスワード(確認用)を入力">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">パスワード(確認用)</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="パスワードを入力">
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-4">新規登録</button>
            </form>
        </div>
    </div>
@endsection
