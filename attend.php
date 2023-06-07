<?php
include "bloodconn.php";
if (isset($_GET['id'])) {
 $id=mysqli_real_escape_string($bloodconn,$_GET['id']);
}


$result=mysqli_query($bloodconn,"SELECT personalinfo.Surname,personalinfo.Firstname,personalinfo.Genotype,
personalinfo.BloodGroup,donations.dateofdonation,donations.Donor_id,
donations.donationquantity FROM personalinfo INNER JOIN donations ON
personalinfo.Donor_id=donations.Donor_id WHERE donations.Donor_id='$id'");
$row=mysqli_fetch_assoc($result); 
  $pid=$row['Donor_id'];
  $pname=$row['Surname'].' '.$row['Firstname'];
  $pgeno=$row['Genotype'];
  $pblood=$row['BloodGroup'];
  $pntity=$row['donationquantity'];

  if (isset($_POST['hamed'])) {
  $upd="UPDATE personalinfo SET Statuses='Completed' WHERE Donor_id='$id'";
  $ures=mysqli_query($bloodconn,$upd);
  if ($ures) {
   header('Location:completeddonations.php');
  };
   };

   if (isset($_POST['amed'])) {
    $upd="UPDATE personalinfo SET Statuses='Rejected' WHERE Donor_id='$id'";
    $ures=mysqli_query($bloodconn,$upd);
    if ($ures) {
     header('Location:rejecteddonations.php');
    };
     };

include 'inc/header.html';
?>
    
    <div class="container">

    <!-- Earnings (Monthly) Card Example -->
    <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Donor</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $pname?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Blood Group</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $pblood?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Genotype</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $pgeno?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Quantity to be donated</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo  $pntity?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  </div>

     <form action="#" method="post">
       <input type="hidden" name="" id="">
       <button type="submit" name="hamed"class="btn btn-primary btn-lg">Completed</button>
       <button type="submit" name="amed"class="btn btn-danger btn-lg">Rejected</button>
     </form>       

   
    
        </div>
        <!-- /.container-fluid -->
</div>
     
      <!-- End of Main Content -->

    <?php
    include 'inc/footer.html';
    ?>