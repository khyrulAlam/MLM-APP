<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Khyryl Alam Anik">
        <meta name="keyword" content="">

        <title>User Dashboard</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" /> 

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">


        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="version">
            <h3>beta</h3>
        </div>

        <section id="container" >

            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="<?php echo base_url()?>Panel" class="logo"><b>MENU</b></a>
                <!--logo end-->

                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="<?php echo base_url() ?>">Edit Profile</a></li>
                        <li><a class="logout" href="<?php echo base_url() ?>">Change Password</a></li>
                        <li><a class="logout" href="<?php echo base_url() ?>Panel/logout">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" >

                        <li>
                            <a href="<?php echo base_url() ?>Panel">
                                <i class="fa fa-desktop"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url() ?>Panel/applyForPin" >
                                <i class="fa fa-tasks"></i>
                                <span>Apply For Level</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url() ?>Panel/sellingPin">
                                <i class="fa fa-th"></i>
                                <span>My Selling PIN</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo base_url() ?>Panel/userTree" >
                                <i class=" fa fa-bar-chart-o"></i>
                                <span> User Tree</span>
                            </a>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->

            <?php echo $master; ?>


            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    @2017 All Right Reserved.
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>

        <!--common script for all pages-->
        <script src="<?php echo base_url() ?>assets/js/common-scripts.js"></script>

    </body>
</html>
