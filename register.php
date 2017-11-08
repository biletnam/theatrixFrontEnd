<html>
<head>
    <title>Admin Registration</title>
</head>
<input type="image" src="icon/homeBtn.png" a href="home.php" align="right" style="colour:#"/>
<link rel="stylesheet" href="css/styleSheet1.css">
<body background="images/scene3">
<h1>Theatrix Administrator Registration</h1>
<div class = "container form-signin" align="center">

</div>
<div class = "container" align="center" >
    <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <h4 class = "form-signin-heading">
            <div class="group">
                <label for="name">Name</label>
                <div><input id="name" name="name" maxlength="20" class="form-control" type="text" placeholder="Name" required autofocus></div>
            </div>
            <div class="group">
                <label for="surname">Surname</label>
                <div><input id="surname" name="surname" maxlength="20" class="form-control" type="text" placeholder="Surname" required autofocus></div>
            </div>
            <div class="group">
                <label for="ID">ID Number</label>
                <div><input id="ID" name="ID" maxlength="13" class="form-control" type="ID" onkeypress="return isNumber(event);" placeholder="ID Number" required autofocus></div>
            </div>
            <div class="group">
                <label for="tID">Theatrix ID</label>
                <div><input id="tID" name="tID" maxlength="5" class="form-control" type="tID" placeholder="Theatrix ID" required autofocus></div>
            </div>
            <div class="group">
                <label for="phone" >Contact Number</label>
                <div><input type="text" maxlength="11" name="phone" class="form-control" id="phone" onkeypress="return isNumber(event);" placeholder="+(27 21) " required autofocus/></div>
            </div>
            <div class="group">
                <label for="email">Email</label>
                <div><input id="email" name="email" class="form-control" type="email" placeholder="Email" required autofocus></div>
            </div>
            <div class="group">
                <label for="psw">Password</label>
                <div><input id="psw" name="psw" class="form-control" type="text" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autofocus></div>
            </div>
			<br></br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "register">Register</button></br></br>
    </form>
    Already Registered <a href = "login.html" tite = "NewLogin">Login Screen
</div>
</body>
</html>