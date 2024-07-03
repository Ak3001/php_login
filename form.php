<?php

if(isset($_POST['submit'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $host = "localhost";
    $username = "akshaya";
    $password = "Ak3001aya#";
    $dbname = "sdt";
    $con = mysqli_connect($host, $username, $password, $dbname);
    $query=mysqli_query($con,"INSERT INTO  wer (username, passwo) VALUES ('$name', '$email')");
    if($query)
    {
        echo "Message has been sent successfully!";
    }
    else{
        echo "Error, Message didn't send! Something's Wrong."; 
    }

    // $con = mysqli_connect($host, $username, $password, $dbname);
    // if (!$con)
    // {
    //     die("Connection failed!" . mysqli_connect_error());
    // }
    // $sql = "INSERT INTO  wer (username, passwo) VALUES ('$name', '$email')";
    
    // //fire query to save entries and check it with if statement
    // $rs = mysqli_query($con, $sql);
    // if($rs)
    // {
    //     echo "Message has been sent successfully!";
    // }
    // else{
    //     echo "Error, Message didn't send! Something's Wrong."; 
    // }
    // //connection closed.
     mysqli_close($con);
}


?>

