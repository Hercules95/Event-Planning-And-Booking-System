<!DOCTYPE html>
<html>
<head>
	<title>Transaction UnSucccess</title>
	 <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url()?>stripe/payment.png" />
	<link href="<?php echo base_url()?>stripe/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url()?>stripe/css/transaction.css" rel="stylesheet">
	<style>
	.cross{
	position: absolute;
    height: 5px;
    width: 47px;
    background-color: #f27474;
    display: block;
    top: 37px;
    border-radius: 2px;
	}
	</style>
</head>
<body>
	<div class="container-fluid text-center" style="padding: 130px 0;">
         <div class="row">
         <div class="col-span-12 text-center my-logo">
          <img class="img-responsive" src="<?php echo base_url()?>stripe/payment.png" alt="logo" title="logo" />
        </div>
    
			<div class="border bo">
				<div class="check_mark" style="margin-top: 50px;">
					<div class="cross">
						<span class="sa-line sa-tip animateSuccessTip"></span>
						<span class="sa-line sa-long animateSuccessLong"></span>
						<div class="sa-placeholder"></div>
						<div class="sa-fix"></div>
					</div>
				</div>
				<center><label style="font-size: 50px;color:#5f5d5d;"><b>Your Transaction Has Been Delined!</b></label>
					<p class="text" style="color:#8a8787;font-size: 32px;">There Is Any Issue In Your Transaction,<br>Please Contact The Experts!</p>
				</center>
			</div>
		</div>
</body>
</html>