<?php $__env->startSection('content'); ?>
<header class="intro-header" style="background-image: url('img/berita.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1><?php echo e($post->judul); ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php echo e($post->subjek); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1 text-justify">
            <?php echo $post->isi; ?>

            <p class="post-meta"><span class="fa fa-user"></span> Dipost oleh <a href="#"><?php echo e($post->user->name); ?></a> pada <?php echo e(date('j F Y, H:i:s', strtotime($post->tgl_posting))); ?></p>
            <hr>
            <div>
                <h2>Tinggalkan Komentar</h2>
            </div>
            <?php if(Auth::guest()): ?>
            <p><a href="<?php echo e(url('/login')); ?>">Login</a> untuk Memberi Komentar</p>
            <?php else: ?>
            <div class="panel-body">
                <form method="post" action="<?php echo e(url('komentar')); ?>">
                    <?php echo csrf_field(); ?>

                    <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                    <div class="form-group">
                        <textarea required="required" placeholder="Masukkan Komentar Disini" name = "isi" class="form-control"></textarea>
                    </div>
                    <input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
                </form>
            </div>
            <?php endif; ?>

            <div>
                <?php if($komentars): ?>
                <ul style="list-style: none; padding: 0">
                    <?php foreach($komentars as $komentar): ?>
                        <li class="panel-body">
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h3><?php echo e($komentar->user->name); ?></h3>
                                    <p><?php echo e($komentar->created_at->format('M d,Y \a\t h:i a')); ?></p>
                                </div>
                                <div class="list-group-item">
                                    <p><?php echo e($komentar->isi); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>