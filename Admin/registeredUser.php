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

            <?php include('message.php');
            ?>

        	<div class="card">
        		<div class="card-header">
        			<h4>Active Students
                        <a href="adduser.php" class="btn btn-primary float-end">Add User</a>
                    </h4>
        		</div>

        		<div class="card-body">
        			<table class="table table-bordered text-center">
        				<thead>
        					<tr class="bg-dark text-white">
                                <th>ID</th>
        						<th>PRN</th>
        						<th>Name</th>
        						<th>Email</th>
        						<th>Phone No</th>                    
        						<th>Edit</th>
        						<th>Delete</th>
        					</tr>
        				</thead>
        				<tbody>

        					<?php
        					$query="SELECT * FROM registered_user";
        					$query_run=mysqli_query($conn,$query);

        					if(mysqli_num_rows($query_run)>0)
        					{
        						foreach ($query_run as $row)
        						{
        							?>
        							<tr>
                                        <td><?=$row['ID']; ?></td>
        								<td><?=$row['prn']; ?></td>
        								<td><?=$row['Name']; ?></td>
        								<td><?=$row['email']; ?></td>
        								<td><?=$row['phone_no']; ?></td>

        								<td><a href="registeredEdit.php?ID=<?=$row['ID'];?>" class="btn btn-success">Edit</a></td>

                                        <form action="Usercode.php" method="POST">
        								<td><button type="submit" name="user_delete"  value="<?=$row['ID'];?>" class="btn btn-danger">Delete</button></td>
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

        		</div>
        	</div>
        </div>
          
    </div>


</div>
<?php
include('footer.php');
include('script.php');
?>