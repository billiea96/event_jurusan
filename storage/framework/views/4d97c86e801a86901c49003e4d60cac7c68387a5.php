<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/sb-admin.css')); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo e(asset('css/plugins/morris.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo e(url('/')); ?>"><i class="fa fa-fw fa-home"></i> Home Website</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-pencil-square-o"></i> Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo e(url('/master-berita')); ?>">Berita</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/master-pengumuman')); ?>">Pengumuman</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/master-kegiatan')); ?>">Kegiatan</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/mahasiswa')); ?>"><i class="fa fa-fw fa-users"></i> Master Mahasiswa</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/karyawan')); ?>"><i class="fa fa-fw fa-graduation-cap"></i> Master Dosen</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/laboratorium')); ?>"><i class="fa fa-fw fa-desktop"></i> Master Laboratorium</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/matakuliah')); ?>"><i class="fa fa-fw fa-book"></i> Master Mata Kuliah</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/master-feedback')); ?>"><i class="fa fa-fw fa-commenting"></i> Master Feedback</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('vendor/jquery/jquery.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
