<html>

<head>
    <title>User Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="login.css" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="login-box">
            <header id="head">
                <h2>
                    <center>Welcome to Registar Database Management System <br />
                </h2>
            </header>
            <div class="col-md-6 login-right">
                <center>
                    <h2> Registar Here</h2>
                    <form action="registation.php" method="POST">
                        <div class="form-group">
                            <label> Enter your fname : </label>
                            <input type="text" value="Mr / Ms" name="fname" placeholder="first name" class="form-control" required><br />
                            <label> Enter your lname : </label>
                            <input type="text" name="lname" placeholder="last name" class="form-control" required><br />
                            <label>Enter your Phone Number : </label>
                            <input type="text" value="+880" name="Phone" placeholder="Phone Number" class="form-control" required><br />
                        </div>
                        <div class="form-group">
                            <label>Enter your Email : </label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Enter your Password : </label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <h2><button type="submit" class="btn-btn-primary"> Registar</button></h2>
                    </form>
                    <a href="index.php">
                        <h4>Login Click Here<h4>
                    </a>
            </div>
            <footer id="foot">
                <h3>
                    <center>All Rights Reserved by Programmershaoun@2021</center>
                </h3>
            </footer>
        </div>
    </div>
</body>

</html>
