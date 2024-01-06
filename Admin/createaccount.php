<?php
session_start();
include('header.php');
?>
<div class="container-fluid px-4"> 
   
    <div class="row mt-4">


        <div class ="col-md-7">


            <?php include('message.php'); ?>

        	<div class="card">
        		<div class="card-header">
        			<h4>Create Account</h4>
                                              
        		</div>
        		<div class="card-body">

                    <form action="registeraccount.php" method="POST">

                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input reqired type="text" name="username"placeholder="Enter the Username" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input reqired type="password" name="password" placeholder="Enter the Password" class="form-control">
                        </div>

                         <div class="form-group mb-3">
                            <label>Confirm Password</label>
                            <input reqired type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
                        </div>



                        <div class="form-group mb-3">
                            <button type="submit" name="register_btn" class="btn btn-primary">Register Now</button>
                        </div>

                 
                    </form>

                </div>
            </div>
        </div>
          
    </div>


</div>
<?php
include('footer.php');
include('script.php');
?>