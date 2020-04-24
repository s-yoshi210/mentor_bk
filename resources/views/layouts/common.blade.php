<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>
<body>
    @guest
        <!-- ユーザー認証されていない場合 -->
        <main class="w-100">
            @yield('content')
        </main>
    @else
        <!-- ユーザー認証されている場合 -->
        <div class="container-fluid">
            <div class="row">

                @yield('menubar')

                <main class="col-12 col-md-10 w-100">
                    @yield('content')
                </main>
            </div>
        </div>
    @endguest

    <script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
