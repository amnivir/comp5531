<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forget pasword</title>
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-md-4">
        <section class="login_member">
            <h4>Almost there! </h4>
            <form method="post" action= "forget_pass_session.php" role="login">
                <input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>
                <button id="send" type="submit" class="btn btn-primary btn-md">Send Email</button>
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