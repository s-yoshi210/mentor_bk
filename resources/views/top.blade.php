@extends('layouts.common_nonmenu')

@section('title', 'TOP')
@section('pageCss')
    <link rel="stylesheet" href="css/top.css">
@endsection

@include('layouts.head')

@section('content')
    <div class="container-fluid pr-0 pl-0">
        <div class="row align-items-md-center ml-0 mr-0 top">
            <div class="col-md-6 pl-0 pr-0 top-visual">
                <img src="images/top.jpg" class="img-fluid h-100 w-100" alt="トップ画像">
                <div class="message text-white text-center">
                    <p class="pb-md-5">同じ目的を持った仲間を見つけよう</p>
                    <p class="pb-md-5">あなたのメンターを見つけよう</p>
                </div>
            </div>
            <div class="col-md-6 top-content">
                <div class="row text-center">
                    <div class="col-md-12 mt-3 mb-4"><i class="fas fa-child"></i><i class="fas fa-child"></i><i class="fas fa-child"></i></div>
                    <div class="col-md-12 mb-4"><p>同じ「仲間」を見つけよう</p></div>
                    <div class="col-md-12 mb-3"><a href="/account" class="btn btn-lg px-2 btn-success w-50">アカウント作成</a></div>
                    <div class="col-md-12 mb-5"><a href="/signin" class="btn btn-lg btn-outline-success w-50">ログイン</a></div>
                    <div class="col-md-12"><a href="" class="btn btn-lg btn-primary w-50">簡単ログイン</a></div>
                </div>
            </div>
        </div>
    </div>
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
{{--    <link rel="stylesheet" href="css/common.css">--}}
{{--    <link rel="stylesheet" href="css/top.css">--}}

{{--    <title>TOP</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div class="container-fluid pr-0 pl-0">--}}
{{--        <div class="row align-items-md-center ml-0 mr-0 top">--}}
{{--            <div class="col-md-6 col-sm-12 pl-0 pr-0 top-visual">--}}
{{--                <img src="images/top.jpg" class="img-fluid h-100 w-100" alt="">--}}
{{--                <div class="message text-white text-center">--}}
{{--                    <p class="pb-md-5">同じ目的を持った仲間を見つけよう</p>--}}
{{--                    <p class="pb-md-5">あなたのメンターを見つけよう</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-6 col-sm-12 top-content">--}}
{{--                <div class="row text-center">--}}
{{--                    <div class="col-md-12 mt-3 mb-4"><i class="fas fa-child"></i><i class="fas fa-child"></i><i class="fas fa-child"></i></div>--}}
{{--                    <div class="col-md-12 mb-4"><p>同じ「仲間」を見つけよう</p></div>--}}
{{--                    <div class="col-md-12 mb-3"><a href="/account" class="btn btn-lg btn-success w-50">アカウント作成</a></div>--}}
{{--                    <div class="col-md-12 mb-5"><a href="/signin" class="btn btn-lg btn-outline-success w-50">ログイン</a></div>--}}
{{--                    <div class="col-md-12"><a href="" class="btn btn-lg btn-primary w-50">簡単ログイン</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--    <script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
