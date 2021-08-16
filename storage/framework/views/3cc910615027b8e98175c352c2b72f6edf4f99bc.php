<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Mata Kuliah</h1>
                    <hr class="small">
                    <span class="subheading">Daftar Mata Kuliah di Jurusan Teknik Informatika Universitas Surabaya</span>
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
                    <div class="col-sm-12 text-justify table-responsive">
                        <ol>
                        <?php foreach($labs as $lab): ?>
                            <li style="font-weight: 800;">&nbsp;&nbsp;<?php echo e($lab->nama); ?></li>
                            <table class="table table-stripped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td>Kode</td>
                                        <td>Nama</td>
                                        <td>Jumlah SKS</td>
                                        <td>Deskripsi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($lab->matakuliahs as $matakuliah): ?>
                                    <tr>
                                        <td><?php echo e($matakuliah->kode_mk); ?></td>
                                        <td><?php echo e($matakuliah->nama); ?></td>
                                        <td><?php echo e($matakuliah->jumlah_sks); ?></td>
                                        <td><?php echo e($matakuliah->deskripsi); ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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