@extends('layouts.common')

@section('title', 'メンターマッチング')
@section('pageCss')
    <link rel="stylesheet" href="css/matching.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 order-2 order-md-1 border-right">
            <h3>申請一覧</h3>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action pb-2">
                    <div class="row">
                        <div class="col-1 pl-1 pl-md-3">
                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                        </div>
                        <div class="col-11">
                            <div class="row justify-content-between">
                                <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                                <div class="col-5 pr-0"><small>申請日：4月10日</small></div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-12">
                                    <h5 class="border-bottom">目標設定</h5>
                                    <p class="pt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm">ごめんなさい</button>
                                    <button class="btn btn-success btn-sm">了承</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action pb-2">
                    <div class="row">
                        <div class="col-1 pl-1 pl-md-3">
                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                        </div>
                        <div class="col-11">
                            <div class="row justify-content-between">
                                <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                                <div class="col-5 pr-0"><small>申請日：4月10日</small></div>
                            </div>
                            <div class="row py-3">
                                <div class="col-12">
                                    <h5 class="border-bottom">目標設定</h5>
                                    <p class="pt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-sm">ごめんなさい</button>
                                    <button class="btn btn-success btn-sm">了承</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2">
            <h3>マッチング済みユーザー</h3>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action pb-2">
                    <div class="row">
                        <div class="col-1 pl-1 pl-md-3">
                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                        </div>
                        <div class="col-11">
                            <div class="row justify-content-between">
                                <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                                <div class="col-5 pr-0"><small>開始日：4月10日</small></div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-12">
                                    <h5 class="border-bottom">目標設定</h5>
                                    <p class="pt-2">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-sm">メンター完了</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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
{{--    <link rel="stylesheet" href="css/matching.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>メンターマッチング</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<header class="py-4">--}}
{{--    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark d-print">--}}
{{--        <a class="navbar-brand" href="#">Mentor</a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse justify-content-end pr-5" id="navbarNavDropdown">--}}
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="navbar-brand" href="#"><img src="/images/user-circle-solid.svg" width="30" height="30" alt=""></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        UserName--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                        <a class="dropdown-item" href="#">ログアウト</a>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--</header>--}}

{{--<main class="pt-5 pb-3">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 col-md-6 order-2 order-md-1 border-right">--}}
{{--                <h3>申請一覧</h3>--}}
{{--                <div class="list-group">--}}
{{--                    <a href="#" class="list-group-item list-group-item-action pb-2">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1 pl-1 pl-md-3">--}}
{{--                                <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-11">--}}
{{--                                <div class="row justify-content-between">--}}
{{--                                    <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                    <div class="col-5 pr-0"><small>申請日：4月10日</small></div>--}}
{{--                                </div>--}}
{{--                                <div class="row pt-3">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <h5 class="border-bottom">目標設定</h5>--}}
{{--                                        <p class="pt-2">--}}
{{--                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <button class="btn btn-primary btn-sm">ごめんなさい</button>--}}
{{--                                        <button class="btn btn-success btn-sm">了承</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a href="#" class="list-group-item list-group-item-action pb-2">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1 pl-1 pl-md-3">--}}
{{--                                <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-11">--}}
{{--                                <div class="row justify-content-between">--}}
{{--                                    <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                    <div class="col-5 pr-0"><small>申請日：4月10日</small></div>--}}
{{--                                </div>--}}
{{--                                <div class="row py-3">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <h5 class="border-bottom">目標設定</h5>--}}
{{--                                        <p class="pt-2">--}}
{{--                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <button class="btn btn-primary btn-sm">ごめんなさい</button>--}}
{{--                                        <button class="btn btn-success btn-sm">了承</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-12 col-md-6 order-1 order-md-2">--}}
{{--                <h3>マッチング済みユーザー</h3>--}}
{{--                <div class="list-group">--}}
{{--                    <a href="#" class="list-group-item list-group-item-action pb-2">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-1 pl-1 pl-md-3">--}}
{{--                                <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-11">--}}
{{--                                <div class="row justify-content-between">--}}
{{--                                    <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                    <div class="col-5 pr-0"><small>開始日：4月10日</small></div>--}}
{{--                                </div>--}}
{{--                                <div class="row pt-3">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <h5 class="border-bottom">目標設定</h5>--}}
{{--                                        <p class="pt-2">--}}
{{--                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-12">--}}
{{--                                        <button class="btn btn-danger btn-sm">メンター完了</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</main>--}}

{{--<footer class="py-4 bg-dark text-light">--}}
{{--    <div class="container text-center text-white">--}}
{{--        <ul class="nav justify-content-center mb-3">--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="#">Top</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="#">About</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link text-white" href="#">Contact</a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <p><small>Copyright &copy;2020 Mr. YOSHI, ALL Rights Reserved.</small></p>--}}
{{--    </div>--}}
{{--</footer>--}}

{{--<script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--<script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
