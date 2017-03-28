<?php $user_id = $this->session->userdata('user_id'); ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row" style="padding: 15px">
            <div class="col-md-6">
                <?php
                $level_one = $this->S_Model->user_level_one_selling_pin($user_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">ONE</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>LEVEL</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;
                        foreach ($level_one as $v_level_one) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_one->level_one_pin?></th>
                                <th>ONE</th>
                                <?php 
                                if($v_level_one->used_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <?php
                $level_two = $this->S_Model->user_level_two_selling_pin($user_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">TWO</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>LEVEL</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_two as $v_level_two) {
                            ?>
                            <tr>
                                <th><?php echo $i2++ ?></th>
                                <th><?php echo $v_level_two->level_one_pin?></th>
                                <th>TWO</th>
                                <?php 
                                if($v_level_two->used_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">THREE</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>LEVEL</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>