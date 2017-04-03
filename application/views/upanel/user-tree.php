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
                            <th><span style="background: #F1C500;color: #fff"><?php echo $v_info->u_level?>st LEVEL</span></th>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>