<?php
//include 'connect.php';
/*if(isset($_POST['Submit'])){
	require_once('PHP/connect.php');

	$sql = "INSERT INTO create_collection(Item_Name, Date_Added, For_Sale, Description)
	VALUES (DEFAULT, ?,?,?,?)";
	$stmt = mysqli_prepare($dbc, $sql);
	mysqli_stmt_bind_param($stmt, "ssss", $_POST['Item_Name'], $_POST['Date_Added'], $_POST['For_Sale']), $_POST['Description']);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1){
		mysqli_stmt_close($stmt);
        mysqli_close($dbc);
      } else {
        echo 'Error Occurred<br />';
        echo mysqli_error();
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
      }

}
*/

/*$servername = "localhost";  
$username = "root"; 
$password = "";  
$conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
$sql = mysql_select_db ('test',$conn) or die("unable to connect to database"); 
DEFINE ('DB_NAME', 'MyCollection');

$Item_Name = $_POST['Item_Name'];
$Date_Added = $_POST['Date_Added'];
$For_Sale = $_POST['For_Sale'];
$Description = $_POST['Description'];

mysqli_query($conn, "INSERT INTO create_collection(Item_Name, Date_Added, For_Sale, Description) VALUES('$Item_Name', '$Date_Added', 'For_Sale', 'Description') ");
*/

if(isset($_POST['Submit'])){
	require_once('../mysqli_connect.php');
	//require_once('../inc/connect.inc.php');

	$result = $dbc->query("SELECT Item_Name FROM create_collection WHERE Item_Name = '".$_POST['Item_Name']."' AND Date_Added= '".$_POST['Date_Added']."' AND For_Sale= '".$_POST['For_Sale']."' AND Description='".$_POST['Description']."'");
	if($result->num_rows == 0){
	$sql = "INSERT INTO create_collection(Item_Name, Date_Added, For_Sale, Description)
	VALUES (?,?,?,?)";
	$stmt = mysqli_prepare($dbc, $sql);
	mysqli_stmt_bind_param($stmt, "ssss", $Item_Name, $Date_Added, $For_Sale, $Description);
	mysqli_stmt_execute($stmt);
	$affected_rows = mysqli_stmt_affected_rows($stmt);
	if($affected_rows == 1){
		echo 'Successfully entered';
		mysqli_stmt_close($stmt);
        mysqli_close($dbc);
      } else {
        echo 'Error Occurred<br />';
        echo mysqli_error($dbc);
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
      }
  }
  else{
  	echo("Error");
  }
}
//$dbc->close();
/*

$Item_Name = $_POST['Item_Name'];
$Date_Added = $_POST['Date_Added'];
$For_Sale = $_POST['For_Sale'];
$Description = $_POST['Description'];

mysqli_query($conn, "INSERT INTO create_collection(Item_Name, Date_Added, For_Sale, Description) VALUES('$Item_Name', '$Date_Added', 'For_Sale', 'Description') ");
*/



?>