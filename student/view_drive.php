<?php

include('s_dbconnection.php');
include('s_header.php');


//Including Database Connection From db.php file to avoid rewriting in all files

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<div class="container-fluid px-4"> 
   
    <div class="row mt-4">
   

        <div class ="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Upcoming Drives</h4>
                                              
            </div>
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data"> 
              <table class="table table-bordered text-center">
                <tbody>
                  <thead>
                  <tr class="bg-dark text-white">
                    <th>Info</th>
                    <th>Company Name</th>
                    <th>Role</th>
                    <th>Location</th>
                    <th>Minimum Salary</th>
                    <th>Apply Now</th>
                    
                  </tr>
                </thead>

                  <?php
                  $query="SELECT * FROM job_post";
                  $query_run=mysqli_query($conn,$query);

                  if(mysqli_num_rows($query_run)>0)
                  {
                    foreach ($query_run as $row)
                    {
                      ?>
                      <tr>
                        <!--<td><img src="student/uploads/<?php echo $row['image']; ?>" width="60px" height="60px"></td>-->
                        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="image"styles="width:60px;height:60px;">';?></td>
                        <td><?=$row['jobtitle']; ?></td>
                        <td><?=$row['experience']; ?></td>
                        <td><?=$row['Location']; ?></td>
                        <td><?=$row['minimumsalary']; ?></td>   

                        <form action="application_form.php" method="POST">

                        <td><button type="submit" name="user_delete"  value="<?=$row['jobtitle'];?>" class="btn btn-success">Apply</button></td>
                        </form>
                      </tr>
                      <?php
                    }

                  }
                  else
                  {
                  ?>
                    <tr>
                      <td colspan="6">No Record found</td>
                    </tr>
                  <?php
                  }

                  ?>
                  
                </tbody>
              </table>

            </form>

            </div>
          </div>
        </div>
          
    </div>


</div>
</body>
</html>