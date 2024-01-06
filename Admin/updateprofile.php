<?php
include('s_dbconnection.php');
include('s_header.php');
?>
<div class="container-fluid px-4"> 

                        
   <ol class="breadcrumb mb-4">
     <li class="breadcrumb-item active"></li>
     </ol>
         <div class="row">

       

      <div class="col-md-12 bg-white padding-2">
              <h2>Update Profile</h2>
              <div class="alert alert-info alert-dismissible">
                <i class="fas fa-exclamation-triangle"></i><strong>Important </strong><br>All the details provided by you must be absolutely correct and genuine, if found incorrect during further verification, then your candidature might get dismissed from the entire placement process.
              </div>

              <div class="card-body">



                    <form action="updatedb.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">ID</label></STRONG>
                                <input type="text" id="ID" name="ID"   class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text"  id="prn" name="prn" class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">NAME</label></STRONG>
                                <input type="text" id="name" name="name"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">EMAIL</label></STRONG>
                                <input type="email"  id="email" name="email"   class="form-control">     
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">Date of Birth</label></STRONG>
                                <input type="date"  id="dob" name="dob"   class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PHONE NO</label></STRONG>
                                <input type="text" id="phone_no" name="phone_no"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">Highest QUALIFICATION</label></STRONG>
                                <input type="text" id="hq" name="hq"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">STREAM</label></STRONG>
                                <input type="text"  id="stream" name="stream"   class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">SKILLS</label></STRONG>
                                <input type="text" id="skills" name="skills"  class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">ABOUT ME </label></STRONG>
                                <input type="text" id="aboutme" name="aboutme"    class="form-control">     
                            </div>


                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">ADDRESS </label></STRONG>
                                <input type="text" id="address" name="address"   class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">HSC MARKS </label></STRONG>
                                <input type="text" id="hsc" name="hsc"    class="form-control">     
                            </div>
                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">SSC MARKS </label></STRONG>
                                <input type="text" id="ssc" name="ssc"  class="form-control">     
                            </div>

                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">UG MARKS </label></STRONG>
                                <input type="text" id="ug" name="ug"  class="form-control">     
                            </div>


                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">PG MARKS </label></STRONG>
                                <input type="text" id="pg" name="pg"   class="form-control">     
                            </div>


                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">UPLOAD RESUME/CHNAGE </label></STRONG>
                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>  
                            </div>

                            <div class="col-md-12 mb-3">
                               
                               <button type="submit" name="updateuser" class="btn btn-primary">Update Profile</button>    
                           </div>

                        </div>
              </form>
              <?php
include('footer.php');
include('script.php');
?>

                </div>

                </div>
        </div>
          
    </div>

</div>





<style>
  /* my css  */

  .box {

    font-size: medium;
    font-family: sans-serif;
  }


  li {
    color: aqua;
  }


  @media only screen and (max-width: 989px) {
    .box {
      margin: auto;
      text-align: center;
    }
  }
</style>
