<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<form action="dologin" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>
	<h2> Please Login</h2>
	<table>
		<tr>
			<td> Username: </td>
			<td> <input type="text" name="username" /> </td>
		</tr>

		<tr>
			<td>Password: </td>
			<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="login"/>
				</td>
		</tr>
	</table>
	</form>
</body>
</html>
