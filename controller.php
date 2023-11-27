<?php
function dbconnect()
{
    $conn=mysqli_connect("localhost","root","","phonebook_db") or die (mysqli_error($conn));
}
?>