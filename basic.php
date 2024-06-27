<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        This is a web page.
    </div>
    <?php 
     $age = 34;
     echo '<script type ="text/JavaScript">'; 
     if($age>=18){
        echo 'alert("You can to the party")';
     }
     else{
        echo 'alert("You cannot to the party")';
     }
     echo '</script>';  
    ?>
</body>
</html>