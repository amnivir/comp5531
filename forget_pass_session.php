<?php
session_start();

if (isset($_POST['email'])) {
    echo "connectn to db";
    $EMAIL = $_POST['email'];
    $EMAIL= filter_var(  $EMAIL, FILTER_SANITIZE_EMAIL);
    $pattern = '/^[^@]+@[^srn;,@%]+$/';
    if (!preg_match($pattern, trim( $EMAIL))) {
        $error[] = 'Please enter a valid email address';
    }

    $link = mysqli_connect('127.0.0.1:3306', 'root', '', 'warmup_project');
    if (!$link) {
        die('Could not connect: ' . mysqli_error());
    } else {
        $query = "SELECT * FROM warmup_project.member WHERE email_member ='" . $EMAIL . "'";
        $result = mysqli_query($link, $query) or die (mysqli_error('try again'));
        $count = mysqli_num_rows($result);


        if ($count == 1) {
            echo "my code";
            $to = "$EMAIL";
            $subject = "Account Details Recovery";
            $body = "Hi , ";
            $additionalheaders = "From: <user@domain.com>rn";
            $additionalheaders .= "Reply-To: POWON";
            //  $sentmail =  mail($to, $subject, $body, $additionalheaders);

        }
        else
        {
            $message = "Account not found please signup now!!";
        }
    }
}

?>