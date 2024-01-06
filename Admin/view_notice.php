<?php
require_once("db_register.php");
include 'header.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Uploaded Notices</title>
</head>

<body class="hold-transition skin-green sidebar-mini">
    
         
                <div class="container-fluid px-4"><br>
                    <div class="row-mt-4">
                        <div class="col-md-12">                              

                <div class="card-body">
                  <form action="" method="POST" enctype="multipart/form-data"> 
                    <table class="table table-bordered text-center">
                      <tbody>
                        <thead>
                          <tr class="bg-dark text-white">
                            <th>No</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            
                          </tr>
                        </thead>
                        

                          <?php
                            $query="SELECT * FROM placed_student";
                            $query_run=mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                              foreach ($query_run as $row)
                               {
                          ?>
                            <tr>
                        
                        
                              <td><?=$row['id'] ?></td>
                              <td><?=$row['name'] ?></td>
                              <td><?=$row['company_name'] ?></td>

                          

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
         
 
   
</body>

</html>

<style>
    #heading {
        text-align: center;
        margin-bottom: 50px;
        padding-top: 20px;

    }

    .notice-box {
    width: 1000px;
    display: flex;
    flex-direction: column;
    border: 1px solid #ccc;
    padding: 7px;
    margin-bottom: 10px;
    background-color: lightblue;
    align-items: center;
    flex-basis: 1000px; /* Adjust the value as needed */
    padding-top: 0;
}

    .notice-subject,
    .notice-date,
    .notice-time,
    .notice-attachment,
    .notice-no-attachment {
        margin-bottom: 5px;
    }
    h1{
        color: red;
        text-align: center;

    }
    .titlew{
        font-family: times new Roman;
        font-size: 25px;
        font-weight: 20px;
    }
    a{
        text-decoration: none; /* Remove underline */
            color: black;
    }
</style>
