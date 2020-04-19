@extends('layouts.common_nonmenu')

@section('title', 'ログイン')
@section('pageCss')
    <link rel="stylesheet" href="css/signin.css">
@endsection

@include('layouts.head')

@section('content')
    <main class="form-signin">
        <div class="container">
            <form action="" class="">
                <h3 class="text-center mb-4 font-weight-normal">ログイン</h3>
                <div class="form-group">
                    <label for="inputEmail">メールアドレス</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレスを入力">
                </div>
                <div class="form-group">
                    <label for="inputPassword">パスワード</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="パスワードを入力">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="remember" id="login-remember" value="1">
                    <label for="login-remember" class="form-check-label">ログイン情報を保存</label>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block mt-4">ログイン</button>
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
{{--    <link rel="stylesheet" href="css/signin.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>ログイン</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <main class="form-signin">--}}
{{--        <div class="container">--}}
{{--            <form action="" class="">--}}
{{--                <h3 class="text-center mb-4 font-weight-normal">ログイン</h3>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputEmail">メールアドレス</label>--}}
{{--                    <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレスを入力">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputPassword">パスワード</label>--}}
{{--                    <input type="password" class="form-control" id="inputPassword" placeholder="パスワードを入力">--}}
{{--                </div>--}}
{{--                <div class="form-check">--}}
{{--                    <input type="checkbox" name="remember" id="login-remember" value="1">--}}
{{--                    <label for="login-remember" class="form-check-label">ログイン情報を保存</label>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-success btn-lg btn-block mt-4">ログイン</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </main>--}}

{{--<main class="account-form">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center align-items-md-center py-4" style="height:100vh">--}}
{{--            <div class="col-md-5 col-lg-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header text-white bg-danger text-center">ログイン</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <form action="" class="">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="inputEmail">メールアドレス</label>--}}
{{--                                <input type="email" class="form-control" id="inputEmail" placeholder="メールアドレスを入力">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="inputPassword">パスワード</label>--}}
{{--                                <input type="password" class="form-control" id="inputPassword" placeholder="パスワードを入力">--}}
{{--                            </div>--}}
{{--                            <div class="form-check">--}}
{{--                                <input type="checkbox" name="remember" id="login-remember" value="1">--}}
{{--                                <label for="login-remember" class="form-check-label">ログイン情報を保存</label>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn btn-success btn-lg btn-block mt-4">ログイン</button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

{{--<script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--<script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
