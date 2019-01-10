<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h5>Thank you for your registration at e-market.com</h5>
	<p>
		Your username : <?php echo $username; ?> <br>
		Your email account : <?php echo $email; ?> <br>

		Your activation code is <?php echo $verificationCode; ?> <br><br>
		For activation please click this url: <br>
		<a href="<?php echo base_url();?>/verify/<?php echo $verificationCode; ?>"><?php echo base_url();?>/verify/<?php echo $verificationCode; ?></a>
		<br><br><br>
		Thank You<br>
		This is an automated email. Do not reply. For trouble send to <a href='mailto: admin@ecommerce.com'>admin@ecommerce.com</a><br><br>
		E-market.com
	</p>
</body>
</html>