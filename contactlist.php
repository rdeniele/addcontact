<?php
$conn=mysqli_connect("localhost","root","","phonebook_db")or die (mysqli_error($conn));

 if(isset($_POST['val'])&&isset($_POST['val'])){
    $field = $_POST['field'];
    $val = $_POST['val'];
    $sql="select * from tblcontact where $field like '%$val%'";


}
else{
    $sql="select * from tblContact";
}
$q=mysqli_query($conn,$sql)or die(mysqli_error($conn));
?>

<!-- search bar -->
    <form method="post" action="contactlist.php">
        Search:
        <select name="field">
                <option value="FName">First Name</option>
                <option value="LName">Last Name</option>
                <option value="Gender">Gender</option>
                <option value="City">City</option>
                <option value="Bday">Birthday</option>
                <option value="contactnum">Contact Number</option>
            <input type="text" name="val">
            <input type="submit" name="search" value="Search">
    </form>

    <table border=1>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Gender</td>
            <td>City</td>
            <td>Birthday</td>
            <td>Contact Number</td>
        </tr>

    
        <?php
        //use the names in the database
            while($r=mysqli_fetch_assoc($q)){
               ?>
                <tr>
                    <td><?php echo $r['ID'];?></td>
                    <td><?php echo $r['FName'];?></td>
                    <td><?php echo $r['LName'];?></td>
                    <td><?php echo $r['Gender'];?></td>
                    <td><?php echo $r['City'];?></td>
                    <td><?php echo $r['Bday'];?></td>
                    <td><?php echo $r['Contactnum'];?></td>
                    <td>
                    <a href="deletecontact.php?id=<?php echo $r['ID']?>">
                    Delete
                    </a>
                    </td>
                    <td>
                    <a href="updatecontact.php?id=<?php echo $r['ID']?>">
                    Edit
                    </a>
                    </td>

                </tr>
              <?php  
            }
            

        ?>

    </table>


<?php
?>
<div class="contact_div_2">   
<button type="button" id="listbutton"  onclick="window.location.href = 'add_contacts.php';">ADD CONTACTS</button>
<button type="button" id="homebutton" onclick="window.location.href = 'index.php';">HOME</button> 
</div>

<?php
?>