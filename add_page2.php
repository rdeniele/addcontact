<?php
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

    } 
    
?>
