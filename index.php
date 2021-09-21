<?php
$insert = false;
if(isset($_POST['name'])){
    $servername = "localhost";
    $username = "username";
    $password = "";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    echo "sucessful connection to db";

$name= $_POST['name'];

$gender= $_POST['gender'];
$age= $_POST['age'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$desc= $_POST['desc'];

$sql = " INSERT INTO `trip'.'trip`(`name`, `age`, `gender`, `email`, `phone`, `other`, `dd`) VALUES 
( '$name', '$age', '$gender','$email', '$phone', '$desc', current_timestamp());";


if($con->query($sql)== true){
 
   $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>


    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class= "bg" src="bg.jpg" alt ="Background">
    <div class ="container">
        <h1> Welcome to VIT Bhopal USA Trip form</h1>
        <p> Enter your details to confirm your participation in the trip</p>
        <?php 
        if($insert == true){
       echo "<p class= 'submitmsg'>Thanks for submitting your form. We are happy to see you joining for the US trip.</p>";
        }
       ?>
        <form action = "index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder= "Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name ="phone" id ="phone" placeholder="Enter your phone number">
        <textarea name ="desc" id="desc" cols="30" rows ="10" 
        placeholder="Enter any other information here"></textarea>
        
        <button class="btn">Submit</button>
        
</form>

    </div>

    <script src = "index.js"></script>
 ?>
</body>
</html>
