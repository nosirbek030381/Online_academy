<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['username'];
        $lname = $_POST['login'];
        $email = $_POST['parol'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online_academy";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO users (id, username, login, parol) VALUES ('', '$fname', '$lname', '$email')";

    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
    header('Location: index.html');



    // close connection
    mysqli_close($con);

?>