<?php
include "bloodconn.php";
$feedback="";
$Addback="";
if(isset($_POST['Submit'])){
$Surname=$_POST['Surname'];
$Firstname=$_POST['Firstname'];
$Middlename=$_POST['Middlename'];
$Age=$_POST['Age'];
$Gender=$_POST['Gender'];
$Phonenumber=$_POST['Phonenumber'];
$EmailAddress=$_POST['EmailAddress'];
$City=$_POST['City'];
$Address=$_POST['Address'];
$Occupation=$_POST['Occupation'];
$Genotype=$_POST['Genotype'];
$BloodGroup=$_POST['BloodGroup'];
$newbie=$_POST['newbie'];
$Height=$_POST['Height'];
$Weight=$_POST['Weight'];
$dateoffirst=$_POST['dateoffirst'];
$Intervalofdonation=$_POST['Intervalofdonation'];
$Std=$_POST['Std'];
$Heartcondition=$_POST['Heartcondition'];
$Operation=$_POST['Operation'];
if(empty($Firstname)){
  $feedback="fill the field";
}
else{
 $Surname=mysqli_real_escape_string($bloodconn,$_POST['Surname']);
 $Firstname=mysqli_real_escape_string($bloodconn,$_POST['Firstname']);
 $Middlename=mysqli_real_escape_string($bloodconn,$_POST['Middlename']);
 $Age=mysqli_real_escape_string($bloodconn,$_POST['Age']);
 $Gender=mysqli_real_escape_string($bloodconn,$_POST['Gender']);
 $Phonenumber=mysqli_real_escape_string($bloodconn,$_POST['Phonenumber']);
 $EmailAddress=mysqli_real_escape_string($bloodconn,$_POST['EmailAddress']);
 $City=mysqli_real_escape_string($bloodconn,$_POST['City']);
 $Address=mysqli_real_escape_string($bloodconn,$_POST['Address']);
 $Occupation=mysqli_real_escape_string($bloodconn,$_POST['Occupation']);
 $Genotype=mysqli_real_escape_string($bloodconn,$_POST['Genotype']);
 $BloodGroup=mysqli_real_escape_string($bloodconn,$_POST['BloodGroup']);
 $newbie=mysqli_real_escape_string($bloodconn,$_POST['newbie']);
 $Height=mysqli_real_escape_string($bloodconn,$_POST['Height']);
 $Weight=mysqli_real_escape_string($bloodconn,$_POST['Weight']);
 $dateoffirst=mysqli_real_escape_string($bloodconn,$_POST['dateoffirst']);
 $Intervalofdonation=mysqli_real_escape_string($bloodconn,$_POST['Intervalofdonation']);
 $Std=mysqli_real_escape_string($bloodconn,$_POST['Std']);
 $Heartcondition=mysqli_real_escape_string($bloodconn,$_POST['Heartcondition']);
 $Operation=mysqli_real_escape_string($bloodconn,$_POST['Operation']);

 
  $personalinfo="INSERT INTO personalinfo(`Surname`,`Firstname`,`Middlename`,`Age`,`Gender`,
  `Phonenumber`,`EmailAddress`,`City`,`Address`,`Occupation`,`Genotype`,`BloodGroup`,
  `newbie`,`Height`,`Weight`,`dateoffirst`,`Intervalofdonation`,`Std`,`Heartcondition`,
  `Operation`)
  VALUES ('$Surname','$Firstname','$Middlename','$Age','$Gender','$Phonenumber','$EmailAddress',
  '$City','$Address','$Occupation','$Genotype','$BloodGroup','$newbie','$Height','$Weight',
  '$dateoffirst','$Intervalofdonation','$Std','$Heartcondition',
  '$Operation')";


  $results=mysqli_query($bloodconn,$personalinfo);
if ($results){
  // session start
  $waq="SELECT * FROM personalinfo WHERE Age='$Age' order by Phonenumber DESC limit 1";
  
  };

    $Addback="Your form submission is succesful";
  };
};
?>

