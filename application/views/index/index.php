<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Business Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>font-assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>font-assets/css/main.css">
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>font-assets/img/Dollar-48.png
              "></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Terms & Condition</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url()?>log-in"><span class="glyphicon glyphicon-log-in"></span>  Log-in</a></li>
                <li><a href="<?php echo base_url()?>Signup"><span class="glyphicon glyphicon-new-window"></span>  Sign-Up</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <main>
            <?php echo $master; ?>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>All Right Reserved 2017</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>font-assets/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script type="text/javascript" src="<?php echo base_url()?>font-assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>font-assets/js/plugins.js"></script>
        <script src="<?php echo base_url()?>font-assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
