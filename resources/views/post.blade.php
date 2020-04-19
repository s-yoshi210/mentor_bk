@extends('layouts.common')

@section('title', '投稿一覧')
@section('pageCss')
    <link rel="stylesheet" href="css/post.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
<div class="container">
    <div class="row pt-3">
        <div class="col-12 col-md-8">
            <div class="row">
                <div class="col-12 col-md-9 order-2 order-md-1">
                    <form class="form-inline">
                        <input class="form-control w-100" type="search" placeholder="キーワード検索..." aria-label="Search">
                    </form>
                </div>
                <div class="col-12 col-md-3 order-1 order-md-2 text-right mb-3 mb-md-0">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#postNewModal">投稿する</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav class="pt-4">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-follow-tab" data-toggle="tab" href="#nav-follow" role="tab" aria-controls="nav-follow" aria-selected="true">フォロー</a>
                            <a class="nav-item nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="false">新着</a>
                            <a class="nav-item nav-link" id="nav-attention-tab" data-toggle="tab" href="#nav-attention" role="tab" aria-controls="nav-attention" aria-selected="false">注目</a>
                        </div>
                    </nav>
                    <div class="tab-content mt-3" id="nav-tabContent">

                        <!-- フォロー -->
                        <div class="tab-pane active" id="nav-follow" role="tabpanel" aria-labelledby="nav-follow-tab">

                            <div class="card">
                                <a href="/post_detail" class="card-body text-reset text-decoration-none pb-2">
                                    <div class="row">
                                        <div class="col-1 pl-1 pl-md-3">
                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                        </div>
                                        <div class="col-11">
                                            <div class="row justify-content-between">
                                                <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                                                <div class="col-5 pr-0"><small>4月10日 10:32</small></div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-11">
                                                    <p class="card-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 col-md-2 px-0">
                                                    <button class="btn pt-0" data-toggle="modal" data-target="#postCommentModal"><i class="far fa-comment"></i><span> 12</span></button>
                                                </div>
                                                <div class="col-3 col-md-2 px-0">
                                                    <button class="btn pt-0"><i class="far fa-heart"></i><span> 12</span></button>
                                                </div>
                                                <div class="col-3 col-md-2 px-0">
                                                    <button class="btn pt-0"><i class="far fa-handshake"></i><span> 12</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="#" class="card-body text-reset text-decoration-none pb-2">
                                    <div class="row">
                                        <div class="col-1 pl-1 pl-md-3">
                                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                                        </div>
                                        <div class="col-11">
                                            <div class="row justify-content-between">
                                                <div class="col-7 pr-1">Yoshitaka Shimazu</div>
                                                <div class="col-5 pr-0"><small>4月10日 10:32</small></div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-11">
                                                    <p class="card-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3 col-md-2 px-0">
                                                    <button class="btn pt-0" data-toggle="modal" data-target="#postCommentModal"><i class="far fa-comment"></i><span> 12</span></button>
                                                </div>
                                                <div class="col-3 col-md-2 px-0">
                                                    <button class="btn pt-0"><i class="far fa-heart"></i><span> 12</span></button>
                                                </div>
                                                <div class="col-3 col-md-2 px-0">
                                                    <button class="btn pt-0"><i class="far fa-handshake"></i><span> 12</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- 新着 -->
                        <div class="tab-pane" id="nav-new" role="tabpanel" aria-labelledby="nav-new-tab">
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

                        <!-- 注目 -->
                        <div class="tab-pane fade" id="nav-attention" role="tabpanel" aria-labelledby="nav-attention-tab">
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
                    </div>

                    <nav class="pt-4" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="ranking col-12 col-md-4 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">ユーザランキング(いいね)</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">1位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">2位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">3位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">4位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">5位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">6位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">7位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">8位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">9位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                    <li class="list-group-item">10位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 新規投稿ダイアログ -->
<div class="modal" id="postNewModal" tabindex="-1" role="dialog" aria-labelledby="postNewModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postNewModalLabel">新規投稿</h5>
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
                            <div class="form-group">
                                <textarea class="form-control" id="inputTextarea" rows="7" placeholder="投稿しよう"></textarea>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" value="" id="check1">
                                <label class="form-check-label" for="check1">Give <small>Giveな投稿にはチェック</small></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                <button type="button" class="btn btn-primary w-25">投稿</button>
            </div>
        </div>
    </div>
