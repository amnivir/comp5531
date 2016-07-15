<?php
session_start();

if (isset($_SESSION['USER_NAME'])) {
    $id = $_SESSION['USER_NAME'];

    $link = mysqli_connect('127.0.0.1:3306', 'root', '', 'warmup_project');

    if (!$link) {

        echo "connectn to db";

        die('Could not connect: ' . mysqli_error(''));
    } else {

        $query = ("SELECT * FROM warmup_project.persons WHERE `FirstName`='" . $id . "'");

        $result = mysqli_query($link, $query);

        $firstName = "";
        $Email = "";
        $DOB = "";
        $Gender = "";
        $Street = "";
        $Apt_no = "";
        $City = "";
        $Postal_code = "";
        $Country = "";

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $firstName = $row["FirstName"];
            $Email = $row['Email'];
            $DOB = $row['DOB'];
            $Gender = $row['Gender'];
            $Street = $row['Street'];
            $Apt_no = $row['Apt_no'];
            $City = $row['City'];
            $Postal_code = $row['Postal_Code'];
            $Country = $row['Country'];

        }
    }

    

}
?>