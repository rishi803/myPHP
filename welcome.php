<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou page</title>
    <style>
        *{
            font-family:arial, arial, helvetica, sans-serif;
            text-align:center;
            margin:auto;
            background-color:yellow;
        }
        .main{
            margin-top:100px;
        }
    </style>
</head>
<body>
    <br>
    <div class="main">
 <h1> Thankyou for submitting the form your query will be resolved shortly..</h1></div><br>
 <h3>To go back to main page <br>👇</h3> <button type="button" class="btn"><a href="index.html">Click here</a></button>
</body>
</html>
<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT Into `travel`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>