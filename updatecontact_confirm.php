<?php
    $conn=mysqli_connect("localhost","root","","phonebook_db") or die (mysqli_error($conn));

    $id=$_GET['id'];

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $bday=$_POST['bday'];
    $contactnum=$_POST['contactnum'];

    $sql="update tblcontact set
        FName='$fname',
        LName='$lname',
        Gender='$gender',
        City='$city',
        Bday='$bday',
        Contactnum='$contactnum'
        where ID=$id";
    $q=mysqli_query($conn,$sql)or die (mysqli_error($conn));
    header("location:contactlist.php");
?>