<?php
// database connection code
$con = mysqli_connect('localhost', 'root', '','employee');

// get the post records
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Joining = $_POST['Joining'];
$Employee = $_POST['Employee'];

// database insert SQL code
$sql = "INSERT INTO `details` (`Name`, `Address`, `Number`, `Date`, `id`) VALUES ('$Name', '$Address', '$Phone', '$Joining', '$Employee')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "Contact Records Inserted";
}

header("Location: http://localhost/biz/biz.php");

?>