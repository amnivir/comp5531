<?php
session_start();

  /**/

$FIRSTNAME=$LASTNAME=$PASSWORD= $EMAIL=$BDAY=$STREET =$APT=$CITY=$POSTAL= $COUNTRY= $GENDER ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FIRSTNAME = ($_POST["namefirst"]);
    $LASTNAME = $_POST['namelast'];
    $PASSWORD = $_POST['reg_password'];
    $EMAIL = $_POST['email'];
    $BDAY = $_POST['bday'];
    $STREET = $_POST['street'];
    $APT = $_POST['aptno'];
    $CITY = $_POST['city'];
    $POSTAL = $_POST['code'];
    $COUNTRY = $_POST['country'];
    $GENDER = $_POST['gender'];
}
    $link = mysqli_connect('127.0.0.1:3306', 'root', '', 'warmup_project');
if (!$link) {

    echo "connectn to db";

    die('Could not connect: ' . mysqli_error(''));
}

elseif (isset($_POST['email'])) {
    $EMAIL = $_POST['email'];

    $sql = ("SELECT `Email` FROM `warmup_project`.`persons` WHERE `Email`= '$EMAIL'");
    $result = mysqli_query($link, $sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "oops email already exists";
    } else {
        $query = ("INSERT INTO `warmup_project`.`persons` ( `LastName`, `FirstName`, 
`Apt_no`, `Street`, `City`, `Postal_Code`, `Country`, `Gender`,`Email`, `Password`) 
VALUES ('" . $LASTNAME . "', '" . $FIRSTNAME . "','" . $APT . "', '" . $STREET . "','" . $CITY . "', '" . $POSTAL . "', '" . $COUNTRY . "', '" . $GENDER . "', '" . $EMAIL . "', '" . $PASSWORD . "')");


        mysqli_select_db($link, 'warmup_project');
        $retval = mysqli_query($link, $query);

        if (!$retval) {
            die('Could not enter data: ' . mysqli_error($link));
        } else {
            header("Location: member_profile.php");
        }

    }
}
?>
