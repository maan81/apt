<?php
	
	if($_POST){
		$password = $_POST['password'];

		$password = md5($password.md5($password));


		if($password=='21e47499bc9644ba7285b4b7d86c230d'){
			session_start();
			$_SESSION['admin']=true;
			header("Location: http://localhost/apt/");
		}
	}

?>
<!DOCTYPE html>
<html>
<head></head>
<body>

<form method="post">
	<legend style="left:50%; position: absolute; margin-left: -20%;">
		<table>
 			<tr>
 				<td>Password</td>
 				<td><input type="password" name="password" /></td>
 			</tr>
 			<tr>
 				<td>
 					<input type="submit" name="submit" value="Login"/>
 				</td>
 			</tr>
		</table>
	</legend>
</form>

</body>
</html>