<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>How to update password in PHP using MySql & WampServer</title>

    <!-- Bootstrap core CSS -->
      <link href="style/css/bootstrap.min.css" rel="stylesheet">

      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="style/css/sticky-footer-navbar.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
    <!-- <div class="container" style="padding-left:35%;"> -->
      <div class="container" style="margin-left:500px; padding-top:30px;">
      <div class="page-header">

        <!-- <h1 style="margin-bottom:50px; margin-right:50%; color:red;">Change / update password in PHP using MySql and WampServer</h1> -->
       <h1 style="margin-bottom:50px; margin-right:50%;"> Change password </h1>

        <div style="width:30%;">
          <form action="update_password.php" method="post">
            <div class="form-group">
              <label for="exampleInputPassword1" >Old Password</label>
              <input type="password" class="form-control" name="old_pass" id="exampleInputPassword1" placeholder="Old Password..." required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" >New Password</label>
              <input type="password" class="form-control" name="new_pass" id="exampleInputPassword1" placeholder="New Password..." required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" >Re-Type New Password</label>
              <input type="password" class="form-control" name="re_pass" id="exampleInputPassword1" placeholder="Re-Type New Password..." required>
            </div>
            <button type="submit" name="re_password" class="btn btn-primary">Submit</button>
          </form>

        </div>

      </div>

    </div>

    <footer class="footer">
      <div class="container">
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="style/js/bootstrap.min.js"></script>


    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>

</html>
