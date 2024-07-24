<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username ="root";
    $password ="";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $Phone = $_POST['Phone'];
    $desc = $_POST['desc'];
   $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`,
    `Phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', 
    '$Phone', '$desc', current_timestamp());";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "Error: $sql <br> $con->error";
        $not_insert = true;
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inde.css">
</head>
<body>
<img class="img" src="down1.jpg" alt="" >
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
    <?php

    if($insert == true){
      echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining for the us trip</p>";
    }
?>
        <form action="ind.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email"  id="email" placeholder="Enter your email">
            <input type="Phone" name="Phone" id="Phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here">
            </textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="inde.js"></script>
</body>
</html>