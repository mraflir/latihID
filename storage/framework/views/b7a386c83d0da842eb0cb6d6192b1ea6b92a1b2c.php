

<?php $__env->startSection('css'); ?>
<style>
    /* Carousel */
    .jumboSlider {
        max-height: 380px;
        width: 100%;
        height: auto;
    }

    .carousel-indicators li {
        width: 10px;
        height: 10px;
        border-radius: 100%;
        background-color: black;
        opacity: .25;
    }

    .carousel-indicators li.active {
        background-color: #d67004;
    }

    /* Kenapa */
    .title-heading {
        padding: 35px 0px;
        text-align: center;
        margin: unset;
    }

    .caption {
        font-weight: bold;
        font-size: 18px;
    }

    .tema {
        max-width: 100%;
        height: auto;
    }

    /* list modul */
    .contModul {
        border-radius: 7px;
        min-height: 100px;
        width: auto;
    }

    .contModul2 {
        border-radius: 7px;
        min-height: 1100px;
        width: auto;
    }

    .btn-primary {
        padding-left: 20px !important;
        padding-right: 20px !important;
        border-radius: 20px;
        background-color: #163f5b;
        color: white !important;
        font-size: .8rem;
        cursor: pointer;
        border-color: #163f5b;
    }

    .card {
        max-height: 290px;
        border-radius: 11px;
    }

    .card-img-top {
        max-width: 100%;
        height: auto;
        max-height: 170px;
    }

    .judulCard {
        font-weight: bold;
        font-size: 22px;
    }

    .harga {
        color: #FF6621;
    }

    /* kolaborasi */
    .kolaborasi1 {
        color: white;
        text-shadow: 2px 2px 4px #000000;
        height: 300px;
        background-image: url('https://loremflickr.com/500/300');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .kolaborasi2 {
        color: white;
        text-shadow: 2px 2px 4px #000000;
        height: 300px;
        background-image: url('http://placecorgi.com/500/300');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .judul {
        font-weight: bold;
        font-size: 24px;
    }

    /* footer */
    .judulFooter {
        font-weight: bold;
    }

    .ulFooter {
        list-style: none;
        color: black;
    }

    .judulFooter.ulFooter a {
        color: black;
        font-weight: normal;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner jumboSlider">
        <div class="carousel-item active">
            <img class="d-block w-100" src="http://placecorgi.com/1000/380" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://placecorgi.com/1000/380" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://placecorgi.com/1000/380" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Kenapa memilih latih id -->
<section id=kenapa>
    <div class="title pt-4">
        <div class="title-heading">
            <h1>Kenapa memilih LatihID?</h1>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-start text-center text-md-left" id="about-row">
            <div class="col-md-4 mt-3">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="caption my-2">Fokus pada UMKM</p>
                <p>Konten Berfokus untuk Pengembangan Bisnis UMKM Indonesia</p>
            </div>
            <div class="col-md-4 mt-3">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="caption my-2">Bebas Akses Dimana Saja</p>
                <p>Modul Pelatihan Dapat Diakses dari Perangkat Apa Saja Melihat Website</p>
            </div>
            <div class="col-md-4 mt-3">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="caption my-2">Akses Seumur Hidup</p>
                <p>Akses Seumur Hidup dan Satu Login untuk Semua Kursus Pelatihan yang Ada</p>
            </div>
            <div class="col-md-4 mt-3">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="caption my-2">Akses Kapan Saja</p>
                <p>Akses 24/7 untuk Semua Modul Pelatihan</p>
            </div>
            <div class="col-md-4 mt-3">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="caption my-2">Akses Gratis</p>
                <p>Akses Gratis untuk Semua Modul Pelatihan</p>
            </div>
            <div class="col-md-4 mt-3">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="caption my-2">Konten yang Praktis</p>
                <p>Pelatihan Praktis yang Dapat Langsung Diterapkan</p>
            </div>
        </div>
    </div>
</section>

<!-- list Modul 1 -->
<!-- list 1 card 1 -->
<section id="modul1">
    <div class="container contModul my-5" style="background-color: #D7EFF4;">
        <div class="row justify-content-center">
            <div class="col-10 col-md-3 text-center text-md-left order-md-first py-3 align-self-center">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="judulCard my-2">Kelas Gratis Populer</p>
                <a class="btn btn-primary">Lihat Modul Lainnya</a>
            </div>
            <div class="col-10 col-md-8">
                <div class="carousel-card">
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- list 1 card 2 -->
    <div class="container contModul my-5" style="background-color: #d6d2c4;">
        <div class="row justify-content-center">
            <div class="col-10 col-md-3 text-center text-md-left order-md-first py-3 align-self-center">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="judulCard my-2">Kelas LatihID Terbaru</p>
                <p>LatihID selalu berkomitment untuk memberikan pelatihan-pelatihan terbaru yang sesuai dengan trend, pasar, dan kondisi nyata di lapangan.</p>
                <a class="btn btn-primary">Lihat Modul Lainnya</a>
            </div>
            <div class="col-10 col-md-8">
                <div class="carousel-card">
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- list 1 card 3 -->
    <div class="container contModul my-5" style="background-color: #ffe7dc;">
        <div class="row justify-content-center">
            <div class="col-10 col-md-3 text-center text-md-left order-md-first py-3 align-self-center">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="judulCard my-2">Expert Class</p>
                <a class="btn btn-primary">Lihat Kelas Lainnya</a>
            </div>
            <div class="col-10 col-md-8">
                <div class="carousel-card">
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- list Modul 2 -->
<!-- list 2 card 1 -->
<section id="modul2">
    <div class="container my-2">
        <div class="row justify-content-center">
            <div class="col-10 col-md-4">
                <div class="container contModul2 my-5" style="background-color: #D7EFF4">
                    <div class="row justify-content-center">
                        <div class="col-10  text-center text-md-left order-md-first py-3 align-self-center">
                            <p class="judulCard my-2">LatihID Modul</p>
                            <a class="btn btn-primary">Lihat Modul Lainnya</a>
                        </div>
                        <div class="col-10">
                            <div class="carousel-cardVertical">
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list 2 card 2 -->
            <div class="col-10 col-md-4">
                <div class="container contModul2 my-5" style="background-color: #D7EFF4;">
                    <div class="row justify-content-center">
                        <div class="col-10  text-center text-md-left order-md-first py-3 align-self-center">
                            <p class="judulCard my-2">LatihID Talks</p>
                            <a class="btn btn-primary">Lihat Talks Lainnya</a>
                        </div>
                        <div class="col-10">
                            <div class="carousel-cardVertical">
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- list 2 card 2 -->
            <div class="col-10 col-md-4">
                <div class="container contModul2 my-5" style="background-color: #D7EFF4;">
                    <div class="row justify-content-center">
                        <div class="col-10  text-center text-md-left order-md-first py-3 align-self-center">
                            <p class="judulCard my-2">LatihID PETA</p>
                            <a class="btn btn-primary">Lihat PETA Lainnya</a>
                        </div>
                        <div class="col-10">
                            <div class="carousel-cardVertical">
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                                <div class="card my-4 mx-3">
                                    <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="harga">Gratis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- list Modul 3 -->
<!-- list 3 card 1 -->
<section id="modul3">
    <div class="container contModul my-5" style="background-color: #d6d2c4;">
        <div class="row justify-content-center">
            <div class="col-10 col-md-3 text-center text-md-left order-md-first py-3 align-self-center">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="judulCard my-2">Kelas Memulai Bisnis</p>
                <p>Bingung mau mulai Bisnis ? Sudah punya Ide tapi belum tahu cara implementasi bisnis nya? Gabung di kelas memulai bisnis sekarang !</p>
                <a class="btn btn-primary">Lihat Modul Lainnya</a>
            </div>
            <div class="col-10 col-md-8">
                <div class="carousel-card">
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- list 3 card 2 -->
    <div class="container contModul my-5" style="background-color: #d6d2c4;">
        <div class="row justify-content-center">
            <div class="col-10 col-md-3 text-center text-md-left order-md-first py-3 align-self-center">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="judulCard my-2">Kelas Pemasaran</p>
                <p>Ingin bisnismu lebih dikenal oleh pasar ? Ikuti kelas tentang pemasaran dan dapatkan manfaatnya dalam bisnismu !</p>
                <a class="btn btn-primary">Lihat Modul Lainnya</a>
            </div>
            <div class="col-10 col-md-8">
                <div class="carousel-card">
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- list 3 card 3 -->
    <div class="container contModul my-5" style="background-color: #d6d2c4;">
        <div class="row justify-content-center">
            <div class="col-10 col-md-3 text-center text-md-left order-md-first py-3 align-self-center">
                <img src="http://placecorgi.com/80" alt="" class="img-fluid tema" />
                <p class="judulCard my-2">Kelas Manajemen Operasional</p>
                <p>Belajar Manajemen Operasional menjadi mudah dengan ikut kelas-kelas di sini! Bisa kamu praktekan langsung di Usahamu.</p>
                <a class="btn btn-primary">Lihat Modul Lainnya</a>
            </div>
            <div class="col-10 col-md-8">
                <div class="carousel-card">
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                    <div class="card my-4 mx-3">
                        <img class="card-img-top" src="http://placecorgi.com/200/170" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="harga">Gratis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- kolaborasi -->
<section id="kolaborasi">
    <div class="container-fluid my-5">
        <div class="row justify-content-center text-center text-md-left">
            <div class="col-12 col-md-6 kolaborasi1 pl-4 pr-0 pt-5">
                <div class="col-6">
                    <p class="judul my-2">Menjadi Pembicara</p>
                    <p>Kami membuka kesempatan untuk individu/lembaga yang ingin menjadi pemateri pada LatihID Modul, Talks, ataupun Pojok Cerita (PETA).</p>
                    <a class="btn btn-primary-oren">Ayo Kolaborasi</a>
                </div>
            </div>
            <div class="col-12 col-md-6 kolaborasi2 pl-4 pr-0 pt-5">
                <div class="col-6">
                    <p class="judul my-2">Menjadi Mitra</p>
                    <p>Kami menerima individu/lembaga yang ingin bekerja sama untuk jenis kemitraan lainnya, seperti media partner.</p>
                    <a class="btn btn-primary-oren">Ayo Kolaborasi</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<section id="footer">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-2">
                <div class="text-center">
                    <img src="https://design.upanastudio.com/latih_id_asset/Aset%20LatihID/Logo%20LatihID%20-%20New/NEW%20LOGO%20LATIHID%20Color.png" width="70" alt="" class="img-fluid tema" />
                </div>
                <p>LatihID adalah suatu platform penyedia
                    pelatihan gratis dan berkualitas untuk
                    UMKM di Indonesia</p>
            </div>
            <div class="col-2">
                <ul class="judulFooter ulFooter"> Menu
                    <li> <a href="">Beranda</a></li>
                    <li> <a href="">Modul</a></li>
                    <li> <a href="">Tentang Kami</a></li>
                    <li> <a href="">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="col-2">
                <ul class="judulFooter ulFooter"> Info
                    <li> <a href="">FAQ</a></li>
                    <li> <a href="">Ayo Kolaborasi</a></li>
                    <li> <a href="">Kebijakan Privasi</a></li>
                    <li> <a href="">Syarat Penggunaan</a></li>
                </ul>
            </div>
            <div class="col-2">
                <ul class="judulFooter ulFooter"> Ikuti Kami
                    <li> <a href="https://www.youtube.com/channel/UCPbOX3w8G4_dwOMDNl97PTw" target="_blank" title="YouTube">
                            <i class="fab fa-youtube" aria-hidden="true"></i> LatihID Official
                        </a> </li>
                    <li> <a href="https://www.instagram.com/is_expo/" target="_blank" title="Instagram">
                            <i class="fab fa-instagram" aria-hidden="true"></i> @latihidofficial
                        </a> </li>
                    <li> <a href="https://www.instagram.com/is_expo/" target="_blank" title="Facebook">
                            <i class="fab fa-facebook" aria-hidden="true"></i> Latih ID
                        </a> </li>
                </ul>
            </div>
            <div class="col-2">
                <form>
                    <div class="judulFooter text-center">Jadi yang pertama mengetahui
                        update terbaru dari kami !</div>
                    <div class="form-group">
                        <input type="name" class="form-control" id="InputName1" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        <small id="emailHelp" class="form-text text-muted ">We'll never share your email with anyone else.</small>
                    </div>
                    <button type="submit" class="btn btn-primary-oren">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="text-center pb-3">
            © 2020 Copyright LatihID
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rafli r\LatihID\resources\views/home.blade.php ENDPATH**/ ?>