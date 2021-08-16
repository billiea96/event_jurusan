<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Visi & Misi</h1>
                    <hr class="small">
                    <span class="subheading">This is What We Do.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-13">
            <div class="container">
                <div class="col-sm-6">
                    <legend><h3 style="color: tomato;">Visi</h3></legend>
                    <p class="text-justify">Menjadi program studi Teknik Informatika yang ekselen dalam bidang keilmuan teknik informatika dengan menghasilkan lulusan serta karya yang bermanfaat bagi masyarakat.</p>
                </div>
                <div class="col-sm-6">
                    <legend><h3 style="color: tomato;">Misi</h3></legend>
                    <ul class="text-justify">
                        <li>Menghasilkan lulusan unggul pada jenjang pendidikan tinggi bidang keilmuan teknik informatika yang memiliki karakter, kompetensi keilmuan dan keterampilan untuk memajukan masyarakat bisnis dan industri.</li>
                        <li>Memajukan penelitian dan penerapan keilmuan sesuai dengan perannya sebagai mitra masyarakat bisnis dan industri serta pemerintah.</li>
                        <li>Memfasilitasi terciptanya komunitas akademis yang memberikan manfaat bagi masyarakat umum.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>