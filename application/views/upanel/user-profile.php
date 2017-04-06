<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">

                <div class="row mt">
                    <!-- SERVER STATUS PANELS -->



                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <!-- WHITE PANEL - TOP USER -->
                        <div class="user_image">
                            <img src="<?php echo base_url() . $user->u_img ?>" class="img-responsive">
                        </div>
                    </div><!-- /col-md-4 -->

                    <div class="col-lg-8 col-md-8 col-sm-8 mb">
                        <div class="user-info">

                            <h1> <?php echo $user->u_name ?> </h1>
                            <h5> Member Since - 
                                <?php
                                 $timestamp=$user->u_entry_date;
                                 echo date("M-d - Y",strtotime($timestamp));
                                ?>
                             </h5>
                            
                            <br>
                            <div class="level-button">
                                <?php
                                if ($user->u_level >= 1) {
                                    ?>
                                    <button> 1st <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 1nd <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level >= 2) {
                                    ?>
                                    <button> 2nd <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 2nd <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level >= 3) {
                                    ?>
                                    <button> 3rd <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 3rd <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level >= 4) {
                                    ?>
                                    <button> 4th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 4th <span class="text-uppercase">Level</span></button>
                                <?php } ?>

                                <br>
                                <div class="clearfix"></div>
                                <?php
                                if ($user->u_level >= 5) {
                                    ?>
                                    <button> 5th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 5th <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level >= 6) {
                                    ?>
                                    <button> 6th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 6th <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level >= 7) {
                                    ?>
                                    <button> 7th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 7th <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level >= 8) {
                                    ?>
                                    <button> 8th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 8th <span class="text-uppercase">Level</span></button>
                                <?php } ?>

                                <br>
                                <div class="clearfix"></div>
                                <?php
                                if ($user->u_level >= 9) {
                                    ?>
                                    <button> 9th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 9th <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                                <?php
                                if ($user->u_level == 10) {
                                    ?>
                                    <button> 10th <span class="text-uppercase">Level</span></button>
                                <?php } else { ?>
                                    <button style="background: #F44336"> 10th <span class="text-uppercase">Level</span></button>
                                <?php } ?>
                            </div>


                        </div>
                    </div><!-- /col-md-4 -->

                    <div class="col-lg-6 col-md-6 mb">
                        <div class="account-info">
                            <h4> <span>EMAIL:</span> <?php echo $user->u_email ?></h4>
                            <h4> <span>PHONE:</span> <?php echo $user->u_mobile ?></h4>
                            <h4> <span>NATIONAL ID NO:</span> <?php echo $user->u_nid ?></h4>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 mb">
                        <div class="personal-info">
                            <h4> <span>DATE OF BIRTH:</span> <?php echo $user->u_birth ?></h4>
                            <h4> <span>GENDER:</span> <?php echo $user->u_gender ?></h4>
                            <h4> <span>FATHER NAME:</span> <?php echo $user->u_father_name ?></h4>
                            <h4> <span>ADDRESS:</span> <?php echo $user->u_address ?></h4>
                        </div>
                    </div>

                </div><!-- /row -->



            </div><!-- /col-lg-12 END SECTION MIDDLE -->


        </div><! --/row -->
    </section>
</section>