<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #hero_section {
            background: #fdcb6e;
            height: 85vh;
        }

        .hero_card {
            padding: 150px 0;
        }

    </style>
    <title>Surokkha</title>
</head>

<body>
    <header class="navbar-light bg-light py-1">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{ asset('img/logo-f.5c608b98.png') }}" alt="">
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
                                    <a class="nav-link active" aria-current="page" href="#">নিবন্ধন</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">টিকা কার্ড</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">টিকা সনদ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">টিকা সনদ যাচাই</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section id="hero_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row hero_card">
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="top_part">
                                        <div class="d-flex">
                                            <div class="" style="margin-right: 50px">
                                                <i class="fa fa-users"></i>
                                            </div>
                                            <div><strong>ভ্যাকসিনের জন্য নিবন্ধন করুন</strong></div>
                                        </div>
                                    </div>
                                    <div class="bottom_part text-center" style="margin-top: 125px">
                                        <h5>নিবন্ধনের সময় প্রয়োজন হবে</h5>
                                        <div class="items mt-3">
                                            <div class="d-flex">
                                                <div class="mx-3">
                                                    <h5><i class="fa fa-contact-card"></i></h5>
                                                    <h6>NID</h6>
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                                <div class="mx-3">
                                                    <h5><i class="fa fa-phone"></i></h5>
                                                    <h6>PHONE</h6>
                                                    <i class="fa fa-angle-right"></i>
                                                </div>
                                                <div class="mx-3">
                                                    <h5><i class="fa fa-info-circle"></i></h5>
                                                    <h6>NID</h6>
                                                    <i class="fa fa-angle-right"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div>
                                        <h4><i class="fa-solid fa-circle-info mr-5 d-inline-block"></i>
                                            <div class="ml-3 d-inline">নিবন্ধন স্ট্যাটাস</div>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div>
                                        <h4> <i class="fa-solid fa-address-card mr-5 d-inline-block"></i>
                                            <div class="ml-3 d-inline">টিকা কার্ড
                                                সংগ্রহ</div>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div>
                                        <h4><i class="fa-solid fa-circle-info mr-5 d-inline-block"></i>
                                            টিকা সনদ সংগ্রহ
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div>
                                        <h4> <span><i
                                                    class="fa-solid fa-circle-info mr-5 d-inline-block"></i></span>সচরাচর
                                            জিজ্ঞাসা
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js">
    </script>

</body>

</html>
