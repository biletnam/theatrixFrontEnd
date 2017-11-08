<html>
<head>
    <title>Theatrix Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/cssLogin.css">
</head>
<input type="image" src="icon/homeBtn.png" a href="home.php" align="right" style="colour:#"/>
<h1>Hello Theatrix User...</h1>
<body background ="images/th3.png">
<label for="name">Please enter the following below: </label>
<div class = "container form-signin" align="center-left">
</div>
<div class = "container" align="center" >
    <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <h4 class = "form-signin-heading">
            <div class="group">
                <label for="name">Name</label>
                <div><input id="name" name="name" maxlength="20" class="form-control" type="text" placeholder="Name" required autofocus></div>
            </div><br></br>
            <div class="group">
                <label for="psw">Password</label>
                <div><input id="psw" name="psw" class="form-control" type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autofocus></div>
            </div><br></br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">User Login</button></br></br>
    </form>
    Need to Register? Click here <a href = "register.html" tite = "Register">Register
</div>

	<table cellpadding="10" cellspacing="2" style="background-color:#" width="1120">
	<tr>
		<td colspan="8"  style="color:#fff;" width="50">
			<table cellpadding="0" cellspacing="0"  border="0">
				<tr>
					<td><span class="itemText">A Midnight Summers Dream</span></td>
				</tr>
				<tr>
					<td><img src="plays/p1.png"></td>
				</tr>
			</table>			
		</td>
		
		<td colspan="8"  style="color:#fff;">
			<table cellpadding="0" cellspacing="0"  border="0">
			<tr>
					<td><span class="itemText">Much Ado About Nothing</span></td>
				</tr>
				<tr>
					<td><img src="plays/p2.png"></td>
				</tr>
			</table>			
		</td>
		
		<td colspan="8"  style="color:#fff;">
			<table cellpadding="0" cellspacing="0"  border="0">
				<tr>
					<td><span class="itemText">Hamlet</span></td>
				</tr>
				<tr>
					<td><img src="plays/p3.png"></td>
				</tr>
			</table>
		</td>
		
		<td colspan="8"  style="color:#fff;" width="60">
			<table cellpadding="0" cellspacing="0"  border="0">
				<tr>
					<td><span class="itemText">MacBeth</span></td>
				</tr>
				<tr>
					<td><img src="plays/p4.png"></td>
				</tr>
			</table>			
		</td>
		
		<td colspan="8"  style="color:#fff;">
			<table cellpadding="0" cellspacing="0"  border="0">
			<tr>
					<td><span class="itemText">Twelfth Night</span></td>
				</tr>
				<tr>
					<td><img src="plays/p5.png"></td>
				</tr>
			</table>			
		</td>
		
		<td colspan="8"  style="color:#fff;">
			<table cellpadding="0" cellspacing="0"  border="0">
				<tr>
					<td><span class="itemText">Antony and Cleopatra</span></td>
				</tr>
				<tr>
					<td><img src="plays/p6.png"></td>
				</tr>
			</table>
		</td>
		
		<td colspan="8"  style="color:#fff;">
			<table cellpadding="0" cellspacing="0"  border="0">
				<tr>
					<td><span class="itemText">Romeo & Juliet</span></td>
				</tr>
				<tr>
					<td><img src="plays/p7.png"></td>
				</tr>
			</table>
		</tr>
	</table>
</body>
</html>