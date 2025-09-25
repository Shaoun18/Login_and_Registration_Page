<?php
// Success message
if (isset($_GET['success'])) {
    $message = '';

    if ($_GET['success'] == 'Registration') {
        $message = 'Registration Successfully';
    }

    if (!empty($message)) {
        echo "
            <div id='autoHideAlert' class='alert alert-success alert-dismissible fade show position-fixed' 
                 style='bottom: 20px; right: 20px; z-index: 1050;'>
                <strong>$message</strong>
            </div>
            <script>
                setTimeout(function() {
                    var alertElement = document.getElementById('autoHideAlert');
                    if (alertElement) {
                        var bsAlert = new bootstrap.Alert(alertElement);
                        bsAlert.close();
                    }
                }, 2000);
            </script>
        ";
    }
}

// Error message
if (isset($_GET['error'])) {
    $errorMsg = '';

    if ($_GET['error'] == 'wrongPass') {
        $errorMsg = 'Incorrect Password!';
    } else if ($_GET['error'] == 'email_taken') {
        $errorMsg = 'Email Already Registered';
    } else if ($_GET['error'] == 'noUser') {
        $errorMsg = 'User Not Found!';
    }


    if (!empty($errorMsg)) {
        echo "
            <div id='autoHideAlert' class='alert alert-danger alert-dismissible fade show position-fixed' 
                 style='bottom: 20px; right: 20px; z-index: 1050;'>
                <strong>$errorMsg</strong>
            </div>
            <script>
                setTimeout(function() {
                    var alertElement = document.getElementById('autoHideAlert');
                    if (alertElement) {
                        var bsAlert = new bootstrap.Alert(alertElement);
                        bsAlert.close();
                    }
                }, 2000);
            </script>
        ";
    }
}
