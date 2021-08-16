<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/contact-us.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Contact Us</h1>
                    <hr class="small">
                    <span class="subheading">Punya Pertanyaan? Kami Punya Jawabannya.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        	<?php if(session('status')): ?>
        	<div id="success">
        		<div class="alert alert-success">
        			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        			<strong><?php echo e(session('status')); ?></strong>
        		</div>
        	</div>
        	<?php endif; ?>
            <p>Punya pertanyaan seputar jurusan kami? Ingin memberi kritik atau saran? Kirim pesan Anda di bawah ini!</p>
            <form action="<?php echo e(url('feedback')); ?>" method="POST">
            	<?php echo csrf_field(); ?>

                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Name</label>
                        <input type="text" name="nama" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Email Address</label><br>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Subject</label><br>
                        <select name="subject" class="form-control" placeholder="Subject" id="subject" required data-validation-required-message="Please choose your subject.">
                        	<option value="">[Pilih Subject]</option>
                        	<?php foreach($subjects as $subject): ?>
                        	<option value="<?php echo e($subject->id); ?>"><?php echo e($subject->nama); ?></option>
                        	<?php endforeach; ?>
                        </select>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Message</label><br>
                        <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <input type="submit" class="btn btn-default" value="Kirim">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>