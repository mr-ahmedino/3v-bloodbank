<?php
include "bloodconn.php";
if (isset($_GET['id'])) {
 $id=mysqli_real_escape_string($bloodconn,$_GET['id']);
}
$result=mysqli_query($bloodconn,"SELECT * FROM `personalinfo` WHERE Donor_id='$id'");
$ltb='';
while ($row=mysqli_fetch_assoc($result)) {
    $ltb.='<tr>
    <td>'.$row['Surname'].'</td>
    <td>'.$row['Firstname'].'</td>
    <td>'.$row['Middlename'].'</td>
    <td>'.$row['Age'].'</td>
    <td>'.$row['Gender'].'</td>
    <td>'.$row['Phonenumber'].'</td>
    <td>'.$row['Emailaddress'].'</td>
    <td>'.$row['City'].'</td>
    <td>'.$row['Address'].'</td>
    <td>'.$row['Occupation'].'</td>
    <td>'.$row['Statuses'].'</td>
    <td>'.$row['Genotype'].'</td>
    <td>'.$row['BloodGroup'].'</td>
    <td>'.$row['newbie'].'</td>
    <td>'.$row['Height'].'</td>
    <td>'.$row['Weight'].'</td>
    <td>'.$row['dateoffirst'].'</td>
    <td>'.$row['Intervalofdonation'].'</td>
    <td>'.$row['Std'].'</td>
    <td>'.$row['Heartcondition'].'</td>
    <td>'.$row['Operation'].'</td>
    </tr>';   
}

include 'inc/header.html';
?>
    
    <div class="container">
   
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Surname</th>
                      <th>First name</th>
                      <th>Middlename</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Phone number</th>
                      <th>Email Address</th>
                      <th>City</th>
                      <th>Address</th>
                      <th>Occupation</th>
                      <th>Status</th>
                      <th>Genotype</th>
                      <th>Blood Group</th>
                      <th>First timer?</th>
                      <th>Height</th>
                      <th>Weight</th>
                      <th>Date of first donation</th>
                      <th>Interval of donation</th>
                      <th>Std</th>
                      <th>Heart condition</th>
                      <th>Operated on recently?</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                 <?php echo $ltb;?>
                     
                    </tbody>
</table>       
          </div>
        </div>
        <!-- /.container-fluid -->
</div>
     
      <!-- End of Main Content -->

    <?php
    include 'inc/footer.html';
    ?>