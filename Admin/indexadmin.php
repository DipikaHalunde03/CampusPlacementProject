<?php

include('db_register.php');
include('header.php');
?>
<div class="container-fluid px-4"> 

                        
    <h1 class="mt-4">WelCome Dashboard</h1>
   <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active">Statistics of Placements </li>
     </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Total Students
                            <?php
                               $dash_students_query= "SELECT * FROM registered_user";
                               $dash_students_query_run=mysqli_query($conn,$dash_students_query);

                               if($Student_total =mysqli_num_rows($dash_students_query_run))
                               {
                                echo '<h4 class="mb-0"> '.$Student_total.' </h4>';

                               }
                               else
                               {
                                echo '<h4 class="mb-0">No data</h4> ';
                               }
                            ?>
                        
                    </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                 <a class="small text-white stretched-link" href="RegisteredUser.php">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
            </div>

          

            <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Company Visited
                  <?php
                               $dash_company_query= "SELECT * FROM job_post";
                               $dash_company_query_run=mysqli_query($conn,$dash_company_query);

                               if($company_total =mysqli_num_rows($dash_company_query_run))
                               {
                                echo '<h4 class="mb-0"> '.$company_total.' </h4>';

                               }
                               else
                               {
                                echo '<h4 class="mb-0">No data</h4> ';
                               }
                            ?>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="companyvisited.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                     </div>
                    </div>

                 
                    <div class="col-xl-3 col-md-6">
                     <div class="card bg-success text-white mb-4">
                        <div class="card-body">Applied Student for drive
                        <?php
                            $dash_placedstudents_query= "SELECT * FROM applicants";
                            $dash_placedstudents_query_run=mysqli_query($conn,$dash_placedstudents_query);

                               if($Placedstudent_total =mysqli_num_rows($dash_placedstudents_query_run))
                               {
                                echo '<h4 class="mb-0"> '.$Placedstudent_total.' </h4>';

                               }
                               else
                               {
                                echo '<h4 class="mb-0">No data</h4> ';
                               }
                            ?>
                        </div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                             <a class="small text-white stretched-link" href="appliedstudent.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>


            <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Placed Students
                       <?php
                            $dash_placedstudents_query= "SELECT * FROM placed_student";
                            $dash_placedstudents_query_run=mysqli_query($conn,$dash_placedstudents_query);

                               if($Placedstudent_total =mysqli_num_rows($dash_placedstudents_query_run))
                               {
                                echo '<h4 class="mb-0"> '.$Placedstudent_total.' </h4>';

                               }
                               else
                               {
                                echo '<h4 class="mb-0">No data</h4> ';
                               }
                            ?>
                </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="view_notice.php">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
             </div>
            </div>
</div>


<?php
include('footer.php');
include('script.php');
?>