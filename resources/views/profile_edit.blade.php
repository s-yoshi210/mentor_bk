@extends('layouts.common')

@section('title', 'プロフィール編集')
@section('pageCss')
    <link rel="stylesheet" href="css/profile_edit.css">
@endsection

@include('layouts.head')
@include('layouts.menubar')

@section('content')
<div class="container form-user">
    <form action="">
        <h3 class="text-center">プロフィール編集</h3>
        <div class="profile_image pt-3 text-center">
            <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="100" height="100">
            <div class="browse-button">
                <i class="fa fa-pencil-alt"></i>
                <input class="browse-input" type="file" required name="UploadedFile" id="UploadedFile"/>
            </div>
        </div>
        <div class="form-group">
            <label for="inputUserName">ユーザー名</label>
            <input type="text" class="form-control" id="inputUserName" placeholder="ユーザー名を入力">
        </div>
        <div class="form-group">
            <label for="inputTextarea">自己紹介</label>
            <textarea class="form-control" id="inputTextarea" rows="5" placeholder="自己紹介を入力"></textarea>
        </div>
        <div class="form-group">
            <label for="inputQiitaAccount">Qiitaアカウント</label>
            <input type="text" class="form-control" id="inputQiitaAccount" placeholder="Qiitaアカウントを入力">
        </div>
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-block mt-4">保存</button>
                </div>
            </div>
        </div>
    </form>
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
{{--    <link rel="stylesheet" href="css/profile_edit.css">--}}
{{--    <link rel="stylesheet" href="css/common.css">--}}

{{--    <title>プロフィール編集</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <header class="py-5">--}}
{{--        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary d-print">--}}
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

{{--    <main class="form-user">--}}
{{--        <div class="container">--}}
{{--            <form action="">--}}
{{--                <h3 class="text-center">プロフィール編集</h3>--}}
{{--                <div class="profile_image pt-3 text-center">--}}
{{--                    <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="100" height="100">--}}
{{--                    <div class="browse-button">--}}
{{--                        <i class="fa fa-pencil-alt"></i>--}}
{{--                        <input class="browse-input" type="file" required name="UploadedFile" id="UploadedFile"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputUserName">ユーザー名</label>--}}
{{--                    <input type="text" class="form-control" id="inputUserName" placeholder="ユーザー名を入力">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputTextarea">自己紹介</label>--}}
{{--                    <textarea class="form-control" id="inputTextarea" rows="5" placeholder="自己紹介を入力"></textarea>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="inputQiitaAccount">Qiitaアカウント</label>--}}
{{--                    <input type="text" class="form-control" id="inputQiitaAccount" placeholder="Qiitaアカウントを入力">--}}
{{--                </div>--}}
{{--                <div class="row justify-content-center">--}}
{{--                    <div class="col-5">--}}
{{--                        <div class="form-group">--}}
{{--                            <button type="button" class="btn btn-success btn-block mt-4">保存</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </main>--}}

{{--    <footer class="py-4 bg-primary text-light">--}}
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
