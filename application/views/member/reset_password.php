<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo site_url('do_reset')?>">
		<input type="hidden" name="dataDiri" value="<?php echo $dataDiri;?>"><br>
		<input type="password" name="password" required="" placeholder="kata sandi"><br>
		<input type="password" name="confirm_password" required="" placeholder="konfirmasi kata sandi"><br><br>
		<button type="submit">Ganti Kata Sandi</button>
	</form>
</body>
</html>