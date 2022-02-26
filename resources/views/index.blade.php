<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mai Thanh Duy An">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Ship4Me</title>


    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body>
    <main>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <span class="fs-4">Ship4Me</span>
                </a>

                @guest
                <div class="col-md-3 text-end">
                    <a href="{{route('login')}}" type="button" class="btn btn-outline-primary me-2">Đăng Nhập</a>
                    <a href="{{route('register')}}" type="button" class="btn btn-primary">Đăng Ký</a>
                </div>
                @endguest
            </header>
        </div>
        <h3 class="text-center">Chúng tôi đang xây dựng lại thế giới tốt đẹp hơn</h3>
        <div class="text-center">
            <img src="{{asset('/img/how-long-build-professional-website.jpg')}}">
        </div>
    </main>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>