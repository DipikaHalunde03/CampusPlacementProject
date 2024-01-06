<?php
include('db_register.php');
include('header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Notice</title>
</head>
<body>
   <div class="container-fluid px-4"> 
   
    <div class="row mt-4">
<?php include('message.php');
            ?>

        <div class ="col-md-12">
        	<div class="card">
        		<div class="card-header">
        			<h4>Post a new Notice</h4>
                                              
        		</div>
        		<div class="card-body">

                    <form action="add_notice.php" method="POST" enctype="multipart/form-data">

                  <div class="col-md-12 mb-3 latest-job ">
                    <div class="form-group">
                      <input class="form-control input-lg" type="text" id="subject" name="subject" placeholder="Subject">
                    </div></div>

 
                     <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input class="form-control input-lg" type="date" id="date1" name="date1" required="">
                    </div></div>

                     <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input class="form-control input-lg" type="time" id="time1" name="time1" required="">
                    </div></div>


                     <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="file" class="form-control  input-lg" id="attachment" name="attachment" placeholder="attachment" accept=".pdf,.doc,.docx" required="">
                    </div>
                </div>


                    <div class="form-group">
                      <button type="submit" name="add_notice" class="btn btn-flat btn-success">Create</button>
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
include('footer.php');
include('script.php');
?>