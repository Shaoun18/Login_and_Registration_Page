<?php include 'includes/header.php'; ?>

<div class="container">
    <div class="login-box">
        <header id="head">
            <h2>
                Welcome to Register Database Management System <br />
            </h2>
        </header>

        <div class="row" style="margin: auto;">
            <div class="login-left">
                <!-- <div class="col-md-6 login-right"> -->
                <h1> Register Here</h1>
                <form action="action.php?page=registration_db" method="POST">

                    <div class="row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="text" class="form-control" name="fname" required placeholder="first name" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="text" class="form-control" name="lname" required placeholder="last name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="text" class="form-control" value="+880" name="phone" required placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="email" class="form-control" name="email" required placeholder="Enter Your Email Address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="password" class="form-control" name="password" required placeholder="Password">
                        </div>
                    </div>

                    <div class="col-sm-6 input_value">
                        <h2><button class="btn btn-secondary" type="submit"> Register</button></h2>

                        <a href="action.php?page=home">
                            <button class="btn btn-info" type="button" style="width: 50%; margin-left: 110px">Login </button>
                            <?php include 'includes/message.php'; ?>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>