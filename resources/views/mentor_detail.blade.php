@extends('layouts.common')

@section('title', 'スレッド詳細')
@section('pageCss')
    <link rel="stylesheet" href="css/mentor_detail.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
    <div class="container">
        <div class="list-group">
            <div class="list-group-item list-group-item-action border-top-0">
                <h5><i class="fas fa-chevron-left"></i><span class="ml-2">Back</span></h5>
            </div>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-1">
                        <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                    </div>
                    <div class="col-11">
                        <div class="row justify-content-between">
                            <div class="col-10 pr-1"><h5>スレッドタイトル</h5></div>
                            <div class="col-2">
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item" type="button" data-toggle="modal" data-target="#postEditModal">編集</button>
                                        <button class="dropdown-item text-danger" type="button">削除</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-12">
                                <p class="card-text text-left">
                                    aaaaaaaaaaaaaaaaaaaaaaaaa
                                    bbbbbbbbbbbbbbbbbbbbbbbb
                                    cccccccccccccccccccccccc
                                    ddddddddddddddddddddddddd
                                    eeeeeeeeeeeeeeeeeeeeeeeee
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <small>by Yoshitaka Shimazu</small>
                            </div>
                            <div class="col-8">
                                <small>4月10日 10:32</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-11">
                        <div class="row pt-1 pb-1 border-top">
                            <div class="col-12 pl-5"><span>5いいねの数</span></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-1">
                        <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                    </div>
                    <div class="col-11">
                        <div class="row justify-content-between">
                            <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                            <div class="col-5"><small>4月10日 10:32</small></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="card-text text-left">
                                    aaaaaaaaaaaaaaaaaaaaaaaaa
                                    bbbbbbbbbbbbbbbbbbbbbbbb
                                    cccccccccccccccccccccccc
                                    ddddddddddddddddddddddddd
                                    eeeeeeeeeeeeeeeeeeeeeeeee
                                </p>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>
                            <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-1">
                        <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                    </div>
                    <div class="col-11">
                        <div class="row justify-content-between">
                            <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                            <div class="col-5"><small>4月10日 10:32</small></div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="card-text text-left">
                                    aaaaaaaaaaaaaaaaaaaaaaaaa
                                    bbbbbbbbbbbbbbbbbbbbbbbb
                                    cccccccccccccccccccccccc
                                    ddddddddddddddddddddddddd
                                    eeeeeeeeeeeeeeeeeeeeeeeee
                                </p>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>
                            <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>
                        </div>
                    </div>
                </div>
            </a>
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
{{--    <link rel="stylesheet" href="css/mentor_detail.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>スレッド詳細</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <nav class="navbar navbar-expand-md col-12 col-md-2 navbar-dark bg-dark align-items-md-start">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <a class="navbar-brand pl-md-3" href="#">Mentor</a>--}}
{{--                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 12rem">--}}
{{--                            <span class="navbar-toggler-icon"></span>--}}
{{--                        </button>--}}
{{--                        <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--                            <ul class="navbar-nav flex-column pl-md-3">--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white active" href="#">--}}
{{--                                        <i class="fas fa-home pr-3"></i>--}}
{{--                                        ホーム--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="#">--}}
{{--                                        <i class="fas fa-pen-square pr-3"></i>--}}
{{--                                        投稿--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="#">--}}
{{--                                        <i class="fas fa-people-carry pr-3"></i>--}}
{{--                                        メンター--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="#">--}}
{{--                                        <i class="fas fa-user pr-3"></i>--}}
{{--                                        ユーザー--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="#">--}}
{{--                                        <i class="fas fa-user pr-3"></i>--}}
{{--                                        管理者--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link text-white" href="#">--}}
{{--                                        <i class="fas fa-sign-out-alt pr-3"></i>--}}
{{--                                        ログアウト--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </nav>--}}

{{--            <main class="col-12 col-md-10 pt-5 pb-3">--}}
{{--                <div class="container">--}}
{{--                    <div class="list-group">--}}
{{--                        <div class="list-group-item list-group-item-action border-top-0">--}}
{{--                            <h5><i class="fas fa-chevron-left"></i><span class="ml-2">Back</span></h5>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-1">--}}
{{--                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-11">--}}
{{--                                    <div class="row justify-content-between">--}}
{{--                                        <div class="col-10 pr-1"><h5>スレッドタイトル</h5></div>--}}
{{--                                        <div class="col-2">--}}
{{--                                            <div class="dropdown">--}}
{{--                                                <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>--}}
{{--                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">--}}
{{--                                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#postEditModal">編集</button>--}}
{{--                                                    <button class="dropdown-item text-danger" type="button">削除</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row py-2">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <p class="card-text text-left">--}}
{{--                                                aaaaaaaaaaaaaaaaaaaaaaaaa--}}
{{--                                                bbbbbbbbbbbbbbbbbbbbbbbb--}}
{{--                                                cccccccccccccccccccccccc--}}
{{--                                                ddddddddddddddddddddddddd--}}
{{--                                                eeeeeeeeeeeeeeeeeeeeeeeee--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-4">--}}
{{--                                            <small>by Yoshitaka Shimazu</small>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-8">--}}
{{--                                            <small>4月10日 10:32</small>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row justify-content-center">--}}
{{--                                <div class="col-11">--}}
{{--                                    <div class="row pt-1 pb-1 border-top">--}}
{{--                                        <div class="col-12 pl-5"><span>5いいねの数</span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-1">--}}
{{--                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-11">--}}
{{--                                    <div class="row justify-content-between">--}}
{{--                                        <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                        <div class="col-5"><small>4月10日 10:32</small></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <p class="card-text text-left">--}}
{{--                                                aaaaaaaaaaaaaaaaaaaaaaaaa--}}
{{--                                                bbbbbbbbbbbbbbbbbbbbbbbb--}}
{{--                                                cccccccccccccccccccccccc--}}
{{--                                                ddddddddddddddddddddddddd--}}
{{--                                                eeeeeeeeeeeeeeeeeeeeeeeee--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row pt-3">--}}
{{--                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-1">--}}
{{--                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-11">--}}
{{--                                    <div class="row justify-content-between">--}}
{{--                                        <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                        <div class="col-5"><small>4月10日 10:32</small></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <p class="card-text text-left">--}}
{{--                                                aaaaaaaaaaaaaaaaaaaaaaaaa--}}
{{--                                                bbbbbbbbbbbbbbbbbbbbbbbb--}}
{{--                                                cccccccccccccccccccccccc--}}
{{--                                                ddddddddddddddddddddddddd--}}
{{--                                                eeeeeeeeeeeeeeeeeeeeeeeee--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row pt-3">--}}
{{--                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--    <script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
