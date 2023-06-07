<?php
include "bloodconn.php";
$result=mysqli_query($bloodconn,"SELECT * FROM `personalinfo`");
$ltb='';
while ($row=mysqli_fetch_assoc($result)) {
    $ltb.='<tr>
    <td>'.$row['Surname'].'</td>
    <td>'.$row['Firstname'].'</td>
    <td>'.$row['Age'].'</td>
    <td>'.$row['Gender'].'</td>
    <td>'.$row['Phonenumber'].'</td>
    <td>'.$row['BloodGroup'].'</td>
    <td>'.$row['Genotype'].'</td>
    <td>'.$row['Statuses'].'</td>
    <td><a href="details.php?id='.$row['Donor_id'].'"class="btn-danger btn-sm">
    <i class="fa fa-eye"></i>Details</a></td>
    </tr>';   
};

include 'inc/header.html';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- page heading -->
<h1 class="h3 mb-4 text-gray-800">Donor Table</h1>
</div>

<!-- <h1>New Donor's data</h1> -->
    
    <div class="container">
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Age</th>
                      <th>Gender</th>
                      <th>Phone number</th>
                      <th>Blood Group</th>
                      <th>Genotype</th>
                      <th>Status</th>
                      <th>Action</th>
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