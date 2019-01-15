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
    <h4>Please Enter Your Details</h4>
   <form action="display.php" method="post">
       User Name : <input type="text" name="name" required /><br>
       Date Of Birth : <input type="date" name="birthDate" required /><br>
       Biography:<br>
       <textarea name="biography" id="" cols="25" rows="10" required ></textarea><br>
       List of Interests:<br> 
       <select name = 'subject[]' multiple size = 4 required >
           <option value="Coding">reading</option>
           <option value="Playing Games">playing</option>
           <option value="Reading">sleeping</option>
           <option value="Travelling">eating</option>
       </select><br>
       <p><input type = 'submit' name = 'submit' value = Submit> </p>
   </form>
   </div>
</body>

</html>