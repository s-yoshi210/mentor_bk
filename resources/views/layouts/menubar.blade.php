@section('menubar')
    <nav class="navbar navbar-expand-md col-12 col-md-2 navbar-dark bg-dark align-items-md-start menubar">
        <div class="row">
            <div class="col-md-12">
                <a class="navbar-brand pl-md-3" href="#">Mentor</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 12rem">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column pl-md-3">
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white active" href="/post">
                                <i class="fas fa-home pr-3"></i>
                                ホーム
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="/post">
                                <i class="fas fa-pen-square pr-3"></i>
                                投稿
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="/matching">
                                <i class="fas fa-people-carry pr-3"></i>
                                マッチング
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="/mentor">
                                <i class="fas fa-people-carry pr-3"></i>
                                メンター
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="/profile">
                                <i class="fas fa-user pr-3"></i>
                                ユーザー
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="#">
                                <i class="fas fa-user pr-3"></i>
                                管理者
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="fas fa-sign-out-alt pr-3"></i>
                                ログアウト
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endsection
