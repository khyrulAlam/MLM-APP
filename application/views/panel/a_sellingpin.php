<?php $u_id = $this->session->userdata('u_id'); ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row" style="padding: 15px">
            <div class="col-md-6">
                <?php
                    $level_one = $this->S_Model->level_one($u_id);
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
            <div class="col-md-6">
                <?php
                    $level_two = $this->S_Model->level_two($u_id);
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
                            $i=1;
                            foreach ($level_two as $v_level_two) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_two->level_two_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_three = $this->S_Model->level_three($u_id);
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
                            $i=1;
                            foreach ($level_three as $v_level_three) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_three->level_three_pin?></th>
                            <?php 
                            if($v_level_three->u_value==0){
                            ?>
                            <th style="color:green">Available</th>
                            <?php }else{?>
                            <th style="color:red">SOLD</th>
                            <?php }?>
                            <?php
                            if($v_level_three->u_name == NULL){
                            ?>
                            <th>---</th>
                            <?php } else {?>
                            <th><?php echo $v_level_three->u_name?></th>
                            <?php }?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <?php
                    $level_four = $this->S_Model->level_four($u_id);
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
                            $i=1;
                            foreach ($level_four as $v_level_four) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_four->level_four_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_five = $this->S_Model->level_five($u_id);
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
                            $i=1;
                            foreach ($level_five as $v_level_five) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_five->level_five_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_six = $this->S_Model->level_six($u_id);
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
                            $i=1;
                            foreach ($level_six as $v_level_six) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_six->level_six_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_seven = $this->S_Model->level_seven($u_id);
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
                            $i=1;
                            foreach ($level_seven as $v_level_seven) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_seven->level_seven_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_eight = $this->S_Model->level_eight($u_id);
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
                            $i=1;
                            foreach ($level_eight as $v_level_eight) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_eight->level_eight_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_nine = $this->S_Model->level_nine($u_id);
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
                            $i=1;
                            foreach ($level_nine as $v_level_nine) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_nine->level_nine_pin?></th>
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
            <div class="col-md-6">
                <?php
                    $level_ten = $this->S_Model->level_ten($u_id);
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
                            $i=1;
                            foreach ($level_ten as $v_level_ten) {
                        ?>
                        <tr>
                            <th><?php echo $i++ ?></th>
                            <th><?php echo $v_level_ten->level_ten_pin?></th>
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