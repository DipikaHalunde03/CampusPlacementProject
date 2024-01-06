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
        	<div class="card">
        		<div class="card-header">
        			<h4>Add Users</h4>
                                              
        		</div>
        		<div class="card-body">

                    <form action="adduserdb.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">ID</label>
                                <input type="text" name="ID" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">PRN</label>
                                <input type="text" name="prn" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="Name" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email"  class="form-control">     
                            </div>
                            

                             <div class="col-md-6 mb-3">
                                <label for="">phone_no</label>
                                <input type="tel"  pattern="[0-9]{10}" name="phone_no"  class="form-control">     
                            </div>

                            

                            <div class="col-md-6 mb-3">
                                <label for="">Initial Password</label>
                                <input type="text" name="password" class="form-control" width="70px" height="70px">    
                            </div>

                             <div class="col-md-12 mb-3">  
                                <button type="submit" name="add_user" class="btn btn-success">Add User</button>   
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