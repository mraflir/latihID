<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage | LatihID</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <style>
        body {
            font-family: Lato;
        }

        .btn-primary-oren {
            padding: 5px 15px !important;
            background-color: #FF6621;
            color: white !important;
            border-radius: 20px;
        }
    </style>
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Site logo -->

            <a class='navbar__header__logolink' href='https://www.latihid.com?sa=4dadf713-3c2a-4f43-97b6-e9d762c34a59'>
                <img src="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:60/https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1" alt="LatihID" srcset="https://process.fs.teachablecdn.com/ADNupMnWyR7kCWRvm76Laz/resize=height:120/https://www.filepicker.io/api/file/AQCqx5hFT0bNbzcGstV1 2x" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">LatihID Modul</a>
                            <a class="dropdown-item" href="#">LatihID Talks</a>
                            <a class="dropdown-item" href="#">LatihID PETA</a>
                            <a class="dropdown-item" href="#">LatihID MAJU</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Modul Saya
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Progress Modul</a>
                            <a class="dropdown-item" href="#">Pembelian</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ayo Kolaborasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bantuan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">FAQ</a>
                            <a class="dropdown-item" href="#">Kontak Kami</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                    <form class="form-inline">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Masuk</a>
                        </li>
                        <button class="btn btn-primary-oren" type="button">Daftar</button>
                    </form>
                    <!-- User Menu
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class='gravatar' src='https://s.gravatar.com/avatar/0752930cb671424353f09f57e50390e9?d=mm' alt="">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Edit Profil</a>
                                <a class="dropdown-item" href="#">Kelola Langganan</a>
                                <a class="dropdown-item" href="#">Tambah/Ubah Kartu Kredit</a>
                                <a class="dropdown-item" href="#">Kontak</a>
                                <a class="dropdown-item" href="#">Keluar</a>

                            </div>
                        </li> -->
                </ul>
            </div>

        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.carousel-card').slick({
            centerPadding: '40px',
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [{
                    breakpoint: 760,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                }
            ]
        });
        $('.carousel-cardVertical').slick({
            vertical: true,
            centerPadding: '40px',
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            responsive: [{
                    breakpoint: 760,
                    settings: {
                        centerPadding: '40px',
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        centerPadding: '40px',
                    }
                }
            ]
        });
    </script>
</body>

</html><?php /**PATH C:\Users\rafli r\LatihID\resources\views/template.blade.php ENDPATH**/ ?>