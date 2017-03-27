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
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.png">

        <title>Secret Software</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">


    </head>

    <body onload="getTime()">

        <!-- **********************************************************************************************************************************************************
                  It's a secret software baby.... don't try to login without account !!!  happy codeing bitch ... :)   
        *********************************************************************************************************************************************************** -->

        <?php echo $master; ?>


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.backstretch.min.js"></script>
        <script>
        $.backstretch("<?php echo base_url() ?>assets/img/pexels-photo.jpg", {speed: 500});
        </script>

        <script>
            function getTime()
            {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('showtime').innerHTML = h + ":" + m + ":" + s;
                t = setTimeout(function () {
                    getTime()
                }, 500);
            }

            function checkTime(i)
            {
                if (i < 10)
                {
                    i = "0" + i;
                }
                return i;
            }
        </script>

        <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
        <script>
            webshims.setOptions('forms-ext', {types: 'date'});
            webshims.polyfill('forms forms-ext');
        </script>

    </body>
</html>
