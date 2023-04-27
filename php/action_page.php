<?php


//echo $txtName;

$con = mysqli_connect('localhost', 'root', '','db_student_gym');


// get the post records
// $txtName = $_POST['txtName'];
// $txtEmail = $_POST['txtEmail'];
// $txtPhone = $_POST['txtPhone'];
// $txtMessage = $_POST['txtMessage'];
$txtName = $_POST['fname'];
// database insert SQL code
$sql = "INSERT INTO `tbl` ( `fname`) VALUES ('$txtName')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
