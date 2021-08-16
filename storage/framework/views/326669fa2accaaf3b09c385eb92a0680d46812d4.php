<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="<?php echo e(asset('js/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">
    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
    });
</script>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Master Post <small>Kegiatan</small>
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

		<form action="<?php echo e(url('post')); ?>" method="POST">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="form-group">
				<strong>Judul: </strong><input required="required" value="<?php echo e(old('judul')); ?>" placeholder="Judul Post" type="text" name = "judul" class="form-control" />
			</div>
			<div class="form-group">
				<strong>Subjek: </strong><input required="required" value="<?php echo e(old('subjek')); ?>" placeholder="Subjek Post" type="text" name = "subjek" class="form-control" />
			</div>
			<div class="form-group">
				<textarea name='isi' class="form-control"><?php echo e(old('isi')); ?></textarea>
			</div>
            <input type="hidden" name="kategori_id" value="3">
			<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
		</form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layoutadmin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>