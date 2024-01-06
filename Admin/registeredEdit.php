<?php
include('db_register.php');
include('header.php');
?>
<div class="container-fluid px-4"> 

                        
    <h3 class="mt-4">Users</h3>
   <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active">Dashboard / Registered Users</li>
     </ol>
         <div class="row">


        <div class ="col-md-12">
        	<div class="card">
        		<div class="card-header">
        			<h4>Edit Users</h4>
                                              
        		</div>
        		<div class="card-body">

                    <?php

                    if(isset($_GET['ID']))
                    {
                        $user_id=$_GET['ID'];
                        $users="SELECT * FROM registered_user where ID='$user_id' ";
                        $user_run=mysqli_query($conn,$users);

                        if(mysqli_num_rows($user_run)>0)
                        {
                            foreach ($user_run as $user) 
                            {
                                ?>
              

                    <form action="s_Usercode.php" method="POST">
                        <input type="hidden" name="user_id" value="<?=$user['ID']?>">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">PRN</label>
                                <input type="text" name="prn" value="<?= $user['prn'];?>" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="<?= $user['Name'];?>" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" value="<?= $user['email'];?>" class="form-control">     
                            </div>
                            

                             <div class="col-md-6 mb-3">
                                <label for="">phone_no</label>
                                <input type="text" name="phone_no" value="<?= $user['phone_no'];?>" class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Status</label>
                                <input type="checkbox" name="Status" value="<?= $user['Status'] == '1' ? 'checked': ''?> width="70px" height="70px">    
                            </div>

                             <div class="col-md-12 mb-3">
                               
                                <button type="submit" name="update_user" class="btn btn-primary">Update User</button>    
                            </div>

                        </div>
                        
                    </form>

                        <?php
                            }   

                        }
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
                            <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
          
    </div>

</div>
<?php
include('footer.php');
include('script.php');
?>
