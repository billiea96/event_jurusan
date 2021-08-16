<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Master Data <small>Mahasiswa</small>
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
        <form class="form-horizontal" action="<?php echo e(url('mahasiswa')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="col-sm-offset-10 col-sm-1"></div><br>
            <div class="col-sm-6">
                <fieldset>
                <legend>Data Akun Mahasiswa</legend>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="username">Username:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="password">Password:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="upassword">Ulangi Password:</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="upassword" id="upassword" placeholder="Ulangi Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="email">Alamat Email:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                </fieldset>
            </div>
            <div class="col-sm-6">
                <fieldset>
                <legend>Data Pribadi Mahasiswa</legend>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="nrp">NRP:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nrp" id="nrp" placeholder="NRP" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="namaLengkap">Nama Lengkap:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nama" id="namaLengkap" placeholder="Nama Lengkap Mahasiswa" required>
                    </div>
                </div>
                </fieldset>
            </div>
            <div class="col-sm-12">
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
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($mahasiswas as $mahasiswa): ?>
                        <tr>
                            <td><?php echo e($mahasiswa->nrp); ?></td>
                            <td><?php echo e($mahasiswa->nama); ?></td>
                            <td><?php echo e($mahasiswa->user->name); ?></td>
                            <td><?php echo e($mahasiswa->user->email); ?></td>
                            <td><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo e($mahasiswa->user->id); ?>">Edit</button></td>
                            <!-- Modal -->
                            <div id="<?php echo e($mahasiswa->user->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Mahasiswa</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12 table-responsive">
                                                    <form class="form-horizontal" id="formUpdate<?php echo e($mahasiswa->user->id); ?>" action="<?php echo e(route('mahasiswa.update', $mahasiswa->id)); ?>" method="POST">
                                                        <?php echo e(method_field("PUT")); ?>

                                                        <?php echo csrf_field(); ?>

                                                        <div class="col-sm-offset-10 col-sm-1"></div><br>
                                                        <div class="col-sm-6">
                                                            <fieldset>
                                                            <legend>Data Akun Mahasiswa</legend>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="username">Username:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo e($mahasiswa->user->name); ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="password">Password:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="upassword">Ulangi Password:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="password" class="form-control" name="upassword" id="upassword" placeholder="Ulangi Password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="email">Alamat Email:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo e($mahasiswa->user->email); ?>" required>
                                                                </div>
                                                            </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <fieldset>
                                                            <legend>Data Pribadi Mahasiswa</legend>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="nrp">NRP:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="nrp" id="nrp" placeholder="NRP" value="<?php echo e($mahasiswa->nrp); ?>" disabled required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-5" for="namaLengkap">Nama Lengkap:</label>
                                                                <div class="col-sm-5">
                                                                    <input type="text" class="form-control" name="nama" id="namaLengkap" placeholder="Nama Lengkap Mahasiswa" value="<?php echo e($mahasiswa->nama); ?>" required>
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
                                                    <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan" form="formUpdate<?php echo e($mahasiswa->user->id); ?>">
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