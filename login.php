<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>member login</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>

<div class="container">
       <div class="col-md-4">
        <section class = "login_member">
            <h4>Welcome To POWON </h4>
            <form method="post" action="login_session.php" role="login">
                <p name="id"></p>
                <input type="text" name="name" placeholder="User Name" required class="form-control input-lg"  />
                <input type="password" class="form-control input-lg" name="password" placeholder="Password" />
                <div class="pwstrength_viewport_progress"></div>
                <button id="login" type="submit" class="btn btn-primary btn-md" >Login in</button>
                <div>
                    <div class="form-links">
                        <a href="register.php">Become a Member </a> or <a href="forget_password.php">Reset Password</a>
                    </div>

                </div>
            </form>
        </section>
    </div>
</div>

<!--<script type="text/javascript">
    document.getElementById("login").onclick = function () {
        location.href = "member_profile.php";
    };
</script>-->

</body>

</html>
</body>
</html>