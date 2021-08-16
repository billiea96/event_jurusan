<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Registrasi Hosting</h1>
                    <hr class="small">
                    <span class="subheading">Daftarkan Diri Anda Untuk Peminjaman Hosting Jurusan</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <div class="col-sm-12">
                    <?php if(session('status')): ?>
                    <div id="success">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <strong><?php echo e(session('status')); ?></strong>
                        </div>
                    </div>
                    <?php endif; ?>
                    <legend><h3 style="color: tomato;">Isi Data Peminjaman</h3></legend>
                    <form class="form-horizontal" action="<?php echo e(url('share-hosting')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="col-sm-offset-10 col-sm-1"></div><br>
                            <fieldset>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="mahasiswa_id">Peminjam:</label>
                                <div class="col-sm-5">
                                    <select name="mahasiswa_id" class="form-control" placeholder="Laboratorium" id="mahasiswa_id" required data-validation-required-message="Please choose Jabatan.">
                                        <option value="">[Pilih Mahasiswa]</option>
                                        <?php foreach($mahasiswas as $mahasiswa): ?>
                                        <option value="<?php echo e($mahasiswa->id); ?>">(<?php echo e($mahasiswa->nrp); ?>) <?php echo e($mahasiswa->nama); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="karyawan_id">Supervisor:</label>
                                <div class="col-sm-5">
                                    <select name="karyawan_id" class="form-control" placeholder="Laboratorium" id="karyawan_id" required data-validation-required-message="Please choose Jabatan.">
                                        <option value="">[Pilih Supervisor]</option>
                                        <?php foreach($karyawans as $karyawan): ?>
                                        <option value="<?php echo e($karyawan->id); ?>">(<?php echo e($karyawan->nip); ?>) <?php echo e($karyawan->nama); ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="keterangan">Keterangan Peminjaman:</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Tulis Keterangan" required></textarea>
                                </div>
                            </div>
                            </fieldset>
                        <div class="col-sm-offset-4 col-sm-5">
                            <div class="col-sm-offset-3 col-sm-1">
                                <input class="btn btn-success btn-md" type="submit" name="simpan" value="Simpan">
                            </div>
                        </div>
                    </form><br><br>
                    <legend><h3 style="color: tomato;">Status Peminjaman Share Hosting Anda</h3></legend>
                    <div class="col-sm-12 table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>NIP Supervisor</th>
                                    <th>Nama Supervisor</th>
                                    <th>Tanggal Permintaan</th>
                                    <th>Tanggal Validasi Supervisor</th>
                                    <th>Tanggal Validasi Kajur</th>
                                    <th>Tanggal Akhir Peminjaman</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($sharehostings as $sharehosting): ?>
                                <tr>
                                    <td><?php echo e($sharehosting->karyawan->nip); ?></td>
                                    <td><?php echo e($sharehosting->karyawan->nama); ?></td>
                                    <td><?php echo e($sharehosting->tgl_permintaan); ?></td>
                                    <td><?php echo e($sharehosting->tgl_validasi_supervisor); ?></td>
                                    <td><?php echo e($sharehosting->tgl_validasi_kajur); ?></td>
                                    <td><?php echo e($sharehosting->tgl_akhir_peminjaman); ?></td>
                                    <td><?php echo e($sharehosting->status_peminjaman); ?></td>
                                    <td><?php echo e($sharehosting->keterangan); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>