<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="carousel slide" data-ride="carousel" id="myCarousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?php echo e(asset('img/post-bg.jpg')); ?>" alt="Chania">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="site-heading">
                            <h1>Selamat Datang di Website Official</h1>
                            <hr class="large">
                            <span class="lead">Jurusan Teknik Informatika Universitas Surabaya</span>
                            <p><a class="btn btn-sm btn-primary" href="<?php echo e(url('/login')); ?>" role="button">Login Sekarang!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <img class="second-slide" src="<?php echo e(asset('img/home-bg.jpg')); ?>" alt="Chania">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="site-heading">
                            <h1>Ingin Tahu Berita Terkini di Jurusan Ini?</h1>
                            <hr class="large">
                            <span class="lead">Klik Tombol di Bawah Untuk Melihat Berita!</span>
                            <p><a class="btn btn-sm btn-danger" href="#" role="button">Lihat Berita Jurusan</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <img class="third-slide" src="<?php echo e(asset('img/contact-bg.jpg')); ?>" alt="Flower">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="site-heading">
                            <h1>Ketahui Lebih Banyak Tentang Jurusan Ini</h1>
                            <hr class="large">
                            <span class="lead">Klik Tombol di Bawah Untuk Melihat Profil Jurusan Ini</span>
                            <p><a class="btn btn-sm btn-success" href="<?php echo e(url('/about-us')); ?>" role="button">Tentang Kami</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-13">
            <div class="container">
                <div class="col-sm-8">
                    <legend><h3 style="color: tomato;">Berita Terbaru</h3></legend>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Man must explore, and this is exploration at its greatest
                            </h2>
                            <h3 class="post-subtitle">
                                Problems look mighty small from 150 miles up
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                            </h2>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Science has not yet mastered prophecy
                            </h2>
                            <h3 class="post-subtitle">
                                We predict too much for the next year and yet far too little for the next ten.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                Failure is not an option
                            </h2>
                            <h3 class="post-subtitle">
                                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                            </h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                    </div>
                    <hr>
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Lihat Semua &rarr;</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <legend><h3 style="color: tomato;">Kalender Kegiatan</h3></legend>

                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>