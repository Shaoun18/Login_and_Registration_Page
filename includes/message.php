<?php
// Check for success message
if (isset($_GET['success'])) {
    $message = '';

    if ($_GET['success'] == 'Registration') {
        $message = 'Registration Successfully';
    } else if ($_GET['success'] == 'email_taken') {
        $message = 'Email Already Registered';
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
