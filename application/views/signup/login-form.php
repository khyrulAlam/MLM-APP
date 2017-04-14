<div id="login-page">
    <div class="container">

        <div id="showtime"></div>

        <form class="form-login" action="<?php echo base_url()?>login" method="post">
            <h2 class="form-login-heading">Log in now</h2>
            <p style="color:red;padding: 15px 20px; margin: 0">
                <?php 
                $error=$this->session->userdata('login_failed');
                if($error){
                    echo $error;
                    $this->session->unset_userdata('login_failed');
                }
                ?>
            </p>

            
            
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="User Name" name="log_name" required="">
                <br>
                <input type="password" class="form-control" placeholder="Password" name="user_pass" required="">
                <br/>
                <button class="btn btn-theme btn-block" href="" type="submit"><i class="fa fa-lock"></i> LOG IN</button>
                <hr>

                <div class="registration">
                    Don't have an account yet?<br/>
                    <a class="" href="<?php echo base_url()?>Signup">
                        Create a New account
                    </a>
                </div>

            </div>
        </form>	  	

    </div>
</div>