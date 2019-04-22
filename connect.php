<?php
$item = $_POST['item'];
$date = $_POST['date'];
$forSale = $_POST['forSale'];
$description = $_POST['description'];

if(!empty($item) || !empty($date) || !empty($forSale) || !empty($description)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "MyCollection";

	//create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}else{
		$INSERT = "INSERT Into create_new (Item_Name, Date_Added, For_Sale, Description) values(?,?,?,?)";

		//prepare statement
		//$stmt = $conn
	}


}
else{
	echo "All fields are required";
	die();
}

?>