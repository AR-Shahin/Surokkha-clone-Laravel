<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @stack('css')

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        ul {
            list-style: none;
        }

        section,
        footer {
            padding: 45px 0;
        }

        footer {
            background: #bdc3c7;
            color: #fff
        }

        #hero_section {
            background: #ecf0f1;
            height: 85vh;
        }

        .hero_card {
            padding: 150px 0;
        }

    </style>
    <title>@yield('title')</title>
</head>

<body>
    <header class="navbar-light bg-light py-1">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <h5 class="mt-3">Vaccine</h5>
                    {{-- <img src="{{ asset('img/logo-f.5c608b98.png') }}" alt=""> --}}
                </div>
                <div class="col-md-8 align-self-center align-items-center" style="text-align: center">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">হোম</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('registration') }}">নিবন্ধন</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">টিকা কার্ড</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">টিকা সনদ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('status') }}">টিকা
                                        সনদ যাচাই</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('app_content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-2 align-self-center">
                    <img src="{{ asset('img/logo-f.5c608b98.png') }}" alt="">
                </div>
                <div class="col-md-3 mb-2">
                    <ul>
                        <li><a href="" class="text-light">জিজ্ঞাসা</a></li>
                        <li><a href="" class="text-light"> সহায়িকা</a></li>
                        <li><a href="" class="text-light">প্রাইভেসি পলিসি</a></li>
                        <li><a href="" class="text-light"> টার্মস অফ সার্ভিসেস</a></li>
                        <li><a href="" class="text-light">অন্যান্য সহযোগী প্রতিষ্ঠানসমূহ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-2 align-self-center">
                    <h6>কারিগরি সহায়তায় - তথ্য ও যোগাযোগ প্রযুক্তি অধিদপ্তর </h6>
                    <img src="{{ asset('img/foo1.png') }}" alt="">
                </div>
                <div class="col-md-3 mb-2 align-self-center">
                    <h6>সহযোগী সংস্থাসমূহ - </h6>
                    <img src="{{ asset('img/foo2.png') }}" alt="">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script>
        const $$ = (el) => document.querySelector(el);
        const log = (el = 'ok') => console.log(el);
        const base_url = window.location.origin
    </script>
    @stack('script')
</body>

</html>
