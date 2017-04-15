<script>
	// var xmlhttp = false;
 //    try {
 //        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 //    } catch (e) {
 //        try {
 //            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 //        } catch (E) {
 //            xmlhttp = false;
 //        }
 //    }
 //    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
 //        xmlhttp = new XMLHttpRequest();
 //    }
 //    function secretpin(scrpin, objID) {

 //        serverPage = '<?php echo base_url() ?>AP_Panel/level_two_pin_check/' + scrpin;
 //        xmlhttp.open("GET", serverPage);
 //        xmlhttp.onreadystatechange = function () {

 //            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

 //                document.getElementById(objID).innerHTML = xmlhttp.responseText;

 //                if (xmlhttp.responseText == "Please Enter Your Screct PIN Code") {
 //                    document.getElementById('dis-one').disabled = true;
 //                }
 //                if (xmlhttp.responseText == 'Your input PIN Not correct ! Please Enter a valid pin code') {
 //                    document.getElementById('dis-one').disabled = true;
 //                }
 //                if (xmlhttp.responseText == '') {
 //                    document.getElementById('dis-one').disabled = false;
 //                }
 //            }
 //        }
 //        xmlhttp.send(null);
 //    }
</script>


<section id="main-content">
    <section class="wrapper">
        <div class="row">
        	<h1 class="text-center">APPLY FOR LEVEL TWO PIN</h1>
			<hr>
			<div class="col-md-6 col-md-offset-3">
				<div class="apply-level">
					<form action="<?php echo base_url() ?>AP_Panel/level_two_random" method="post">
		                <input type="hidden" value="<?php echo $user->u_id ?>" name="owner_id">
		                <input type="hidden" value="<?php echo $user->u_name ?>" name="owner_name">
		                <input type="text" placeholder="PIN NUMBER" required="" class="apply-input" name="scrpin" onblur="secretpin(this.value, 'result')">
		                <span id="result" style="color:red; "></span>
		                <button type="submit" class="apply-submit disabled" id="dis-one">APPLY</button>
	            	</form>
                    <?php 
                    $error= $this->session->userdata('w_pin');
                    if($error){
                    ?>
                    <h3 class="text-danger"><?php echo $error ; $this->session->unset_userdata('w_pin');?></h3>
                    <?php }?>
				</div>
			</div>
		</div>
	</section>
</section>