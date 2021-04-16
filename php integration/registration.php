<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
   <title>REGISTRATION</title>

<body>
   <div class= "container">

   <div class= "header">


   <h2> Register</h2>

   </div>

   <form action="registration.php" method= "post">

   <?php include('errors.php')?>


   <div>

   <label for="username">USERNAME :</label>
   <input type= "email" name="USERNAME" required>

    </div>

    <div>
    <label for="email">EMAIL :</label>
   <input type= "email" name="EMAIL" required>
   
    </div>
    <div>
    <label for="password">PASSWORD :</label>
   <input type= "password" name="PASSWORD 1" required>
   
    </div>

    <div>
    <label for="password"> CONFIRM PASSWORD :</label>
   <input type= "password" name="PASSWORD 2" rquired>
   
    </div>

    <button type= "submit" name="reg_user"> SUBMIT</button>
    <p>Already a user? <a href="login.php"><b>LOG IN</b></a></p>





   </form>





</body>   



</head>




</html>