</div>

<!-- コメントダイアログ -->
<div class="modal" id="postCommentModal" tabindex="-1" role="dialog" aria-labelledby="postCommentModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- 閉じるアイコン -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="container-fluid px-0">
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
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-1 pl-1 pl-md-3">
                            <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">
                        </div>
                        <div class="col-11">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="inputTextarea" rows="7" placeholder="コメントする"></textarea>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="check1">
                                        <label class="form-check-label" for="check1">Give <small>Giveな投稿にはチェック</small></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>
                <button type="button" class="btn btn-primary w-25">返信</button>
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
{{--    <link rel="stylesheet" href="css/post.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>投稿一覧</title>--}}
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
{{--                            UserName--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
{{--                            <a class="dropdown-item" href="#">ログアウト</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </header>--}}

{{--    <main class="pt-3 pb-3">--}}
{{--        <div class="container">--}}
{{--            <div class="row pt-3">--}}
{{--                <div class="col-12 col-md-8">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12 col-md-9 order-2 order-md-1">--}}
{{--                            <form class="form-inline">--}}
{{--                                <input class="form-control w-100" type="search" placeholder="キーワード検索..." aria-label="Search">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="col-12 col-md-3 order-1 order-md-2 text-right mb-3 mb-md-0">--}}
{{--                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#postNewModal">投稿する</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <nav class="pt-4">--}}
{{--                                <div class="nav nav-tabs" id="nav-tab" role="tablist">--}}
{{--                                    <a class="nav-item nav-link active" id="nav-follow-tab" data-toggle="tab" href="#nav-follow" role="tab" aria-controls="nav-follow" aria-selected="true">フォロー</a>--}}
{{--                                    <a class="nav-item nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-new" aria-selected="false">新着</a>--}}
{{--                                    <a class="nav-item nav-link" id="nav-attention-tab" data-toggle="tab" href="#nav-attention" role="tab" aria-controls="nav-attention" aria-selected="false">注目</a>--}}
{{--                                </div>--}}
{{--                            </nav>--}}
{{--                            <div class="tab-content mt-3" id="nav-tabContent">--}}

{{--                                <!-- フォロー -->--}}
{{--                                <div class="tab-pane active" id="nav-follow" role="tabpanel" aria-labelledby="nav-follow-tab">--}}

{{--                                    <div class="card">--}}
{{--                                        <a href="#" class="card-body text-reset text-decoration-none pb-2">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-1 pl-1 pl-md-3">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <div class="row justify-content-between">--}}
{{--                                                        <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                                        <div class="col-5 pr-0"><small>4月10日 10:32</small></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row py-3">--}}
{{--                                                        <div class="col-11">--}}
{{--                                                            <p class="card-text">--}}
{{--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-3 col-md-2 px-0">--}}
{{--                                                            <button class="btn pt-0" data-toggle="modal" data-target="#postCommentModal"><i class="far fa-comment"></i><span> 12</span></button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-3 col-md-2 px-0">--}}
{{--                                                            <button class="btn pt-0"><i class="far fa-heart"></i><span> 12</span></button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-3 col-md-2 px-0">--}}
{{--                                                            <button class="btn pt-0"><i class="far fa-handshake"></i><span> 12</span></button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="card">--}}
{{--                                        <a href="#" class="card-body text-reset text-decoration-none pb-2">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-1 pl-1 pl-md-3">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <div class="row justify-content-between">--}}
{{--                                                        <div class="col-7 pr-1">Yoshitaka Shimazu</div>--}}
{{--                                                        <div class="col-5 pr-0"><small>4月10日 10:32</small></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row py-3">--}}
{{--                                                        <div class="col-11">--}}
{{--                                                            <p class="card-text">--}}
{{--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-3 col-md-2 px-0">--}}
{{--                                                            <button class="btn pt-0" data-toggle="modal" data-target="#postCommentModal"><i class="far fa-comment"></i><span> 12</span></button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-3 col-md-2 px-0">--}}
{{--                                                            <button class="btn pt-0"><i class="far fa-heart"></i><span> 12</span></button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-3 col-md-2 px-0">--}}
{{--                                                            <button class="btn pt-0"><i class="far fa-handshake"></i><span> 12</span></button>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- 新着 -->--}}
{{--                                <div class="tab-pane" id="nav-new" role="tabpanel" aria-labelledby="nav-new-tab">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-1 pl-1 pl-md-3">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                    <div class="v_line_fix"></div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <div class="row justify-content-between">--}}
{{--                                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-11">--}}
{{--                                                            <p>--}}
{{--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row pt-2">--}}
{{--                                                <div class="col-1 pt-3 pl-1 pl-md-3">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11 border-top">--}}
{{--                                                    <div class="row pt-3 justify-content-between">--}}
{{--                                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-11">--}}
{{--                                                            <p>--}}
{{--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- 注目 -->--}}
{{--                                <div class="tab-pane fade" id="nav-attention" role="tabpanel" aria-labelledby="nav-attention-tab">--}}
{{--                                    <div class="card">--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-1 pl-1 pl-md-3">--}}
{{--                                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-11">--}}
{{--                                                    <div class="row justify-content-between">--}}
{{--                                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-11">--}}
{{--                                                            <p>--}}
{{--                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="row">--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-comment"></i> 12</div>--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-heart"></i> 11</div>--}}
{{--                                                        <div class="col-3 col-md-2"><i class="far fa-handshake"></i> 5</div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <nav class="pt-4" aria-label="Page navigation example">--}}
{{--                                <ul class="pagination justify-content-center">--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                            <span aria-hidden="true">&laquo;</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#" aria-label="Next">--}}
{{--                                            <span aria-hidden="true">&raquo;</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="ranking col-12 col-md-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="card-title">ユーザランキング(いいね)</h5>--}}
{{--                        </div>--}}
{{--                        <ul class="list-group list-group-flush">--}}
{{--                            <li class="list-group-item">1位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">2位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">3位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">4位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">5位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">6位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">7位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">8位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">9位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                            <li class="list-group-item">10位<img class="ml-2 mr-2" src="/images/user-circle-solid.svg" width="20" height="20" alt="">User Name</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- 新規投稿ダイアログ -->--}}
{{--        <div class="modal" id="postNewModal" tabindex="-1" role="dialog" aria-labelledby="postNewModal" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="postNewModalLabel">新規投稿</h5>--}}
{{--                        <!-- 閉じるアイコン -->--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body p-4">--}}
{{--                        <div class="container-fluid px-0">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-1">--}}
{{--                                    <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="30" height="30">--}}
{{--                                </div>--}}
{{--                                <div class="col-11 pl-2">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <textarea class="form-control" id="inputTextarea" rows="7" placeholder="投稿しよう"></textarea>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check mb-2">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" id="check1">--}}
{{--                                        <label class="form-check-label" for="check1">Give <small>Giveな投稿にはチェック</small></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>--}}
{{--                        <button type="button" class="btn btn-primary w-25">投稿</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- コメントダイアログ -->--}}
{{--        <div class="modal" id="postCommentModal" tabindex="-1" role="dialog" aria-labelledby="postCommentModal" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <!-- 閉じるアイコン -->--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body p-4">--}}
{{--                        <div class="container-fluid px-0">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-1 pl-1 pl-md-3">--}}
{{--                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                    <div class="v_line_fix"></div>--}}
{{--                                </div>--}}
{{--                                <div class="col-11">--}}
{{--                                    <div class="row justify-content-between">--}}
{{--                                        <div class="col-7 pr-1"><a href="#" class="card-link text-dark">Yoshitaka Shimazu</a></div>--}}
{{--                                        <div class="col-5 pr-0"><p>4月10日 10:32</p></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-11">--}}
{{--                                            <p>--}}
{{--                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row pt-3">--}}
{{--                                <div class="col-1 pl-1 pl-md-3">--}}
{{--                                    <img src="/images/user-circle-solid.svg" width="30" height="30" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-11">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <textarea class="form-control" id="inputTextarea" rows="7" placeholder="コメントする"></textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-check mb-2">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="check1">--}}
{{--                                                <label class="form-check-label" for="check1">Give <small>Giveな投稿にはチェック</small></label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">閉じる</button>--}}
{{--                        <button type="button" class="btn btn-primary w-25">返信</button>--}}
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
