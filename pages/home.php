<?php include 'includes/header.php' ?>
<div class="container">
    <div class="login-box">
        <header id="head">
            <h2>
                Welcome to Login Database Management System<br />
            </h2>
        </header>
        <div class="row" style="margin: auto;">
            <div class="login-left">
                <h1> Login Here</h1>

                <form action="pages/login.php" method="POST">

                    <div class="row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="text" class="form-control" name="user" value="" required placeholder="USERNAME">
                        </div>
                    </div>

                    <div class=" row mb-3">
                        <!-- <label class="col-sm-3 col-form-label">Name</label> -->
                        <div class="col-sm-6 input_value">
                            <input type="password" class="form-control" name="password" value="" required placeholder="PASSWORD">
                        </div>
                    </div>


                    <div class="col-sm-6 input_value">
                        <h2><button class="btn btn-primary" type="submit"> Login</button></h2>
                        <a href="action.php?page=registration">
                            <br>
                            <button class="btn btn-info" type="button" style="width: 50%; margin-left: 110px">Register</button>
                            <?php include 'includes/message.php'; ?>

                        </a>
                    </div>
                </form>

            </div>
        </div>
        <?php include 'includes/footer.php' ?>