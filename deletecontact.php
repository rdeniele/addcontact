<?php
//connect to the db
$conn=mysqli_connect("localhost", "root","","phonebook_db") or die (mysqli_error($conn));
$id=$_GET['id'];
$sql="delete from tblcontact where ID=$id";
$q=mysqli_query($conn,$sql) or die (mysqli_error($conn));

header("location:contactlist.php");

?>