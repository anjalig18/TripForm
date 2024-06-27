<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welocome to php</title>
</head>
<body>
    <div>
    <class="container">
        this is my first php page.
        <?php
         echo "hello this is php";
         echo "<br>";
         echo  $variable1 =34;
         echo "<br>";
         echo  $variable2 = 45;
         echo "<br>";
         echo $variable1 + $variable2 ;
         echo "<br>";
         $newvar = $variable1;
         echo $newvar;
         echo "The value of 1<=4 is";
         echo var_dump(1<=4);
         echo "<br>";
         echo ++$variable1;
         echo "<br>";
         $myVar = (true and true);
         echo "<br>";
         echo var_dump($myVar);
         echo "<br>";
         $var = "This is a string ";
         echo "<br>";
         echo var_dump($var);
        ?>
    </div>

</body>
</html>