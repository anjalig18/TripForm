<?php
$insert=false;
if(isset($_POST['name'])){
 $SERVER = "localhost";
 $username ="root";
 $password = "";
 $con = mysqli_connect($SERVER,$username,$password);

 if(!$con){
    die("connection to this database failed due to ". mysqli_connect_error());
 }
 //echo  "success connecting to the db";

$name =$_POST['name'] ;
$age =$_POST['age'] ;
$gender =$_POST['gender'] ;
$email =$_POST['email'] ;
$phone =$_POST['phone'] ;
$desc =$_POST['desc'] ;
 
$sql = "INSERT INTO `Trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql) ==true){
    //echo "Successfully inserted";
    $insert=true;
}
else{
    echo "ERROR: $sql<br> $con->errno";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form </title>
    <link rel="stylesheet" href="style.css" class="ref">
</head>
<body>
    <img class ="bg" src="bg.jpg" alt="jis ">
    <div class="container">
        <h3><b>Welcome to Jis University US Trip form</b></h3>
        <p>
            Enter Your details and submit this form to confirm 
            your participation in the trip .
        </p>
        <?php
        if($insert == true){
            echo "<p class='submsg'><br>Thanks for submitting your form. We are happy to see you joining us for the US trip</br>";
        }
       
        ?>
        </p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phonenumber">
            <textarea name="desc" id="desc" cols="30" rows="20" placeholder="Enter any other information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>