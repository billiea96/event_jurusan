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
            <img class="first-slide" src="<?php echo e(asset('img/sharehosting.jpg')); ?>" alt="Chania">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <h1>Pemesanan Hosting</h1>
                        <hr class="large">
                        <span class="lead">Klik Tombol di Bawah Untuk Melakukan Registrasi Share Hosting</span>
                        <p><a class="btn btn-sm btn-primary" href="<?php echo e(url('/share-hosting')); ?>" role="button">Pesan Hosting</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <img class="second-slide" src="<?php echo e(asset('img/berita.jpg')); ?>" alt="Chania">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <h1>Ingin Tahu Berita Terkini di Jurusan Ini?</h1>
                        <hr class="large">
                        <span class="lead">Klik Tombol di Bawah Untuk Melihat Berita!</span>
                        <p><a class="btn btn-sm btn-danger" href="<?php echo e(url('/berita')); ?>" role="button">Lihat Berita Jurusan</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <img class="third-slide" src="<?php echo e(asset('img/informatika.jpg')); ?>" alt="Flower">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <h1>Ketahui Lebih Banyak Tentang Jurusan Ini</h1>
                        <hr class="large">
                        <span class="lead">Klik Tombol di Bawah Untuk Melihat Profil Jurusan Ini</span>
                        <p><a class="btn btn-sm btn-success" href="<?php echo e(url('/about-us')); ?>" role="button">Tentang Kami</a></p>
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
                    <legend><h3 style="color: tomato;">Postingan Terbaru</h3></legend>
                    <?php foreach($posts as $post): ?>
                    <div class="post-preview">
                        <a href="<?php echo e(route('post.show', $post->id)); ?>">
                            <h2 class="post-title">
                                <?php echo e($post->judul); ?>

                            </h2>
                            <h3 class="post-subtitle">
                                <?php echo e($post->subjek); ?>

                            </h3>
                        </a>
                        <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#"><?php echo e($post->user->name); ?></a> pada <?php echo e(date('j F Y, H:i:s', strtotime($post->tgl_posting))); ?></p>
                    </div>
                    <hr>
                    <?php endforeach; ?>
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