@section('menubar')
    <nav class="navbar navbar-expand-md col-12 col-md-2 navbar-dark bg-dark align-items-md-start menubar">
        <div class="row">
            <div class="col-md-12">
                <a class="navbar-brand pl-md-3" href="{{ url('/') }}">
                    {{ config('app.name', 'Mentor') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 12rem">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column pl-md-3">
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white active" href="{{ route('post') }}">
                                <i class="fas fa-home pr-3"></i>
                                {{ __('ホーム') }}
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="{{ route('post') }}">
                                <i class="fas fa-pen-square pr-3"></i>
                                {{ __('投稿') }}
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="{{ route('matching') }}">
                                <i class="fas fa-people-carry pr-3"></i>
                                {{ __('マッチング') }}
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="{{ route('mentor') }}">
                                <i class="fas fa-people-carry pr-3"></i>
                                {{ __('メンター') }}
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="{{ route('profile') }}">
                                <i class="fas fa-user pr-3"></i>
                                {{ __('ユーザー') }}
                            </a>
                        </li>
                        <li class="nav-item pb-2">
                            <a class="nav-link text-white" href="#">  <!-- ToDo:管理者画面へのアクセス指定 -->
                                <i class="fas fa-user pr-3"></i>
                                {{ __('管理者') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt pr-3"></i>
                                {{ __('ログアウト') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endsection
