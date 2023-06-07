<?php
include "bloodconn.php";
$result=mysqli_query($bloodconn,"SELECT * FROM `personalinfo` WHERE `Statuses`='Pending'");
$ltb='';
while ($row=mysqli_fetch_assoc($result)) {
    $ltb.='<tr>
    <td>'.$row['Surname'].'</td>
    <td>'.$row['Age'].'</td>
    <td>'.$row['Gender'].'</td>
    <td>'.$row['Phonenumber'].'</td>
    <td>'.$row['BloodGroup'].'</td>
    <td>'.$row['Genotype'].'</td>
    <td>'.$row['Statuses'].'</td>
    <td>'.$row['dateoffirst'].'</td>
    </tr>';   
};

include 'inc/header.html';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- page heading -->
<h1 class="h3 mb-4 text-gray-800">Pending Donors Table</h1>
</div>

<!-- <h1>New Donor's data</h1> -->
    
    <div class="container">
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Surname</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Phone number</th>
                      <th>Blood Group</th>
                      <th>Genotype</th>
                      <th>Status</th>
                      <th>Date of First donation</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                 <?php echo $ltb;?>
                     
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