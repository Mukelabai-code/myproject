<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
   <title> LOG IN</title>

<body>
   <div class= "container">

   <div class= "header">


   <h2> LOG IN</h2>

   </div>

   <form action="login.php" method= "post">
   <div>

   <label for="username">USERNAME :</label>
   <input type= "email" name="USERNAME" required>

    </div>

    
    <div>
    <label for="password">PASSWORD :</label>
   <input type= "password" name="PASSWORD " required>
   
    </div>

    <button type= "submit" name="login_user"> LOG IN</button>
    <p>Don't have an account?<a href="registration.php"><b>REGISTER</b></a></p>

    
    
   </form>





</body>   



</head>




</html>