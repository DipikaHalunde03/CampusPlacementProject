<?php

include('s_dbconnection.php');
include('s_header.php');


//Including Database Connection From db.php file to avoid rewriting in all files

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
      tbody tr:hover
                    {
                      background-color: #FFFACD;
                    }
    </style>
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
                        
                              <td><?php echo "<img src='{$row['image']}' alt='{$row['jobtitle']}' width='100'>"; ?></td>
                              <td><?=$row['jobtitle'] ?></td>
                              <td><?=$row['experience'] ?></td>
                              <td><?=$row['Location'] ?></td>
                              <td><?=$row['minimumsalary'] ?></td>   

                              <td><a href="application_form.php?jobtitle=<?=$row['jobtitle'];?>" class="btn btn-success">Apply</a></td>


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
<?php
include('footer.php');
include('script.php');
?>