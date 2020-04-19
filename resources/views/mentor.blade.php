@extends('layouts.common')

@section('title', 'メンター')
@section('pageCss')
    <link rel="stylesheet" href="css/mentor.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-3 border-right">
            <h5>メンター/メンティー</h5>
            <div class="nav flex-column nav-pills pt-4" id="mentor-list-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="mentor-list-1-tab" data-toggle="pill" href="#mentor-list-1" role="tab" aria-controls="mentor-list-1" aria-selected="true">UserName1</a>
                <a class="nav-link" id="mentor-list-2-tab" data-toggle="pill" href="#mentor-list-2" role="tab" aria-controls="mentor-list-2" aria-selected="false">UserName2</a>
                <a class="nav-link" id="mentor-list-3-tab" data-toggle="pill" href="#mentor-list-3" role="tab" aria-controls="mentor-list-3" aria-selected="false">UserName3</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <div class="row justify-content-end">
                <div class="col-6 col-md-3 pt-3">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mentorThreadModal">スレッド作成</button>
                </div>
            </div>
            <div class="tab-content pt-3" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="mentor-list-1" role="tabpanel" aria-labelledby="mentor-list-1-tab">
                    <div class="list-group">
                        <a href="/mentor_detail" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-2 col-md-1">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <div class="row">
                                        <div class="col-12"><h5>スレッドタイトル</h5></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <small>by Yoshitaka  4月20日 11:05</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="/mentor_detail" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-2 col-md-1">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                </div>
                                <div class="col-10 col-md-11">
                                    <div class="row">
                                        <div class="col-12"><h5>スレッドタイトル</h5></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <small>by Yoshitaka  4月20日 11:05</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade" id="mentor-list-2" role="tabpanel" aria-labelledby="mentor-list-2-tab">222</div>
                <div class="tab-pane fade" id="mentor-list-3" role="tabpanel" aria-labelledby="mentor-list-3-tab">333</div>
            </div>
        </div>
    </div>
</div>

<!-- 新規投稿ダイアログ -->
<div class="modal" id="mentorThreadModal" tabindex="-1" role="dialog" aria-labelledby="mentorThreadModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postNewModalLabel">スレッド作成</h5>
                <!-- 閉じるアイコン -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="container-fluid px-0">
                    <div class="row no-gutters">
                        <div class="col-1">
                            <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="30" height="30">
                        </div>
                        <div class="col-11 pl-2">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="inputThreadTitle">スレッドタイトル</label>
                                    <input type="text" class="form-control" id="inputThreadTitle" placeholder="スレッドタイトルを入力">
                                </div>
                                <div class="form-group">
                                    <label for="inputTextarea">スレッド本文</label>
                                    <textarea class="form-control" id="inputTextarea" rows="7" placeholder="スレッド内容"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                <button type="button" class="btn btn-primary w-25">作成</button>
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
{{--    <link rel="stylesheet" href="css/mentor.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>メンター相談室</title>--}}
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
{{--                                    <a class="nav-link text-white active" href="/post">--}}
{{--                                        <i class="fas fa-home pr-3"></i>--}}
{{--                                        ホーム--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="/post">--}}
{{--                                        <i class="fas fa-pen-square pr-3"></i>--}}
{{--                                        投稿--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="/mentor">--}}
{{--                                        <i class="fas fa-people-carry pr-3"></i>--}}
{{--                                        メンター--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item pb-2">--}}
{{--                                    <a class="nav-link text-white" href="/profile">--}}
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
{{--                    <div class="row">--}}
{{--                        <div class="col-3 border-right">--}}
{{--                            <h5>メンター/メンティー</h5>--}}
{{--                            <div class="nav flex-column nav-pills pt-4" id="mentor-list-tab" role="tablist" aria-orientation="vertical">--}}
{{--                                <a class="nav-link active" id="mentor-list-1-tab" data-toggle="pill" href="#mentor-list-1" role="tab" aria-controls="mentor-list-1" aria-selected="true">UserName1</a>--}}
{{--                                <a class="nav-link" id="mentor-list-2-tab" data-toggle="pill" href="#mentor-list-2" role="tab" aria-controls="mentor-list-2" aria-selected="false">UserName2</a>--}}
{{--                                <a class="nav-link" id="mentor-list-3-tab" data-toggle="pill" href="#mentor-list-3" role="tab" aria-controls="mentor-list-3" aria-selected="false">UserName3</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-9">--}}
{{--                            <div class="row justify-content-end">--}}
{{--                                <div class="col-3">--}}
{{--                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mentorThreadModal">スレッド作成</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="tab-content pt-3" id="v-pills-tabContent">--}}
{{--                                <div class="tab-pane fade show active" id="mentor-list-1" role="tabpanel" aria-labelledby="mentor-list-1-tab">--}}
{{--                                    <div class="list-group">--}}
{{--                                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                            <div class="row align-items-center">--}}
{{--                                                <div class="col-1">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-12"><h5>スレッドタイトル</h5></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <small>by Yoshitaka  4月20日 11:05</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="#" class="list-group-item list-group-item-action">--}}
{{--                                            <div class="row align-items-center">--}}
{{--                                                <div class="col-1">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-12"><h5>スレッドタイトル</h5></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-12">--}}
{{--                                                            <small>by Yoshitaka  4月20日 11:05</small>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tab-pane fade" id="mentor-list-2" role="tabpanel" aria-labelledby="mentor-list-2-tab">222</div>--}}
{{--                                <div class="tab-pane fade" id="mentor-list-3" role="tabpanel" aria-labelledby="mentor-list-3-tab">333</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- 新規投稿ダイアログ -->--}}
{{--                <div class="modal" id="mentorThreadModal" tabindex="-1" role="dialog" aria-labelledby="mentorThreadModal" aria-hidden="true">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title" id="postNewModalLabel">スレッド作成</h5>--}}
{{--                                <!-- 閉じるアイコン -->--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body p-4">--}}
{{--                                <div class="container-fluid px-0">--}}
{{--                                    <div class="row no-gutters">--}}
{{--                                        <div class="col-1">--}}
{{--                                            <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="30" height="30">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-11 pl-2">--}}
{{--                                            <form action="" method="post">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="inputThreadTitle">スレッドタイトル</label>--}}
{{--                                                    <input type="text" class="form-control" id="inputThreadTitle" placeholder="スレッドタイトルを入力">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="inputTextarea">スレッド本文</label>--}}
{{--                                                    <textarea class="form-control" id="inputTextarea" rows="7" placeholder="スレッド内容"></textarea>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>--}}
{{--                                <button type="button" class="btn btn-primary w-25">作成</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--    <script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
