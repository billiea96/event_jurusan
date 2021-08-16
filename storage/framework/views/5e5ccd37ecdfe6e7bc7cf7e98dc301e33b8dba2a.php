<?php $__env->startSection('header'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/berita.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Kegiatan</h1>
                    <hr class="small">
                    <span class="subheading">Berisi Info Kegiatan-Kegiatan Di Jurusan</span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('post.layoutisi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>