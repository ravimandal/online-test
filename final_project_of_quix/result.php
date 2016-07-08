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
      
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
	<body>
<center><h2>Result of&nbsp&nbsp<?php echo $_SESSION['seas_user'];?></h2></center> 
 <div class="log1">

 <fieldset>
  <legend> Result page</legend>

<form action="user_response.php" method="post" id="quiz">
<?php

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
    // output data of each row
    while($row = $result->fetch_assoc()) {
 //$numberOfQs = $_SESSION['correct'] + $_SESSION['wrong'];
//$score = round(( $_SESSION['correct'] / $numberOfQs) * 100);

//echo "Correct Answers:". $_SESSION['correct']."<br>"; 
//echo "Wrong Answers:". $_SESSION['wrong']."<br>"; 
//echo "Score:". $score;

?>
<h3><?php echo $row["question"]; ?></h3>
<input type="hidden" id="question_id" name="question_id" value="<?php echo $row["id"]; ?>" />
<div>


<div>
  
<!--<input id="1" type="radio" name="answer_<?php echo $row["id"] ?>" value="<?php echo $row["answer1"]; ?>" />if we want to show multiple in same page -->
  <input id="1" type="hidden" name="answer" value="<?php echo $row["option_id"]; ?> " />
         option: <?php echo $row["option_id"]; ?>   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    correct:<?php echo $row["answer"]; ?>  

</div>


<?php

}}
}
?>
<center><a href="/nitesh/final_project_of_quix/score.php"/>result</center>
</fieldset>
</div>
</body>
</html>