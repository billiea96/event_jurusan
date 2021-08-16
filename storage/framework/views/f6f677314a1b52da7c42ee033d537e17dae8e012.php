<?php $__env->startSection('content'); ?>
<header class="intro-header" style="background-image: url('img/berita.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>a</h1>
                    <hr class="small">
                    <span class="subheading">a</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1">
            <?php echo $post->isi; ?>

            <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#"></a> pada </p>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>