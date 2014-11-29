<?php
echo "<pre>";
print_r ($_POST);
echo "</pre>";

$mail = $_POST['mailAdd'];
$contact_no = $_POST['contactNo'];
$password = $_POST['password'];
try {
  $db = new PDO("mysql:host=localhost;dbname=club;port=3306","root","");
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $db->exec("SET NAMES 'utf8'");
}
catch (Exception $e) {
  echo "Could not connect to the database.php";
  exit;
}

try {
  $db->query("INSERT INTO members_login(email, contactNo, password) VALUES($mail,$contact_no,$password)");
  echo "Query ran successfully";

}
catch (Exception $e) {
  echo "Data could not be put into database";
  echo $db->query;
  exit;
}
// $con = mysqli_connect('localhost','root','','club');
//
// if (!$con) {
//   die('Could not connect: ' . mysqli_error($con));
// }
// else {
// 	echo "Connection successful!<br><br>";
// }
// $query_a="";
// $query_aRun = mysqli_query($con,$query_a);
//
// $insD = mysql_insert_id();
//
// $query_b="insert into members(memberId,FirstName, MiddleName, LastName, UGYear, PGUniv, PGYear, DRUniv, DRYear) values($insD,'$_POST[firstName]', '$_POST[middleName]', '$_POST[lastName]', $_POST[ugYear], '$_POST[pgUnivName]', $_POST[pgYear],'$_POST[docUniv]',$_POST[docYear])";
// echo $query_b;
// $query_bRun = mysqli_query($con,$query_b);
// mysqli_close($con);
?>
