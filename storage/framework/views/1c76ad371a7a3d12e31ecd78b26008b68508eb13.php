<?php $__env->startSection('content'); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Tentang Kami</h1>
                    <hr class="small">
                    <span class="subheading">Segalanya Tentang Kami</span>
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
                    <legend><h3 style="color: tomato;">Deskripsi</h3></legend>
                    <div class="col-sm-4" style="padding-top: 20px;">
                        <img src="<?php echo e(asset('img/logo_horizontal.png')); ?>" style="width: 100%;">
                    </div>
                    <div class="col-sm-8 text-justify">
                        <p>Program Studi Teknik Informatika adalah program strata S-1 yang berada di dalam naungan Fakultas Teknik, Universitas Surabaya. Program Studi ini memiliki Akreditasi "A" sejak tahun 1998 sampai saat ini.</p>
                        <p>Teknik Informatika adalah bidang ilmu teknik yang mempelajari tentang ilmu komputer, teknologi perangkat lunak dan aplikasinya di dunia industri. Dengan demikian ilmu yang dipelajari di Teknik Informatika tidak hanya berupa konsep dan teori saja tapi juga penerapan praktis keilmuan tersebut. Dengan demikian lulusan Teknik Informatika Ubaya selain mampu beradaptasi di dunia industri dengan cepat, lulusan tersebut akan dapat terus mengikuti perkembangan keilmuan di bidang komputer.</p>
                        <p>Program Studi ini didirikan pada tahun 1986, disahkan pendiriannya melalui Surat Keputusan Menteri Pendidikan dan Kebudayaan No.0729/0/1986. Pada tahun 1994, status Program Studi Teknik Informatika meningkat menjadi DIAKUI. Pada tahun 1998, BAN PT mengeluarkan surat keputusan No.002/BAN-PT/Ak-II/XII/98, dan memberikan akreditasi A kepada Program Studi Teknik Informatika Universitas Surabaya. Di Indonesia hanya ada sedikit Program Studi Teknik Informatika yang memperoleh peringkat Akreditasi A. Selanjutnya pada tahun 2004, BAN PT kembali mengeluarkan surat keputusan No.016/BAN-PT/Ak-VII/S1/V/2004, dan memberikan akreditasi A kepada Program Studi Teknik Informatika Universitas Surabaya. Hal ini berlanjut pada akreditasi tahun 2011 sampai saat ini.</p>
                        <p>Penerapan Teknologi Informasi dan Komunikasi (TIK) meliputi segala aspek kehidupan manusia, baik dunia ilmu, bisnis dan industri, pemerintahan, pendidikan, serta sosial. Bidang TIK merupakan profesi yang berkembang sangat cepat dan banyak terserap pada dunia kerja. Teknik Informatika Universitas Surabaya mempelajari konsep dan penerapan Teknologi Informasi dan Komunikasi pada pelbagai bidang. Lulusan dibekali dengan kemampuan pemrograman serta pengembangan perangkat lunak yang dimplementasikan pada komputer, internet, dan mobile communication.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>