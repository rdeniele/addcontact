<?php
    $conn=mysqli_connect("localhost","root","","phonebook_db")or die (mysqli_error($conn));

    if(isset($_POST['add'])){
    
    $fname= $_POST['fname'];?>
    <p><?php echo "First name: "?><?php echo "$fname";?></p>

    <?php   
    $lname= $_POST['lname'] ;?>
    <p><?php echo "Last name: "?><?php echo "$lname";?></p>
    
    <?php
    $gender= $_POST['gender'] ;?>
    <p><?php echo "Gender: "?><?php echo "$gender";?></p>
    
    <?php 
    $city= $_POST['city'];?>
    <p><?php echo "City: "?><?php echo "$city";?></p>
    <?php
    $birthday= $_POST['birthday'];?>
    <p><?php echo "Birthday:"?><?php echo "$birthday";?></p><?php 

    $contactnum= $_POST['contactnum'];?>
    <p><?php echo "Contact Number: "?><?php echo "$contactnum";?></p><?php
    
    $sql="insert into tblcontact(FName, LName, Gender, City,Bday,Contactnum) 
    values('$fname','$lname', '$gender', '$city','$birthday','$contactnum')";
    $q=mysqli_query($conn,$sql) or die (mysqli_error($conn));
    header("location:add_contacts.php");
    } 
    


?>
