<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#one" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL ONE</h3>
                        </div>
                        <div id="one" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 0) { ?>
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

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#two" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL TWO</h3>
                        </div>
                        <div id="two" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 2) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Two Completed</p>
                                <?php } else if ($user->u_level == 1) { ?>

                                    <a href="<?php echo base_url()?>AP_Panel/apply_one_pin"><button type="submit" class="apply-submit disabled">Level One</button></a>

                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#three" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL THREE</h3>
                        </div>
                        <div id="three" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 3) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Three Completed</p>
                                <?php } else if ($user->u_level == 2) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#four" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL FOUR</h3>
                        </div>
                        <div id="four" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 4) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Four Completed</p>
                                <?php } else if ($user->u_level == 3) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#five" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL FIVE</h3>
                        </div>
                        <div id="five" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 5) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Five Completed</p>
                                <?php } else if ($user->u_level == 4) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#six" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL SIX</h3>
                        </div>
                        <div id="six" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 6) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Six Completed</p>
                                <?php } else if ($user->u_level == 5) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#seven" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL SEVEN</h3>
                        </div>
                        <div id="seven" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 7) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Seven Completed</p>
                                <?php } else if ($user->u_level == 6) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#eight" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL EIGHT</h3>
                        </div>
                        <div id="eight" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 8) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Eight Completed</p>
                                <?php } else if ($user->u_level == 7) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="apply-level">
                    <div class="panel panel-success">
                        <div class="panel-heading" data-target="#nine" data-toggle="collapse" style="cursor: pointer">
                            <h3 class="text-center">LEVEL NINE</h3>
                        </div>
                        <div id="nine" class=" panel-collapse collapse in">
                            <div class="panel-body">
                                <?php if ($user->u_level == 9) { ?>
                                    <p> Congratulation !</p>
                                    <p>Your Level Nine Completed</p>
                                <?php } else if ($user->u_level == 8) { ?>
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
                                <?php } else { ?>
                                    <p style="color:#673AB7">You Don't Complete Previous Level</p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
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
                                    <form action="" method="">
                                        <input type="text" placeholder="PIN NUMBER" class="apply-input">
                                        <input type="submit" value="APPLY" class="apply-submit">
                                    </form>
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