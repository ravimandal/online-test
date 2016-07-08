<?php


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


if(isset($_POST['submit']))
     {                       // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$email = $_POST['uemail'];
$userid = $_POST['userid'];
$passid = $_POST['passid'];
$country = $_POST['ucountry'];
$query = mysqli_query($conn, "SELECT * FROM reg WHERE student_userid='".$userid."'");

if(mysqli_num_rows($query) > 0){

    echo "<br/><br/><span><center><h2>User id aleredy exist...!!<br/> Try  with different  :)</h2></center></span>";

}else{



if($username !=''&&$email !=''&&$userid !=''&&$passid !=''&&$country !='')
    {
//Insert Query of SQL

 	
$sql = "INSERT INTO reg(student_name, student_email, student_userid, student_passid, student_country,created_on,updated_on) 
values 
('$username', '$email', '$userid', '$passid','$country',now(),now())";
//$sql= "INSERT INTO questions_old (q_type,img_url,question, answer1,answer2,answer3,answer4, answer,created_on,updated_on) values
  //   ('$q_type','$fileupload', '$questions', '$q_option1','$q_option2','$q_option3','$q_option4','$q_answer', now(),now())";
    // header("location:question.php");


if ($conn->query($sql) === TRUE) {
echo "<br/><br/><span><center><h2>Data Inserted successfully...!!<br/> Registration sucsessful :)</h2></center></span>";
                                } 
else 
{

    echo "Error: " . $sql . "<br>" . $conn->error;
}

}}}
$conn->close();




?>


