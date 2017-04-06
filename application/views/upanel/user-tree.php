<section id="main-content">
    <section class="wrapper">
        <div class="row" style="padding: 15px">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped" id="example">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>NAME</td>
                            <td>SINCE</td>
                            <td>EMAIL</td>
                            <td>PHONE</td>
                            <td>SENIOR</td>
                            <td>LEVEL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $i=1;
                        foreach ($all_user_info as $v_info){
                        ?>
                        <tr>
                            <th><?php echo $i++?></th>
                            <th><?php echo $v_info->u_name?></th>
                            <th>
                                <?php
                                 $timestamp=$v_info->u_entry_date;
                                 echo date("M -d - Y",strtotime($timestamp));
                                ?>    
                            </th>
                            <th><?php echo $v_info->u_email?></th>
                            <th><?php echo $v_info->u_mobile?></th>
                            <th><?php echo $v_info->senior_name?></th>
                            <?php 
                            if($v_info->u_level==0){?>
                            <th><span style="background: #E91E63;color: #fff"><?php echo $v_info->u_level?> LEVEL</span></th>
                            <?php }else if($v_info->u_level==1){?>
                            <th><span style="background: #F1C500;color: #fff"><?php echo $v_info->u_level?>st LEVEL</span></th>
                            <?php }else if($v_info->u_level==2){?>
                            <th><span style="background: #607D8B;color: #fff"><?php echo $v_info->u_level?>nd LEVEL</span></th>
                            <?php }else if($v_info->u_level==3){?>
                            <th><span style="background: #7e00f1;color: #fff"><?php echo $v_info->u_level?>rd LEVEL</span></th>
                            <?php }else if($v_info->u_level==4){?>
                            <th><span style="background: #4CAF50;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }else if($v_info->u_level==5){?>
                            <th><span style="background: #ad4caf;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }else if($v_info->u_level==6){?>
                            <th><span style="background: #9a822c;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }else if($v_info->u_level==7){?>
                            <th><span style="background: #3a2236;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }else if($v_info->u_level==8){?>
                            <th><span style="background: #c3c3c3;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }else if($v_info->u_level==9){?>
                            <th><span style="background: #009688;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }else if($v_info->u_level==10){?>
                            <th><span style="background: #000000;color: #fff"><?php echo $v_info->u_level?>th LEVEL</span></th>
                            <?php }?>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>