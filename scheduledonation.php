<?php
include "bloodconn.php";
if(isset($_POST['Submit'])){
    $Donor_id=$_POST['Donor_id'];
    $dateofdonation=$_POST['dateofdonation'];
    $donationquantity=$_POST['donationquantity'];
    if(empty($Donor_id)){
        $feedback="fill the field";
      }
      else{
        $Donor_id=mysqli_real_escape_string($bloodconn,$_POST['Donor_id']);
        $dateofdonation=mysqli_real_escape_string($bloodconn,$_POST['dateofdonation']);
        $donationquantity=mysqli_real_escape_string($bloodconn,$_POST['donationquantity']);

        $donations="INSERT INTO donations(`Donor_id`,`dateofdonation`,`donationquantity`)
        VALUES ('$Donor_id','$dateofdonation','$donationquantity')";



$results=mysqli_query($bloodconn,$donations);
if ($results) {
    $weq="SELECT * FROM donations WHERE dateofdonation='$dateofdonation' order by donationquantity DESC limit 1";
}
      }
    }

?>
<?php
include 'inc/header.html';
?>

<div class="container">
<div class="form-row">
<div class="col-md-6">
    <div class="ews"> Schedule a donation</div>
    <form action="scheduledonation.php" method="POST">
    <label for="donor"> Donor</label>
    <select class="form-control" id="" name="Donor_id" data-error=",errorTx" value="" required>
    
 <?php $result=mysqli_query($bloodconn, "SELECT * from personalinfo");
 while ($row4=mysqli_fetch_assoc($result)) {
     $pid=$row4['Donor_id'];
     $pname=$row4['Surname'].' '.$row4['Firstname'];
     echo "<option value='$pid'>$pname</option>";
 };
 ?>
    </select>
    
    <label for="dateofdonation">Schedule date for donation</label>
    <input type="date" name="dateofdonation" class="form-control">
    
</div>
</div>
<div class="form-row">
    <div class="col-md-6">
        <label for="donationquantity">Quantity(in pints)</label>
    <input type="number" name="donationquantity" class="form-control">
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