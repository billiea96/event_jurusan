<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Feedback <small>Pengunjung</small>
        </h1>
    </div>
</div>
<!-- /.row -->
<hr>
<div class="row">
    <div class="box">
        <div class="col-sm-12">
            <!--container isi-->
            <div class="col-sm-12 table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Nama Pengirim</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($feedbacks as $feedback): ?>
                        <tr>
                            <td><?php echo e($feedback->nama); ?></td>
                            <td><?php echo e($feedback->alamat_email); ?></td>
                            <td><?php echo e($feedback->subject->nama); ?></td>
                            <td><?php echo e($feedback->isi); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<div class="row">

</div>
<!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>