<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<table width="350" border="0">
<form action="<?=site_url('login/con_login/checkInput');?>" method="post">
	  	
	  	<tr >
		    <td align="right" colspan="2"><h6><?php echo $fail; ?></h6></td>
	  	</tr>
	  	<tr>
		    <td width="150px;" align="right">User :</td>
		    <td width="200px;" scope="col">
		    	<input type="text" name="user">
		    </td>
	  	</tr>
	  	<tr>
		    <td align="right">Password :</td>
		    <td><input type="password" name = "password" /></td>
		</tr>
  		<tr>
			<td align='center' colspan='2'>
				<input type="submit" value="Login" /> 
			</td>
		</tr>
</form>
</table>
</body>
</html>