<?php

include('s_dbconnection.php');
include('s_header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style >
      img{
        margin-top: 25px;
      }
      .card:hover
                    {
                      background-color: #FFFACD;
                    }
    </style>
</head>
<body>
  <br>
<h1 class="text-center">Recent Placed Students</h1>
<div class="container py-5"> 
  <div class="row mt-4">  
    <?php
      $query="SELECT * FROM placed_student";
      $query_run=mysqli_query($conn,$query);
      $check_student=mysqli_num_rows($query_run)>0;

        if( $check_student)
        {
          while ($row=mysqli_fetch_array($query_run))
          {
            ?>
            <div class="col-md-3 ">                         
              <div class="card">
               <center> <img src="<?php echo $row['image'];?>" width="250px" height="200px" alt="Student Images" ></center>
                  <div class="card-body">               
                    <h4 class="card-title" align="center"><?php echo $row['name'];  ?></h4>
                    <h6 class="card-text" align="center"><?php echo $row['package'];  ?></h6>
                    <h6 class="card-text" align="center"><?php echo $row['company_name'];  ?></h6>

                  </div>
              </div>
            </div>
            <?php
                        
          }

        }
        else
        {
          echo "No record found";
        }
    ?>
      
  </div>
</div>
</body>
</html>
<?php
include('footer.php');
include('script.php');
?>