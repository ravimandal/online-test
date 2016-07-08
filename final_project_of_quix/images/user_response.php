<?php
session_start();


$servername = "localhost";
$username = "Nitesh";
$password = "12345";
$dbname = "nitesh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
$user=$_SESSION['seas_user_id'];///////////////////
$question=$_POST['question_id'];//////////
$option=$_POST['answer'];///////////////
$sql= "INSERT INTO user_response(user_id, question_id, option_id,created_on,updated_on) 
	values
	 ($user, $question, $option, now(),now())";
	// header("location:question.php");

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
								} 
else 
{

    echo "Error: " . $sql . "<br>" . $conn->error;
}
//print_r($ans)
//print_r($_POST);
//print_r($a);
//print_r($_POST['answer']);
//exit();
//correct and wrong count
//	echo"if";
//exit();


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
									$correct = $correct+1;
									$_SESSION['correct']=$correct;								 } 
}								
		else{
								
									$wrong = $wrong+1;
						        $_SESSION['wrong']=$wrong;

								 
			}
		

	
}

*/
		 	//print_r($a);
//print_r($_POST['answer']);





//end of correct and wrong count
$conn->close();
header("location:question.php");

/////////////

?>
