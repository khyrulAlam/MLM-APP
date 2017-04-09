<style>
    input{
        border: 1px solid #68dff0;
        padding: 6px;
        width: 170px;
        margin: 5px;
    }
    button{
        border: 0;
        padding: 8px 50px;
        color: #ffd777;
        font-size: 16px;
        font-weight: 600;
        background: #424a5d;
        margin-top: 30px;
    }
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="row" style="padding: 15px">
            <form action="<?php echo base_url() ?>S_Panel/level_four_pin" method="post">
                <?php
                $characters = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                for ($i = 0; $i < 2; $i++) {
                    ?>

                    <input type="text" value="<?php echo('L4M' . rand(0,100) . 'M' . date("d") . date("m") . date("Y") . $owner_id.$characters[rand(0, $charactersLength -1)].rand(1,9)); ?>" readonly="" name="screct_pin[]">
                    <input type="hidden" value="<?php echo $owner_id?>" readonly="" name="owner_id[]">
                    <input type="hidden" value="<?php echo $owner_name?>" readonly="" name="owner_name[]">
                <?php } ?>
                <br>
                <br>
                <button class="" type="submit">DONE</button>
            </form>
        </div>
    </section>
</section>