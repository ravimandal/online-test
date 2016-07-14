<?php
session_start();
    if(!isset($_SESSION['seas_admin'])) 
      {
      header("location:/nitesh/modified/admin_login.html");
      }
      else
        {

?>


<html>
<head>
<title>Question page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
 <nav>
  <div class="container">
    <ul class="nav">
      
      <li><a href="/nitesh/modified/admin_logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<center><h2>  </h2></center>
<div class="log1">
<form action="admin_upload_question.php" method="post" enctype="multipart/form-data">
<fieldset>
  <legend> Insert questions</legend>
          <label >QuestionType</label><br>
                <select name="type">      
                <option selected="" value="Default">Enter type</option>                                      
                <option value="1">computer</option>
                <option value="2">Network</option>
                <option value="3">Business</option>
          </select><br>
  

    
    

          <label >question</label><br>
          <input type="text" placeholder="Enter question" name="question" required><br>
     

          <label >Options:1</label><br>
          <input type="text" placeholder="enter option" name="option1" required><br>
    

          <label >Options:2</label><br>
          <input type="text" placeholder="enter option" name="option2" required><br>
    

          <label >Options:3</label><br>
          <input type="text" placeholder="enter option" name="option3" required><br>
      

          <label >Options:4</label><br>
          <input type="text" placeholder="enter option" name="option4" required><br>

         
          <label >correct</label><br>
          <input type="text" placeholder="enter answer" name="correct" required><br>

          
          <lable>Select image to upload</lable></br>
          <input type = "file" name = "image" /></br>
  

<input type="reset" value="Reset" name="Reset">   &nbsp<input type="submit" value="submit" name="submit">          
</fieldset> 
</form>
</div>
</body>
</html>

<?php

            }

?> 