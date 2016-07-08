<?php
session_start();
if(!isset($_SESSION['seas_user'])) 
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
      <li><a href="/nitesh/final_project_of_quix/logout.php">Logout</a></li>

      </ul>
  </div>
</nav>

<center><h2>Score by student</h2></center>
 <div class="log1">
  <form action="#" method="post">
  <fieldset>
  <legend> Select Subject</legend>
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'nitesh');
define('DB_USER','Nitesh');
define('DB_PASSWORD','12345');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$db=mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error());

      //execute the SQL query and return records
      $sql = "SELECT * FROM test_status ";
      ?>
      <table >
      <thead>
        <tr>
          <th>UserId</th>
          <th>TotalQuestions</th>
          <th>Correct</th>
          <th>Wrong</th>
          <th>Percentage</th>
          <th>Status</th>
          <th>UpdateTyme</th>
        </tr>
      </thead>
      <tbody>
     

<?php
$result = $con->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

            echo
            "<tr>
              <td>{$row['user_id']}</td>
              <td>{$row['total_question']}</td>
              <td>{$row['correct_ans']}</td>
              <td>{$row['wrong_ans']}</td>
              <td>{$row['percentage']}</td>
              <td>{$row['status']}</td>
              <td>{$row['created_on']}</td>
              </tr>"."\n";
          }}
        ?>
      </tbody>
    </table>
    <input type="hidden" value="Login">
</fieldset> 
 </form>
</div>
    </body>
    </html>
     <?php mysqli_close($con);
   }
     ?>
    