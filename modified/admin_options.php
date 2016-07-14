<?php
session_start();
  if(!isset($_SESSION['seas_admin'])) 
     {
     header("location:/nitesh/final_project_of_quix/admin_login.html");

     }
     else
        {
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/nitesh/final_project_of_quix/style.css">

</head>
<title>login</title>
<body>
   <nav>
     <div class="container">
       <ul class="nav">      
         <li><a href="/nitesh/modified/admin_logout.php">Logout</a></li>
       </ul>
  </div>
</nav>

<center><h2> </h2></center>

 <div class="log1">
 <form action="#" method="post">
 <fieldset>
 <legend> Admin Option</legend>
 <div class="contact">
 <center>
	<a href="/nitesh/modified/admin_question_add.php">Questions add</a>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="/nitesh/modified/admin_question_available.php">Questions available</a>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="/nitesh/modified/admin_score_by.php">Results</a>

</center>
<div>
</fieldset> 
</form>
</div>

<?php

            }

?>