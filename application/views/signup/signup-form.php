<script type="text/javascript">

    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    
    function makerequest(scr_pin_lo, objID) {

        serverPage = '<?php echo base_url() ?>Welcome/level_one_scr_pin_check/' + scr_pin_lo;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function () {

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                document.getElementById(objID).innerHTML = xmlhttp.responseText;

                if (xmlhttp.responseText == "Please Enter Your Screct PIN Code") {
                    document.getElementById('dis-btn').disabled = true;
                }
                if (xmlhttp.responseText == 'Your input PIN not correct ! Please Enter a valid pin code') {
                    document.getElementById('dis-btn').disabled = true;
                }
                if (xmlhttp.responseText == '') {
                    document.getElementById('dis-btn').disabled = false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>



<div id="login-page">
    <div class="container">

        <form class="form-login form-signup" action="<?php echo base_url() ?>Welcome/createNewAccount" method="post" enctype="multipart/form-data" style="max-width:500px;margin-top: 0;">


            <h2 class="form-login-heading">sign in now</h2>
            <div class="login-wrap">
                <h5 style="color:red">
                    <?php
                    $img_error = $this->session->userdata('img_error');
                    if ($img_error) {
                        echo $img_error;
                        $this->session->unset_userdata('img_error');
                    }
                    ?>
                </h5>
                <input type="text" class="form-control" placeholder="Full Name*" name="full_name" required="">
                <br>
                <input type="text" class="form-control" placeholder="Father Name" name="fath_name" required="">
                <br/>
                <input type="email" class="form-control" placeholder="Email*" name="user_email" required="">
                <br/>
                <input type="text" class="form-control" placeholder="National ID No*" name="n_id" required="">
                <br/>
                <input type="date" class="form-control" placeholder="Date OF Birth*" name="date_of_birth" required="">
                <br/>
                <input type="text" class="form-control" placeholder="Mobile*" name="user_mobile" required="">
                <br/>
                <input type="text" class="form-control" placeholder="Gender*" name="user_gen" required="">
                <br/>
                <textarea class="form-control" placeholder="Address" name="user_adds" required=""></textarea>
                <br/>
                <input type="password" class="form-control" placeholder="Password*" name="user_pass" required="">
                <br/>
                <input type="text" class="form-control" placeholder="Pin Code*" required="" name="scr_pin_lo" onblur="makerequest(this.value, 'result')">
                <span id="result" style="color:red; padding: 20px 10px !important"></span>
                <br/>
                <input type="file" class="form-control" placeholder="image*" name="user_img">
                <br/>
                <input type="hidden" name="signup_date" value="<?php echo date('Y-m-d')?>">
                <br/>

                <button class="btn btn-theme btn-block" id="dis-btn" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                <hr>

                <div class="registration">
                    Go back to log-in page <br/>
                    <a class="" href="<?php echo base_url() ?>">
                        Login
                    </a>
                </div>

            </div>
        </form>	  	

    </div>
</div>
