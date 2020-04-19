<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/post_new.css">
    <link rel="stylesheet" href="css/common.css">

    <title>投稿一覧</title>
</head>
<body>
    <header class="py-5">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary d-print">
            <a class="navbar-brand" href="#">Mentor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end pr-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#"><img src="/images/user-circle-solid.svg" width="30" height="30" alt=""></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            UserName
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">ログアウト</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="form-new">
        <div class="container">
            <form action="">
                <h3 class="text-center">新規投稿</h3>
                <div class="row mt-5">
                    <div class="col-1">
                        <img class="user_img" src="/images/user-circle-solid.svg" alt="User Image" width="30" height="30">
                    </div>
                    <div class="col-11">
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="" id="check1">
                            <label class="form-check-label" for="check1">Give <small>Giveな投稿にはチェック</small></label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="inputTextarea" rows="5" placeholder="投稿しよう"></textarea>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <div class="form-group">
                                    <button type="button" class="btn btn-success btn-block mt-4">投稿</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer class="py-4 fixe bg-primary text-light">
        <div class="container text-center text-white">
            <ul class="nav justify-content-center mb-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Top</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contact</a>
                </li>
            </ul>
            <p><small>Copyright &copy;2020 Mr. YOSHI, ALL Rights Reserved.</small></p>
        </div>
    </footer>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
