<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Lab. Keahlian</h1>
                    <hr class="small">
                    <span class="subheading">Daftar Lab. Keahlian di Jurusan Teknik Informatika Universitas Surabaya</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-13">
            <div class="container">
                <div class="col-sm-12">
                    <div class="col-sm-12 text-justify">
                        <ol type="1">
                            <?php foreach($labs as $lab): ?>
                            <li style="font-weight: 800;">&nbsp;&nbsp;<?php echo e($lab->nama); ?></li>
                            <p><?php echo e($lab->deskripsi); ?></p>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>