<?php
include 'inc/header.html';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- page heading -->
<h1 class="h3 mb-4 text-gray-800">Add Donors</h1>


<!-- <h1>New Donor's data</h1> -->
    <p>Input the data as received from the prospective donor</p>
    <div class="container">
    <form action="adddonor.php" method="POST">
        <span style="color: red;font-size: 30px;text-align: center;">Donor's personal information</span><br>
        <div class="row">
            <div class="col-md-4">
        <label>Surname:</label>
        <input type="text" class="form-control" name="Surname" placeholder="the donor's surname" required>
        </div>
        <div class="col-md-4">
        <label>Firstname:</label>
        <input type="text" class="form-control" name="Firstname" placeholder="the donor's firstname" required>
        </div>
        <div class="col-md-4">
        <label>Middlename:</label>
        <input type="text" class="form-control" name="Middlename" placeholder="the donor's Middlename" required>
        </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>Age:</label>
                <input type="number" class="form-control" name="Age" min="18" required>
            </div>
            <div class="col-md-4">
                <label>Gender:</label>
                <select name="Gender" class="form-control" required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
            <div class="col-md-4">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" name="Phonenumber" required>
            </div>
            <div class="col-md-4">
                <label>Email address:</label>
                <input type="email" class="form-control" name="EmailAddress" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>City of residence:</label>
                <input type="text" class="form-control" name="City" required>
            </div>
            <div class="col-md-4">
                <label>Address:</label>
                <input type="text" class="form-control" name="Address" required>
            </div>
            <div class="col-md-4">
                <label>Occupation:</label>
                <input type="text" class="form-control" name="Occupation" required>
            </div>
        </div>
          <span style="color: red;font-size: 30px;text-align: center;">Donor's health data</span><br>
          <div class="row">
            <div class="col-md-4">
            <label>Genotype:</label>
            <select name="Genotype" class="form-control" required>
                <option>AA</option>
                <option>AS</option>
                <option>SS</option>
                <option>AC</option>
            </select>
        </div> 
        <div class="col-md-4">
            <label>Blood Group:</label>
            <select name="BloodGroup" class="form-control" required>
                <option>A-</option>
                <option>B-</option>
                <option>AB-</option>
                <option>O-</option>
                <option>A+</option>
                <option>B+</option>
                <option>AB+</option>
                <option>O+</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>First timer?:</label>
           <select name="newbie" class="form-control" required>
            <option>Yes</option>
            <option>No</option>
            <option>Not Sure</option>
           </select>
        </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <label>Height:</label>
                <input type="number" class="form-control" name="Height" min="120" required>
            </div>
            <div class="col-md-4">
                <label>Weight:</label>
                <input type="number" class="form-control" name="Weight" max="320" required>
            </div>
            <div class="col-md-4">
            <label>Preffered date of donation</label>
            <input type="date" name="dateoffirst" class="form-control" required>
          </div>
          <div class="col-md-4">
            <label>Preffered interval of donation</label>
            <input type="month" name="Intervalofdonation" class="form-control" required>
          </div>
            <div class="col-md-4">
                <label>STD patient?:</label>
                <select name="Std" class="form-control" required>
                 <option>No</option>
                 <option>Yes</option>
                 <option>Not Sure</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Any existing heart condition?:</label>
                <select name="Heartcondition" class="form-control" required>
                 <option>No</option>
                 <option>Yes</option>
                 <option>Not Sure</option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Operated on recently?:</label>
                <select name="Operation" class="form-control" required>
                 <option>No</option>
                 <option>Yes</option>
                </select>
            </div>
          </div>
          <div class="wr">
            <button name="Submit" type="submit" class="btn btn-danger">Submit</button>
          </div>
    </form>
</div>
    </div>
    <?php
    include 'inc/footer.html';
    ?>