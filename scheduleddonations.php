<?php
include "bloodconn.php";


$asw="SELECT personalinfo.Surname,personalinfo.Firstname,personalinfo.Statuses,donations.dateofdonation,donations.Donor_id,
donations.donationquantity FROM personalinfo INNER JOIN donations on 
personalinfo.Donor_id=donations.Donor_id WHERE personalinfo.Statuses IS NULL";

$result=mysqli_query($bloodconn,$asw);
$lwb='';
while ($row=mysqli_fetch_assoc($result)) {
    $lwb .= '<tr>
    <td>'.$row['Surname'].'</td>
    <td>'.$row['Firstname'].'</td>
    <td>'.$row['dateofdonation'].'</td>
    <td>'.$row['donationquantity'].'</td>
    <td><a href="attend.php?id='.$row['Donor_id'].'"class="btn-danger btn-sm">
    <i class="fa fa-eye"></i>Attend to donor</a></td>
    </tr>';   
};

include 'inc/header.html';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- page heading -->
<h1 class="h3 mb-4 text-gray-800">Donation Register</h1>
</div>

<!-- <h1>New Donor's data</h1> -->
    
    <div class="container">
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Donor Surname</th>
                    <th>Donor Firstname</th>
                      <th>Date of donation</th>
                      <th>Donation quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                 <?php echo $lwb;?>
                     
                    </tbody>
</table>       
          </div>

        </div>
        </div>
        <!-- /.container-fluid -->

     
      <!-- End of Main Content -->

    <?php
    include 'inc/footer.html';
    ?>