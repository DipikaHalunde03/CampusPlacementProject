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
		<?php include('message.php');
            ?>

        <div class ="col-md-12">
        	<div class="card">
        		<div class="card-header">
        			<h4>Post a new drive</h4>
                                              
        		</div>
        		<div class="card-body">

                    <form action="addpost.php" method="POST" enctype="multipart/form-data">

                  <div class="col-md-12 mb-3 latest-job ">
                    <div class="form-group">
                      <input class="form-control input-lg" type="text" id="jobtitle" name="jobtitle" placeholder="Company Name">
                    </div></div>

 
                     <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea class="form-control input-lg" id="summernote" name="description" placeholder="Job Description"></textarea>
                    </div></div>

                    
                     <div class="col-md-12 mb-3">
                     	<div class="form-group">
                      <input type="number" class="form-control  input-lg" id="minimumsalary" autocomplete="off" name="minimumsalary" placeholder="CTC" required="">
                    </div></div>

                    
                     <div class="col-md-12 mb-3"><div class="form-group">
                      <input type="text" class="form-control  input-lg" id="maximumsalary" name="maximumsalary" placeholder="Eligibility Criteria" required="">
                    </div></div>


                     <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input class="form-control  input-lg" id="experience" autocomplete="off" name="experience" placeholder="Role" required="">
                    </div>
                </div>


                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control  input-lg" id="qualification" name="qualification" placeholder="Qualification Required" required="">
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" class="form-control  input-lg" id="Location" name="Location" placeholder="Add Location" required="">
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="file" class="form-control  input-lg" id="image" name="image" placeholder="image" accept=".pdf,.png,.jpeg" required="">
                    </div>
                </div>

                

                    <div class="form-group">
                      <button type="submit" name="add_post" class="btn btn-flat btn-success">Create</button>
                    </div>
                  </div>
                </form>
              </div>

                </div>
            </div>
        </div>
          
    </div>


</div>


</body>
</html>



<?php
include('script.php');
?>