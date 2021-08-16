<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teknik Informatika - Universitas Surabaya</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Javascript -->
    <link href="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>" rel="stylesheet">

    <!-- Angular JS -->
    <link href="<?php echo e(asset('vendor/angular-js/ui-bootstrap-tpls-2.3.0.min')); ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo e(asset('css/clean-blog.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('font/lora.css')); ?>" rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset('font/opensans.css')); ?>" rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/logo_horizontal.png')); ?>" style="width: 100px;"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo e(url('/')); ?>"><i class="fa fa-btn fa-home"></i> Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Profil <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/about-us')); ?>" style="color: salmon;">Tentang Kami</a></li>
                            <li><a href="<?php echo e(url('/visi-misi')); ?>" style="color: salmon;">Visi dan Misi</a></li>
                            <li><a href="<?php echo e(url('/sambutan')); ?>" style="color: salmon;">Sambutan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Posting <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/berita')); ?>" style="color: salmon;">Berita</a></li>
                            <li><a href="<?php echo e(url('/pengumuman')); ?>" style="color: salmon;">Pengumuman</a></li>
                            <li><a href="<?php echo e(url('/kegiatan')); ?>" style="color: salmon;">Kegiatan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Akademik <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo e(url('/laboratorium-keahlian')); ?>" style="color: salmon;">Laboratorium Keahlian</a></li>
                            <li><a href="<?php echo e(url('/mata-kuliah')); ?>" style="color: salmon;">Mata Kuliah</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(url('feedback')); ?>">Contact Us</a>
                    </li>
                    <?php if(Auth::guest()): ?>
                        <li><a href="<?php echo e(url('/login')); ?>"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>
                    <?php else: ?>
                        <?php if(Auth::user()->hak_akses == 'Dosen'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="fa fa-btn fa-graduation-cap"></span> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/validasi-hosting')); ?>" style="color: salmon;"><i class="fa fa-btn fa-pencil"></i> Validasi Hosting</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>" style="color: salmon;"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        <?php elseif(Auth::user()->hak_akses == 'Mahasiswa'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="fa fa-btn fa-users"></span> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/share-hosting')); ?>" style="color: salmon;"><i class="fa fa-btn fa-pencil"></i> Registrasi Hosting</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>" style="color: salmon;"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        <?php elseif(Auth::user()->hak_akses == 'Admin'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="fa fa-btn fa-user-md"></span> <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/master-berita')); ?>" style="color: salmon;"><i class="fa fa-btn fa-gear"></i> Home Admin</a></li>
                                <li><a href="<?php echo e(url('/logout')); ?>" style="color: salmon;"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Main Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="<?php echo e(url('/feedback')); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-comments-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ubaya.ac.id">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('/about-us')); ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-info-circle fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Universitas Surabaya</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo e(asset('vendor/jquery/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo e(asset('js/jqBootstrapValidation.js')); ?>"></script>
    <script src="<?php echo e(asset('js/contact_me.js')); ?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo e(asset('js/clean-blog.min.js')); ?>"></script>

</body>

</html>
