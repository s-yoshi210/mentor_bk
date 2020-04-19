<!doctype html>
<html lang="ja">
<head>
    @yield('head')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @yield('menubar')

            <main class="col-12 col-md-10">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
