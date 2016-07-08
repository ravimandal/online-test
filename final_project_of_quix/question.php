<?php
session_start();
if(!isset($_SESSION['seas_user'])) 
{
header("location:/nitesh/final_project_of_quix/login.html");

}
   else
      {
function my_function()
{

  if(isset($_SESSION['QuestionCount'])  && $_SESSION['QuestionCount']==10)
   {

   header("location:/nitesh/final_project_of_quix/result.php");
//exit();
   }

?>

<html>
<head>
	<title>
	Question page
	</title>
<script LANGUAGE="JavaScript">
function ValidateForm(form)
{
ErrorText= "";
if ( ( form.answer[0].checked == false ) && ( form.answer[1].checked == false ) && ( form.answer[2].checked == false )&& ( form.answer[3].checked == false )) 
{
alert ( "Please choose Option" ); 
return false;
}
if (ErrorText= "") 
	{
	 form.submit()
	}
}
</script>
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

<center><h2>Welcome&nbsp&nbsp<?=$_SESSION['seas_user'];?></h2></center>
 <div class="log1">

 <fieldset>
 <legend> Question page</legend> 
 <form action="/nitesh/final_project_of_quix/user_response.php" method="post" id="quiz">
 <?php

if(!isset($_SESSION['QuestionCount'])||$_SESSION['QuestionCount']==null)
{
//echo "either it is first time or the value lost";
$_SESSION['QuestionCount']=0;
}

$servername = "localhost";
$username = "Nitesh";
$password = "12345";
$dbname = "nitesh";

$conn = 
new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$test_value=0;

//$test_value=isset($_GET['type']);
if(isset($_GET['type']))
{
	$_SESSION['values']=$_GET['type'];
	 $test_value=$_SESSION['values'];

	
    //print_r($_SESSION['value']);
}




 $sql = "SELECT id,img_url, question, answer1, answer2, answer3, answer4, answer  FROM questions_old where q_type='$test_value' ORDER BY RAND() LIMIT 1";
//$result = $conn->query($sql);
?>

<?php
//$_SESSION['q_id'] = array();
//$_SESSION['q_id'] .= $row["id"].",";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$_SESSION['QuestionCount'] = $_SESSION['QuestionCount']+1;

?>
<?php

//if ((!isset($_SESSION['q_id']))||(isset($_SESSION['q_id']) &&  is_array($_SESSION['q_id']) && !in_array($row["id"],$_SESSION['q_id'])))
  //{
  	//$_SESSION['q_id'][] = $row["id"];
    //print_r($_SESSION['q_id']);
?>
  
<h3><?php echo $row["question"]; ?></h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="/home/spare-ubuntu/workspace/release_dir/nitesh/final_project_of_quix/images/<?php echo $row["img_url"]; ?>" width="50px" height="50px"/>
<input type="hidden" id="question_id" name="question_id" value="<?php echo $row["id"]; ?>" />
<div>
	
<!--<input id="1" type="radio" name="answer_<?php echo $row["id"] ?>" value="<?php echo $row["answer1"]; ?>" />if we want to show multiple in same page -->
	<input id="1" type="radio" name="answer" value="1" />
	<label for="1">1)&nbsp;
        	<?php echo $row["answer1"]; ?>  
	</label>
</div>

<div>
	<input id="2" type="radio" name="answer"  value="2" />
	<label for="2">2)&nbsp;
        	<?php echo $row["answer2"]; ?>  
	</label>
</div>
<div>
	
	<input id="3" type="radio" name="answer" value="3" />
	<label for="3">3)&nbsp;
        	<?php echo $row["answer3"]; ?>  
	</label>
</div>

<div>
	<input id="4" type="radio" name="answer" value="4" />
	<label for="4">4)&nbsp;
        	<?php echo $row["answer4"]; ?>  
	</label>
</div>

<?php

/*if(isset($_POST['SubmitButton'])) 
{


 //foreach ($_POST as $answerID) {

$sql_qy = "select answer from questions_old where answer = '".$_POST['answer']."'";
$query = $conn->query($sql_qy);

		if($query->num_rows >0)
{
			 $a = $query->fetch_assoc();
		 	$ans = $a['answer']; // get the correct answer A, B, C, or D

								 if ($_POST['answer'] == $ans)
								 {
									$_SESSION['correct'] = $_SESSION['correct']+1;
									print $_SESSION['correct'];								 } 
}								
		else{
								
									$_SESSION['wrong'] = $_SESSION['wrong']+1;
						        echo $_SESSION['wrong'];

								 
			}
		

	
}

*/?>


<?php
     }
  	//}
  }
 // else{
  //	my_function();
  //}
?>                  
<input type="submit" class="hvr-grow"  name="SubmitButton" value="Next" onClick="return ValidateForm(this.form)" />
                                 
</form>
</fieldset>
</div>
</body>
</html>
<?php

//echo "value has been set ";
echo $_SESSION['QuestionCount'];
}
}
my_function();
?>
