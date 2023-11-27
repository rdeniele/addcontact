<?php
$conn=mysqli_connect("localhost","root","","phonebook_db")or die (mysqli_error($conn));
$id=$_GET['id'];
$sql="select * from tblcontact where ID=".$id;
$q=mysqli_query($conn,$sql)or die (mysqli_error($conn));
$r=mysqli_fetch_assoc($q);

?>
<form action="updatecontact_confirm.php?id=<?php echo $r['ID'];?>" method="post">
    Firstname: <input type="text" name="fname" value="<?php echo $r['FName']?>"></br>
    Lastname: <input type="text" name="lname" value="<?php echo $r['LName']?>"></br>
    Gender:</br>    
                <label for="gender"> Male: </label>
                <input type="radio" id="gender" name="gender" value="Male">
                     
                <label for="gender"> Female: </label>
                <input type="radio" id="gender" name="gender" value="Female"></br> 
                
                <label for="city">City: </label>
                    <select name="city" id="city" value="<?php echo $r['City']?>">
                    <option value="Bacolod">Bacolod</option>
                    <option value="Cebu">Cebu</option>
                    <option value="Manila">Manila</option>
                    <option value="Quezon">Quezon</option>
                    <option value="Other">other</option>
                    </select></br>

    Birthday: <input type="date" id="bday" name="bday" value="<?php echo $r['Bday']?>"></br>
    Contact number: <input type="text" name="contactnum" value="<?php echo $r['Contactnum']?>">

    </br>
    <button type="add" id="addbutton2" name="add">record</button> 
   
    <div class="contact_div_2">   
            <button type="button" id="listbutton2"  onclick="window.location.href = 'contactlist.php';">CONTACTS</button>
            <button type="button" id="homebutton2" onclick="window.location.href = 'index.php';">HOME</button> 
    </div>
</form>