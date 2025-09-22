<html>
    <head>
        <title>User Login Page</title>
        <link rel= "stylesheet" type = "text/css" href="style.css">
        <link rel="stylesheet" href= "login.css" type="text/css" />
    </head>
    <body>
        <div class = "container">
            <div class="login-box">
    <header id = "head">
	<h2>
		<center>Welcome to Login Database Management System<br/>
	</h2>
    </header>
            <div class = "row">
                <div class="col-md-6 login-left"> <center>
                    <h1> Login Here</h1>
                    <form action = "login.php" method = "POST">
                        <div class="form-group">
                            <label>Username</label>
                        <input type = "text" name = "user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                <input type = "password" name = "password" class="form-control" required>
                        </div>
                 <h2><button type = "submit" class="btn-btn-primary"> Login</button></h2>
                    </form>
                    <a href="Reg.php"><h4>NO Account please Registar Here<h4></a>
                </div>
            </div>
            <footer id = "foot">
	<h3><center>All Rights Reserved by Programmershaoun@2021</center>
	</h3>
    </footer>
        </div>
     </div>
    </body>
</html>
