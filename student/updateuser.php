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
              <h2>Edit Profile</h2>
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="icon fa fa-info"></i><strong>Important</strong><br>All the details provided by you must be absolutely correct and genuine, if found incorrect during further verification, then your candidature might get dismissed from the entire placement process.
              </div>


                    <form action="Usercode.php" method="POST">
                        <input type="hidden" name="user_id" >

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>

                             <div class="col-md-6 mb-3">
                                <STRONG><label for="">PRN</label></STRONG>
                                <input type="text" name="prn"  class="form-control">     
                            </div>








                        </div>
              </form>

<?php
include('footer.php');
include('script.php');
?>



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
