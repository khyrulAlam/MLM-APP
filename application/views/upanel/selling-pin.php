<?php $u_id = $this->session->userdata('u_id'); ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row" style="padding: 15px">

        <!-- LEVEL ONE -->
            <div class="col-md-6">
                <?php
                $level_one = $this->P_Model->user_level_one_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">ONE</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
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
                                <?php 
                                if($v_level_one->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_one->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_one->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL TWO -->
            <div class="col-md-6">
                <?php
                $level_two = $this->P_Model->user_level_two_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">TWO</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_two as $v_level_two) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_two->level_one_pin?></th>
                                <?php 
                                if($v_level_two->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_two->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_two->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL THREE -->
            <div class="col-md-6">
                <?php
                    $level_th = $this->P_Model->user_level_three_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">THREE</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_th as $v_level_th) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_th->level_one_pin?></th>
                                <?php 
                                if($v_level_th->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_th->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_th->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL FOUR -->
            <div class="col-md-6">
                <?php
                    $level_four = $this->P_Model->user_level_four_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">FOUR</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_four as $v_level_four) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_four->level_one_pin?></th>
                                <?php 
                                if($v_level_four->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_four->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_four->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL FIVE -->
            <div class="col-md-6">
                <?php
                    $level_five = $this->P_Model->user_level_five_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">FIVE</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_five as $v_level_five) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_five->level_one_pin?></th>
                                <?php 
                                if($v_level_five->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_five->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_five->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL SIX -->
            <div class="col-md-6">
                <?php
                    $level_six = $this->P_Model->user_level_six_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">SIX</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_six as $v_level_six) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_six->level_one_pin?></th>
                                <?php 
                                if($v_level_six->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_six->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_six->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL SEVEN -->
            <div class="col-md-6">
                <?php
                    $level_seven = $this->P_Model->user_level_seven_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">SEVEN</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_seven as $v_level_seven) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_seven->level_one_pin?></th>
                                <?php 
                                if($v_level_seven->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_seven->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_seven->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL EIGHT -->
            <div class="col-md-6">
                <?php
                    $level_eight = $this->P_Model->user_level_eight_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">EIGHT</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_eight as $v_level_eight) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_eight->level_one_pin?></th>
                                <?php 
                                if($v_level_eight->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_eight->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_eight->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL NINE -->
            <div class="col-md-6">
                <?php
                    $level_nine = $this->P_Model->user_level_nine_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">NINE</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_nine as $v_level_nine) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_nine->level_one_pin?></th>
                                <?php 
                                if($v_level_nine->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_nine->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_nine->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <!-- LEVEL TEN -->
            <div class="col-md-6">
                <?php
                    $level_ten = $this->P_Model->user_level_ten_selling_pin($u_id);
                ?>
                <div class="text-center"><h3 class="text-primary">LEVEL <span class="text-danger">TEN</span> TABLE</h3></div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SECRET PINE</th>
                            <th>STATUS</th>
                            <th>Sold By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i2=1;
                        foreach ($level_ten as $v_level_ten) {
                            ?>
                            <tr>
                                <th><?php echo $i++ ?></th>
                                <th><?php echo $v_level_ten->level_one_pin?></th>
                                <?php 
                                if($v_level_ten->u_value==0){
                                ?>
                                <th style="color:green">Available</th>
                                <?php }else{?>
                                <th style="color:red">SOLD</th>
                                <?php }?>
                                <?php
                                if($v_level_ten->u_name == NULL){
                                ?>
                                <th>---</th>
                                <?php } else {?>
                                <th><?php echo $v_level_ten->u_name?></th>
                                <?php }?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
</section>