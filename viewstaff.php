<?php
include "bloodconn.php";

$result=mysqli_query($bloodconn,"SELECT * FROM `staff`");
$ldb='';
while ($row=mysqli_fetch_assoc($result)) {
    $ldb .= '<tr>
    <td>'.$row['Title'].'</td>
    <td>'.$row['Surname'].'</td>
    <td>'.$row['Firstname'].'</td>
    <td>'.$row['Middlename'].'</td>
    <td>'.$row['Email'].'</td>
    <td>'.$row['Phonenumber'].'</td>
    </tr>';   
};

include 'inc/header.html';
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- page heading -->
<h1 class="h3 mb-4 text-gray-800">Staff Register</h1>
</div>

<!-- <h1>New Donor's data</h1> -->
    
    <div class="container">
    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Title</th>
                      <th>Surname</th>
                      <th>Firstname</th>
                      <th>Middlename</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                 <?php echo $ldb;?>
                     
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