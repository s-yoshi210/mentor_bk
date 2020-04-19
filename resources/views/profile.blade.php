@extends('layouts.common')

@section('title', 'プロフィール')
@section('pageCss')
    <link rel="stylesheet" href="css/profile.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
<div class="container">
    <div class="row pt-5 pb-5">
        <div class="col-md-4">
            <div class="card text-center">
                <img class="card-img-top pt-3" src="/images/user-circle-solid.svg" width="70" height="70" alt="">
                <div class="card-body">
                    <h4 class="card-title">Yoshitaka Shimazu</h4>
                    <p class="card-text text-left">
                        aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                        bbbbbbbbbbbbbbbbbbbbbbbb
                        cccccccccccccccccccccccc
                        ddddddddddddddddddddddddd
                        eeeeeeeeeeeeeeeeeeeeeeeee
                    </p>
                    <a class="card-link" href="#">○フォロー中</a>
                    <a class="card-link" href="#">○フォロワー</a>
                    <a class="btn btn-success w-75 mt-4" href="/profile_edit">プロフィール編集</a>
                    <!-- 自分以外のプロフィール画面にのみ表示 -->
                    <button class="btn btn-primary w-75 mt-4" data-toggle="modal" data-target="#mentorApplyModal">メンター申請</button>
                </div>
            </div>
            <div class="row mt-4 pb-3">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">あなたのGive&Takeの割合</h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-comment-tab" data-toggle="tab" href="#nav-comment" role="tab" aria-controls="nav-comment" aria-selected="true">コメント</a>
                    <a class="nav-item nav-link" id="nav-reply-tab" data-toggle="tab" href="#nav-reply" role="tab" aria-controls="nav-reply" aria-selected="false">コメントと返信</a>
                    <a class="nav-item nav-link" id="nav-good-tab" data-toggle="tab" href="#nav-good" role="tab" aria-controls="nav-good" aria-selected="false">いいね</a>
                    <a class="nav-item nav-link" id="nav-qiita-tab" data-toggle="tab" href="#nav-qiita" role="tab" aria-controls="nav-qiita" aria-selected="false">Qiita記事</a>
                </div>
            </nav>

            <!-- コメント一覧 -->
            <div class="tab-content mt-3" id="nav-tabContent">

                <div class="tab-pane active" id="nav-comment" role="tabpanel" aria-labelledby="nav-comment-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1 pl-1 pl-md-3">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                </div>
                                <div class="col-11">
                                    <div class="row justify-content-between">
                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>
                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>
                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>
                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1 pl-1 pl-md-3">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                </div>
                                <div class="col-11">
                                    <div class="row justify-content-between">
                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>
                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-2"><i class="fas fa-comment comment-red"></i> 12</div>
                                        <div class="col-3 col-md-2"><i class="fas fa-heart heart-red"></i> 11</div>
                                        <div class="col-3 col-md-2"><i class="fas fa-handshake handshake-red"></i> 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- コメントと返信一覧 -->
                <div class="tab-pane" id="nav-reply" role="tabpanel" aria-labelledby="nav-reply-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1 pl-1 pl-md-3">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                    <div class="v_line_fix"></div>
                                </div>
                                <div class="col-11">
                                    <div class="row justify-content-between">
                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>
                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>
                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>
                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="col-1 pt-3 pl-1 pl-md-3">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                </div>
                                <div class="col-11 border-top">
                                    <div class="row pt-3 justify-content-between">
                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>
                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>
                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>
                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- いいね一覧 -->
                <div class="tab-pane fade" id="nav-good" role="tabpanel" aria-labelledby="nav-good-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-1 pl-1 pl-md-3">
                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                </div>
                                <div class="col-11">
                                    <div class="row justify-content-between">
                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>
                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>
                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>
                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Qiita記事一覧 -->
                <div class="tab-pane fade" id="nav-qiita" role="tabpanel" aria-labelledby="nav-qiita-tab">
                    Qiitaの文章です。...
                </div>
            </div>
        </div>
    </div>
</div>

