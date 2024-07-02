<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Казанский завод пожарного оборудования</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="{{asset('images/logo_mini.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/38df525d0f.js" crossorigin="anonymous"></script>
</head>
<body>

    @include('includes.header')

    <div class="container">
        @include('includes.menu')

        @yield('link_box')
        <main>
            <aside>
                @include('includes.aside')
            </aside>
            <article>
                @yield('content')
            </article>
        </main>
    </div>

    @include('includes.footer')

    <a href="#" class="scrollup">
        <i class="fa fa-chevron-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
