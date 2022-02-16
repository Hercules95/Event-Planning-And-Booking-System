<!DOCTYPE html>
<html>
<head>
	<title>Transaction Error</title>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url()?>stripe/payment.png" />
	<link href="<?php echo base_url()?>stripe/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url()?>stripe/css/transaction.css" rel="stylesheet">
	
</head>
<body>
	<div class="container-fluid text-center" style="padding: 130px 0;">
		<div class="row">
			<div class="col-span-12 text-center my-logo">
				<img class="img-responsive" src="<?php echo base_url()?>/dist/img/userimage.png" alt="logo" title="logo" />
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
				<center>
					
					<p class="text" style="color:#8a8787;font-size: 32px;">There Is An Issue In Your Card,<br>Please Contact Your Bank!</p>
					<label style="color:#5f5d5d;font-size: 24px;"><b>Type: <?php echo $type?></b></label><br>
					<label style="color:#5f5d5d;font-size: 24px;"><b>Message: <?php echo  $message?></b></label><br>
					<?php 
					if($param === "")
					{
						echo "<label><b></b></label>";
					}
					else
					{
						echo "<label><b>Param:</b></label>".$param;
					}

					?>
					<?php 
					if($code === "")
					{
						echo "<label><b></b></label>";
					}
					else
					{
						echo "<label><b>Code:</b></label>".$code;
					}

					?>
				</center>
			</div>
		</div>
	</body>
	</html>