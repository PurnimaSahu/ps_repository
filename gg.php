<html>
	<p>

	<form action='pregphp.php' method='POST'>
	
		<table>
			<tr>
			<td>Your full name : </td>
			
			<td><input type='text' name='fullname' value='<?php echo $fullname;  ?> '></td>
			</tr>
			
			<tr>
			<td>Choose a username :  </td>
			
			<td><input type='text' name='username' value='<?php echo $username;  ?> '></td>
			</tr>

			<tr>
			<td>Choose a password :  </td>
			
			<td><input type='password' name='password'></td>
			</tr>

			<tr>
			<td>Repeat your password :  </td>
			
			<td><input type='password' name='repeatpassword'></td>
			</tr>
			<p>
			<input type='submit' name='submit' value='Register'>
			
			
		</table>
		
			
	</form>
	
	
	</html>



