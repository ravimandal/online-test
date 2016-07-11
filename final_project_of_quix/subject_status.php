<?php


session_start();
if(!isset($_SESSION['seas_user'])) 
{
header("location:/nitesh/final_project_of_quix/login.html");

}
   else
      {
$servername = "localhost";
$username = "Nitesh";
$password = "12345";
$dbname = "nitesh";

$conn = 
new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$z=0;
//$test_value=isset($_GET['type']);
if(isset($_GET['type']))
{
	$_SESSION['values']=$_GET['type'];
	 //$test_value=$_SESSION['values'];

	
    //print_r($_SESSION['value']);
}
$b=$_SESSION['seas_user_id'];
$z=$_SESSION['values'];
$query = mysqli_query($conn, "SELECT * FROM subject_status WHERE user_id='".$b."' AND subject_type='".$z."' AND status in (0,1)");
//print_r($query) ;
//exit();
if(mysqli_num_rows($query) > 0){

    //echo "<br/><br/><span><center><h2>User id aleredy exist...!!<br/> Try  with different  :)</h2></center></span>";
header("location:/nitesh/final_project_of_quix/question.php/?type=$z");
}else{
$sql="INSERT INTO `nitesh`.`subject_status` 
	( `user_id`,`status`, `subject_type`, `created_on`, `updated_on`)
	VALUES
	('$b' ,'0', '$z', now(), now())";


if ($conn->query($sql) === TRUE) {
header("location:/nitesh/final_project_of_quix/question.php/?type=$z");
                                } 
else 
{

    echo "Error: " . $sql . "<br>" . $conn->error;
}





mysqli_close($conn);

}}
?>