<!-- メンター申請ダイアログ -->
<div class="modal" id="mentorApplyModal" tabindex="-1" role="dialog" aria-labelledby="mentorApplyModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mentorApplyModalLabel">メンター申請</h5>
                <!-- 閉じるアイコン -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <form action="">
                    <div class="form-group">
                        <label for="target-text" class="col-form-label">目標設定:</label>
                        <textarea class="form-control" id="target-text" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                <button type="button" class="btn btn-primary w-25">申請</button>
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
{{--    <link rel="stylesheet" href="css/profile.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>プロフィール</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <header class="py-4">--}}
{{--        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark d-print">--}}
{{--            <a class="navbar-brand" href="#">Mentor</a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse justify-content-end pr-5" id="navbarNavDropdown">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="navbar-brand" href="#"><img src="/images/user-circle-solid.svg" width="30" height="30" alt=""></a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        UserName--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="#">ログアウト</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </header>--}}

{{--    <main>--}}
{{--        <div class="container">--}}
{{--            <div class="row pt-5 pb-5">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="card text-center">--}}
{{--                        <img class="card-img-top pt-3" src="/images/user-circle-solid.svg" width="70" height="70" alt="">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Yoshitaka Shimazu</h4>--}}
{{--                            <p class="card-text text-left">--}}
{{--                                aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa--}}
{{--                                bbbbbbbbbbbbbbbbbbbbbbbb--}}
{{--                                cccccccccccccccccccccccc--}}
{{--                                ddddddddddddddddddddddddd--}}
{{--                                eeeeeeeeeeeeeeeeeeeeeeeee--}}
{{--                            </p>--}}
{{--                            <a class="card-link" href="#">○フォロー中</a>--}}
{{--                            <a class="card-link" href="#">○フォロワー</a>--}}
{{--                            <a class="btn btn-success w-75 mt-4" href="#">プロフィール編集</a>--}}
{{--                            <!-- 自分以外のプロフィール画面にのみ表示 -->--}}
{{--                            <button class="btn btn-primary w-75 mt-4" data-toggle="modal" data-target="#mentorApplyModal">メンター申請</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row mt-4 pb-3">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="card text-center">--}}
{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">あなたのGive&Takeの割合</h5>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-8">--}}
{{--                    <nav>--}}
{{--                        <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
{{--                            <a class="nav-item nav-link active" id="nav-comment-tab" data-toggle="tab" href="#nav-comment" role="tab" aria-controls="nav-comment" aria-selected="true">コメント</a>--}}
{{--                            <a class="nav-item nav-link" id="nav-reply-tab" data-toggle="tab" href="#nav-reply" role="tab" aria-controls="nav-reply" aria-selected="false">コメントと返信</a>--}}
{{--                            <a class="nav-item nav-link" id="nav-good-tab" data-toggle="tab" href="#nav-good" role="tab" aria-controls="nav-good" aria-selected="false">いいね</a>--}}
{{--                            <a class="nav-item nav-link" id="nav-qiita-tab" data-toggle="tab" href="#nav-qiita" role="tab" aria-controls="nav-qiita" aria-selected="false">Qiita記事</a>--}}
{{--                        </div>--}}
{{--                    </nav>--}}

{{--                    <!-- コメント一覧 -->--}}
{{--                    <div class="tab-content mt-3" id="nav-tabContent">--}}

{{--                        <div class="tab-pane active" id="nav-comment" role="tabpanel" aria-labelledby="nav-comment-tab">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-1 pl-1 pl-md-3">--}}
{{--                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-11">--}}
{{--                                            <div class="row justify-content-between">--}}
{{--                                                <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-1 pl-1 pl-md-3">--}}
{{--                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-11">--}}
{{--                                            <div class="row justify-content-between">--}}
{{--                                                <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-3 col-md-2"><i class="fas fa-comment comment-red"></i> 12</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="fas fa-heart heart-red"></i> 11</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="fas fa-handshake handshake-red"></i> 5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- コメントと返信一覧 -->--}}
{{--                        <div class="tab-pane" id="nav-reply" role="tabpanel" aria-labelledby="nav-reply-tab">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-1 pl-1 pl-md-3">--}}
{{--                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                            <div class="v_line_fix"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-11">--}}
{{--                                            <div class="row justify-content-between">--}}
{{--                                                <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row pt-2">--}}
{{--                                        <div class="col-1 pt-3 pl-1 pl-md-3">--}}
{{--                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-11 border-top">--}}
{{--                                            <div class="row pt-3 justify-content-between">--}}
{{--                                                <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- いいね一覧 -->--}}
{{--                        <div class="tab-pane fade" id="nav-good" role="tabpanel" aria-labelledby="nav-good-tab">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-1 pl-1 pl-md-3">--}}
{{--                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-11">--}}
{{--                                            <div class="row justify-content-between">--}}
{{--                                                <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <p>--}}
{{--                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <!-- Qiita記事一覧 -->--}}
{{--                        <div class="tab-pane fade" id="nav-qiita" role="tabpanel" aria-labelledby="nav-qiita-tab">--}}
{{--                            Qiitaの文章です。...--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- メンター申請ダイアログ -->--}}
{{--        <div class="modal" id="mentorApplyModal" tabindex="-1" role="dialog" aria-labelledby="mentorApplyModal" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="mentorApplyModalLabel">メンター申請</h5>--}}
{{--                        <!-- 閉じるアイコン -->--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body p-4">--}}
{{--                        <form action="">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="target-text" class="col-form-label">目標設定:</label>--}}
{{--                                <textarea class="form-control" id="target-text" rows="5"></textarea>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>--}}
{{--                        <button type="button" class="btn btn-primary w-25">申請</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}

{{--    <footer class="py-4 bg-dark text-light">--}}
{{--        <div class="container text-center text-white">--}}
{{--            <ul class="nav justify-content-center mb-3">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="#">Top</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="#">About</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-white" href="#">Contact</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <p><small>Copyright &copy;2020 Mr. YOSHI, ALL Rights Reserved.</small></p>--}}
{{--        </div>--}}
{{--    </footer>--}}

{{--<script src="js/jquery-3.4.1.slim.min.js"></script>--}}
{{--<script src="js/bootstrap.bundle.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
