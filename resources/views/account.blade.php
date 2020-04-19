@extends('layouts.common_nonmenu')

@section('title', 'アカウント作成')
@section('pageCss')
    <link rel="stylesheet" href="css/account.css">
@endsection

@include('layouts.head')

@section('content')
    <main class="form-account">
        <div class="container">
            <form action="" class="">
                <h3 class="text-center mb-4 font-weight-normal">アカウント作成</h3>
                <div class="form-group">
                    <label for="inputUserName">ユーザー名</label>
                    <input type="text" class="form-control" id="inputUserName" placeholder="ユーザー名を入力">
                </div>
                <div class="form-group">
                    <label for="inputEmail">メールアドレス</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレスを入力">
                </div>
                <div class="form-group">
                    <label for="inputPassword">パスワード</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="パスワードを入力">
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-4">新規登録</button>
            </form>
        </div>
    </main>
@endsection

{{--<!doctype html>--}}
{{--<html lang="ja">--}}
{{--<head>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- CSS -->--}}
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
{{--    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">--}}
{{--    <link rel="stylesheet" href="css/account.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>アカウント作成</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <main class="form-account">--}}
{{--        <div class="container">--}}
{{--            <form action="" class="">--}}
{{--                <h3 class="text-center mb-4 font-weight-normal">アカウント作成</h3>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputUserName">ユーザー名</label>--}}
{{--                    <input type="text" class="form-control" id="inputUserName" placeholder="ユーザー名を入力">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputEmail">メールアドレス</label>--}}
{{--                    <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレスを入力">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputPassword">パスワード</label>--}}
{{--                    <input type="password" class="form-control" id="inputPassword" placeholder="パスワードを入力">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-success btn-lg btn-block mt-4">新規登録</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </main>--}}

{{--    <script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--    <script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
