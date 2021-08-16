<?php $__env->startSection('content'); ?>
<header class="intro-header" style="background-image: url('img/informatika.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Sambutan</h1>
                    <hr class="small">
                    <span class="subheading">Dr. Budi Hartanto S.T., M.Sc.</span>
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
                    <legend><h3 style="color: tomato;">Sambutan Kepala Jurusan</h3></legend>
                    <div class="col-sm-4" style="padding-top: 38px;">
                        <figure>
                            <img src="<?php echo e(asset('img/kajur.jpg')); ?>" alt="Kepala Jurusan Teknik Informatika" style="width: 100%;">
                            <figcaption style="font-size: 14px;">Dr. Budi Hartanto S.T., M.Sc. - Kepala Jurusan Teknik Informatika Universitas Surabaya</figcaption>
                        </figure>
                    </div>
                    <div class="col-sm-8 text-justify">
                        <p>Selamat datang, saya ucapkan pada semua para pengunjung Website Jurusan Teknik Informatika Universitas Surabaya (IF Ubaya). Dari 413 Jurusan Teknik Informatika di Indonesia, hanya 12 Jurusan Teknik Informatika (2.91%) yang berhasil mendapat akreditasi A dari DIKTI. Teknik Informatika Ubaya merupakan salah satu jurusan yang mendapat Akreditasi A ini. Akreditasi A yang didapat ini menunjukkan komitmen dan langkah nyata dari Jurusan Teknik Informatika Ubaya dalam menjaga mutu proses pendidikan mahasiswanya dan menjamin kualitas lulusannya.</p>
                        <p>Website ini dibuat untuk memberi informasi kepada mahasiswa, calon mahasiswa, orang tua, alumni, staff Ubaya, dan stakeholder lainnya. Semoga website ini dapat membantu Anda mendapatkan informasi yang Anda butuhkan tentang Teknik Informatika Ubaya. Berbagai saran dan masukan tentang website dan Jurusan Teknik Informatika Ubaya dapat disampaikan melalui email yang ada di bagian “kontak kami”.</p>
                        <br/>
                        <p>
                            Salam<br><br>
                            Budi Hartanto,<br>
                            Kepala Jurusan Teknik Informatika
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouthome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>