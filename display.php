<?php

function birthday($birthday) {
    $age = date_create($birthday)->diff(date_create('today'))->y;
 
    return $age;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     
<div class="container">
    <h1>Profile</h1>
    <p class="background"><b>Name: </b><?php echo $_POST["name"]; ?></p>
    <p class="background"><b>Date Of Birth: </b><?php echo $_POST["birthDate"]; ?></p>
    <p class="background"><b>Age: </b><?php echo birthday($_POST['birthDate']);; ?></p>
    <?php
        $birthDate = $_POST['birthDate'];
        $name = $_POST['name'];
        $dob = date('d-m',strtotime($birthDate));
        $today = date('d-m');
        if($dob == $today)
        {
           echo "<p class='birthday'>Happy Birthday $name!</p>\n";
        } else
        {
           echo "";
        }
        ?>
    <p class="background"><b>Biography: </b><?php echo $_POST["biography"]; ?></p>
    <div class="background">
    <p><b>List of Interests:</b></p>
    <ul class='list'>
    <?php
        if(isset($_POST["submit"])) {
            if(isset($_POST["subject"])) {
                foreach ($_POST['subject'] as $subject)
                    print "<li class='li'>$subject</li><br/>";
            }
            else echo "Select an option first !!";
        }
        

    ?> 
    
    </ul>  
    </div> 
    <div class="back"><a href="index.php">Back</a></div>
</div>    
             
</body>
</html>