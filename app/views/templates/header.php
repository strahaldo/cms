<!DOCTYPE html>
<html lang="fi">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Säbämestari</title>

    <!-- Bootstrap Core CSS -->
    <link href='<?php echo BASE_URL; ?>app/style/bower_components/bootstrap/dist/css/bootstrap.min.css' rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href='<?php echo BASE_URL; ?>app/style/bower_components/metisMenu/dist/metisMenu.min.css' rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href='<?php echo BASE_URL; ?>app/style/bower_components/morrisjs/morris.css' rel="stylesheet">

    <!-- Custom CSS -->
    <link href='<?php echo BASE_URL; ?>app/style/dist/css/sb-admin-2.css' rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='<?php echo BASE_URL; ?>app/style/bower_components/font-awesome/css/font-awesome.min.css' rel="stylesheet">

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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>start.php">
                    <img alt="Brand" height="100%" src="../../app/style/img/nimilogo.png">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               <li><a href="<?php echo BASE_URL; ?>logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo BASE_URL; ?>instructions.php"><i class="fa fa-dashboard fa-fw"></i> Instructions</a>
                        </li>

                        <li>
                            <a href="<?php echo BASE_URL; ?>start.php"><i class="fa fa-list-ul fa-fw"></i> Folder List</a>
                        </li>

<!--                         <li>
                            <a href="johdanto.php"><i class="fa fa-cog fa-fw"></i> Ohjeita ja Vinkkejä</a>
                        </li> -->

                        <li>
                            <a href="<?php echo BASE_URL; ?>admin/list.php"><i class="fa fa-cog fa-fw"></i> Admin</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">      