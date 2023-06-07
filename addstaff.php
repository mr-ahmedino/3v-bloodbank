<?php
include "bloodconn.php";
if(isset($_POST['Submit'])){
    $Title=$_POST['Title'];
    $Surname=$_POST['Surname'];
    $Firstname=$_POST['Firstname'];
    $Middlename=$_POST['Middlename'];
    $Email=$_POST['Email'];
    $Phonenumber=$_POST['Phonenumber'];
    $password=$_POST['passwords'];
    if(empty($Firstname)){
        $feedback="fill the field";
      }
      else {
        $Title=mysqli_real_escape_string($bloodconn,$_POST['Title']);
       $Surname=mysqli_real_escape_string($bloodconn,$_POST['Surname']);
       $Firstname=mysqli_real_escape_string($bloodconn,$_POST['Firstname']);
       $Middlename=mysqli_real_escape_string($bloodconn,$_POST['Middlename']);
       $Email=mysqli_real_escape_string($bloodconn,$_POST['Email']);
       $Phonenumber=mysqli_real_escape_string($bloodconn,$_POST['Phonenumber']);
       $password=mysqli_real_escape_string($bloodconn,$_POST['passwords']);

       $staffinfo="INSERT INTO staff(`Title`,`Surname`,`Firstname`,`Middlename`,`Email`,`Phonenumber`,`passwords`)
    VALUES ('$Title','$Surname','$Firstname','$Middlename','$Email','$Phonenumber','$password')";

    
  $results=mysqli_query($bloodconn,$staffinfo);
  if ($results){
    // session start
    $waaw="SELECT * FROM staff WHERE Email='$Email' order by Surname DESC limit 1";
      };
    };
};
?>

<?php
include 'inc/header.html';
?>

<div class="container">
        <span style="color: red;font-size: 30px;text-align: center;">Staff Registration</span>
    <form action="addstaff.php" method="POST">
        <label>Title</label>
      <select class="form-control" name="Title">
          <option>Dr.</option>
          <option>Mr.</option>
          <option>Mrs.</option>
          <option>Miss</option>
      </select>
      <label>Surname</label>
      <input type="text" name="Surname" class="form-control" required>
      <label>Firstname</label>
      <input type="text" name="Firstname" class="form-control" required>
      <label>Middlename</label>
      <input type="text" name="Middlename" class="form-control" required>
      <label>E-mail</label>
      <input type="email" name="Email" class="form-control" required>
      <label>Phone Number</label>
      <input type="tel" name="Phonenumber" class="form-control" required>
      <label>Password</label>
      <input type="password" name="passwords" class="form-control" required>
      <div class="wr">
        <button name="Submit" type="submit" class="btn btn-danger">Submit</button>
      </div>
    </form>
    </div>

    <?php
    include 'inc/footer.html';
    ?>