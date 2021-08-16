<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Fasilitas Jurusan</h1>
                    <hr class="small">
                    <span class="subheading">Melayani Dengan Fasilitas Terbaik</span>
                </div>
            </div>
        </div>
    </div>
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