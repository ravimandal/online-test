<?php
session_start();
if(!isset($_SESSION['seas_user'])) 
{
header("location:/nitesh/final_project_of_quix/login.html");

}
   else
      {
        ?>
<html>
<head>
  <title>
  Question page
  </title>
  <link rel="stylesheet" href="/nitesh/final_project_of_quix/style.css">
</head>
<body>
 <nav>
  <div class="container">
    <ul class="nav">
      
      <li><a href="/nitesh/final_project_of_quix/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
  <body>
<center><h2>Result of&nbsp&nbsp<?php echo $_SESSION['seas_user'];?></h2></center> 
 <div class="log1">

 <fieldset>
  <legend> Result page</legend>

<form action="#" method="post" id="quiz">
<?php
 $correct=0;
                    $wrong=0;
$servername = "localhost";
$username = "Nitesh";
$password = "12345";
$dbname = "nitesh";

$conn = 
new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$b=$_SESSION['seas_user_id'];

 $sql = "SELECT * FROM questions_old ql,user_response us WHERE us.user_id=$b AND us.question_id=ql.id";
//$result = $conn->query($sql);


?>

<?php 


$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

?>
<?php
/*<!--<h3><?php echo $row["question"]; ?></h3>-->
<input type="hidden" id="question_id" name="question_id" value="<?php echo $row["id"]; ?>" />

<div>
  <!--<input id="1" type="radio" name="answer_<?php echo $row["id"] ?>" value="<?php echo $row["answer1"]; ?>" />if we want to show multiple in same page -->
  <input id="1" type="hidden" name="answer" value="<?php echo $row["option_id"]; ?> " />
         option: <?php echo $row["option_id"]; ?>   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    correct:<?php echo $row["answer"]; ?>  
</div>
            
 */?>                         
                     <?php

                   
                      if($row["option_id"]==$row["answer"])
                      {
                        $correct++;
                      }
                      else{
                        $wrong++;
                      }
                      ?>

<?php
                      //  echo $wrong;
                        //echo $correct;

}}

$total_questions=$wrong+$correct;
echo "<center></h3>Total no of questions:$total_questions</h3></center></br>";
echo "<center></h3>Correct questions: $correct</h3></center></br>";
echo "<center></h3>Correct questions: $wrong</h3></center></br>";
$percentage=$correct/$total_questions*100;
echo "<center></h3>percentage: $percentage</h3></center></br>";

if($percentage>=60)
{
$p=PASS;
echo "<center></h3>PASS</h3></center></br>";
}
else
{
$p=FAIL;
echo "<center></h3>FAIL</h3></center></br>";
}





//Insert Query of SQL
$sql1= "INSERT INTO test_status (user_id,total_question,correct_ans, wrong_ans,percentage,status,created_on,updated_on) values
     ('$b','$total_questions', '$correct','$wrong','$percentage','$p', now(),now())";
    // header("location:question.php");


if ($conn->query($sql1) === TRUE) {
                                } 
else 
{

    echo "Error: " . $sql . "<br>" . $conn->error;
}


//}





$conn->close();
}


?>
</fieldset>
</div>
</body>
</html>