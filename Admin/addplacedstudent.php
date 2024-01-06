<?php
include('db_register.php');
include('header.php');
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
          <?php include('message.php');
            ?>
          <div class="card">
            <div class="card-header">
              <h4>Add Users</h4>                                              
            </div>

            <div class="card-body">

                    <form action="placedlist.php" method="POST" enctype="multipart/form-data">

                        <div class="row">                        
                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Package</label>
                                <input type="text" name="Package" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Company Name</label>
                                <input type="text" name="company_name"  class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                            <div class="form-group">
                               <label for="">Select Image</label>
                              <input type="file" class="form-control  input-lg" id="image" name="image" placeholder="image" accept=".jpg,.png,.jpeg" required="">
                              </div>
                            </div>

                             <div class="col-md-12 mb-3">  
                                <button type="submit" name="add_student" class="btn btn-success">Add</button>   
                            </div>
                    

                        </div>
                        
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