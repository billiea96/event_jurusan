<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Master Data <small>Laboratorium</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-sm-12">
        <?php if(session('status')): ?>
        <div id="success">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong><?php echo e(session('status')); ?></strong>
            </div>
        </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
        <div id="success">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong><?php echo e(session('error')); ?></strong>
            </div>
        </div>
        <?php endif; ?>
        <form class="form-horizontal" action="<?php echo e(url('laboratorium')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="col-sm-offset-10 col-sm-1"></div><br>
            <div class="col-sm-offset-3 col-sm-6">
                <fieldset>
                <legend>Tambah Lab baru</legend>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="nama">Nama:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Laboratorium" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="deskripsi">Deskripsi:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Tulis Deskripsi" required></textarea>
                    </div>
                </div>
                </fieldset>
            </div>
            <div class="col-sm-offset-4 col-sm-5">
                <div class="col-sm-offset-10 col-sm-1">
                    <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan">
                </div>
            </div>
        </form>
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
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Task</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($labs as $lab): ?>
                        <tr>
                            <td><?php echo e($lab->id); ?></td>
                            <td><?php echo e($lab->nama); ?></td>
                            <td class="text-justify"><?php echo e($lab->deskripsi); ?></td>
                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo e($lab->id); ?>">Edit</button></td>
                            <!-- Modal -->
                            <div id="<?php echo e($lab->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Laboratorium</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 table-responsive">
                                                    <form class="form-horizontal" id="formUpdate<?php echo e($lab->id); ?>" action="<?php echo e(route('laboratorium.update', $lab->id)); ?>" method="POST">
                                                        <?php echo e(method_field("PUT")); ?>

                                                        <?php echo csrf_field(); ?>

                                                        <div class="col-sm-offset-10 col-sm-1"></div><br>
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <fieldset>
                                                                <legend>Ubah Data Laboratorium</legend>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="nama">Nama:</label>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Laboratorium" value="<?php echo e($lab->nama); ?>" required>
                                                                    </div>
                                                                </div><br/>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3" for="deskripsi">Deskripsi:</label>
                                                                    <div class="col-sm-9">
                                                                        <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Tulis Deskripsi" required><?php echo e($lab->deskripsi); ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="col-sm-12">
                                                <div class="col-sm-offset-10 col-sm-1">
                                                    <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan" form="formUpdate<?php echo e($lab->id); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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