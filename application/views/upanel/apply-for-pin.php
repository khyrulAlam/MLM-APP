<section id="main-content">
    <section class="wrapper">
        <div class="row">
        <!--LEVEL ONE-->
            <div class="col-lg-4">
                <?php
                    $senior_one = $user->senior_id;
                    $senior = $this->C_Model->call_for_pin_one($senior_one);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#one" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL ONE</h3>
                        </div>
                        <div id="one" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                
                                <?php if ($user->u_level == 0) { ?>
                                    <p><?php echo $senior->u_name?> <br> <?php echo $senior->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_one_pin"><button type="submit" class="apply-submit disabled">Level One</button></a>
                                <?php } else { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level One Completed</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--LEVEL TWO-->
            <div class="col-lg-4">
                <?php
                    $senior_two = $senior->senior_id;
                    $senior2 = $this->C_Model->call_for_pin_two($senior_two);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#two" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL TWO</h3>
                        </div>
                        <div id="two" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 2) { ?>

                                    <p> Congratulation !</p>
                                    <p>Your Level Two Completed</p>
                                <?php } else if ($user->u_level == 1) { ?>
                                    <p><?php echo $senior2->u_name?> <br> <?php echo $senior2->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_two_pin"><button type="submit" class="apply-submit disabled">Level Two</button></a>

                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Three -->
            <div class="col-lg-4">
                <?php
                    $senior_three = $senior2->senior_id;
                    $senior3 = $this->C_Model->call_for_pin_three($senior_three);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#three" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL THREE</h3>
                        </div>
                        <div id="three" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 3) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Three Completed</p>
                                <?php } else if ($user->u_level == 2) { ?>
                                    <p><?php echo $senior3->u_name?> <br> <?php echo $senior3->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_three_pin"><button type="submit" class="apply-submit disabled">Level Three</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Four -->
            <div class="col-lg-4">
                <?php
                    $senior_four = $senior3->senior_id;
                    $senior4 = $this->C_Model->call_for_pin_four($senior_four);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#four" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL FOUR</h3>
                        </div>
                        <div id="four" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 4) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Four Completed</p>
                                <?php } else if ($user->u_level == 3) { ?>
                                    <p><?php echo $senior4->u_name?> <br> <?php echo $senior4->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_four_pin"><button type="submit" class="apply-submit disabled">Level Four</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Five -->
            <div class="col-lg-4">
                <?php
                    $senior_five = $senior4->senior_id;
                    $senior5 = $this->C_Model->call_for_pin_five($senior_five);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#five" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL FIVE</h3>
                        </div>
                        <div id="five" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 5) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Five Completed</p>
                                <?php } else if ($user->u_level == 4) { ?>
                                    <p><?php echo $senior5->u_name?> <br> <?php echo $senior5->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_five_pin"><button type="submit" class="apply-submit disabled">Level Five</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Six-->
            <div class="col-lg-4">
                <?php
                    $senior_six = $senior5->senior_id;
                    $senior6 = $this->C_Model->call_for_pin_six($senior_six);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#six" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL SIX</h3>
                        </div>
                        <div id="six" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 6) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Six Completed</p>
                                <?php } else if ($user->u_level == 5) { ?>
                                    <p><?php echo $senior6->u_name?> <br> <?php echo $senior6->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_six_pin"><button type="submit" class="apply-submit disabled">Level Six</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Seven -->
            <div class="col-lg-4">
                <?php
                    $senior_seven = $senior6->senior_id;
                    $senior7 = $this->C_Model->call_for_pin_seven($senior_seven);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#seven" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL SEVEN</h3>
                        </div>
                        <div id="seven" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 7) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Seven Completed</p>
                                <?php }else if($user->u_level == 6){?>
                                    <p><?php echo $senior7->u_name?> <br> <?php echo $senior7->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_seven_pin"><button type="submit" class="apply-submit disabled">Level Seven</button></a>
                                <?php } else{?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Eight -->
            <div class="col-lg-4">
                <?php
                    $senior_eight = $senior7->senior_id;
                    $senior8 = $this->C_Model->call_for_pin_eight($senior_eight);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#eight" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL EIGHT</h3>
                        </div>
                        <div id="eight" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 8) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Eight Completed</p>
                                <?php } else if ($user->u_level == 7) { ?>
                                    <p><?php echo $senior8->u_name?> <br> <?php echo $senior8->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_eight_pin"><button type="submit" class="apply-submit disabled">Level Eight</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Level Nine -->
            <div class="col-lg-4">
                <?php
                    $senior_nine = $senior8->senior_id;
                    $senior9 = $this->C_Model->call_for_pin_nine($senior_nine);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#nine" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL NINE</h3>
                        </div>
                        <div id="nine" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level >= 9) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Nine Completed</p>
                                <?php } else if ($user->u_level == 8) { ?>
                                    <p><?php echo $senior9->u_name?> <br> <?php echo $senior9->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_nine_pin"><button type="submit" class="apply-submit disabled">Level Nine</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Level Ten -->
            <div class="col-lg-4">
                <?php
                    $senior_ten = $senior9->senior_id;
                    $senior10 = $this->C_Model->call_for_pin_ten($senior_ten);
                ?>
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#ten" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL TEN</h3>
                        </div>
                        <div id="ten" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 10) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Ten Completed</p>
                                <?php } else if ($user->u_level == 9) { ?>
                                    <p><?php echo $senior10->u_name?> <br> <?php echo $senior10->u_mobile?></p>
                                    <a href="<?php echo base_url()?>AP_Panel/apply_ten_pin"><button type="submit" class="apply-submit disabled">Level Ten</button></a>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</section>