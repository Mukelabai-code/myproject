<?php

session_start();

if (isset($_SESSION['username'])){

	$_SESSION['msg']= "you must log in first to view contents";
	header("location :login.php")




if (isset($_GET['LOG OUT'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location :login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>HOME PAGE</title>

<body>
<H1>THIS IS NKANI</H1>

<?php
if(isset($_SESSION['success'])): ?>
 
   <div>
       <h3>
          <?php
            
            echo $_SESSION['success'];
            unset ($_SESSION['success']);

<?php endif?>

// if the user logs in print information about him

<?php if(isset($_SESSION['username'])):?>
     
     <h3> welcome<strong><?php echo $_SESSION['username']; ?></strong></h3>
     		<button><a href="index.php?logout='1'"></a></button>

     		<?php endif ?>

</body>

</html>




          ?>


       </h3>

   </div>



?>