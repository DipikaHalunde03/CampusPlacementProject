<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignIn&SignUp</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
     <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>
    
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
           
          <form action="loginstudent.php" method="post" class="sign-in-form">
            <h2 class="title">Student Login</h2>

            <div class="input-field"><i class="fas fa-user"></i>
              <input type="text" id="username" name="username" placeholder="username"  required />
            </div>
          <br>

            <div class="input-field"> <i class="fas fa-lock"></i>
              <input type="password"  id="password" name="password" placeholder="password" required />
            </div>

           <button type="submit" name="login_btn" class="btn btn-primary">LOGIN</button>
            <br>
            <a href="update-password/updatepass.php">Change Password ?</a>      
          </form>

          <form action="loginadmin2.php" method="post" class="sign-up-form">
            <h2 class="title">Admin Login</h2>

             <?php if (isset($_GET['error']))
             {?>
              <p class='error'>
                <?php echo $_GET['error']; ?></p>
                <?php }?>

            <div class="input-field"><i class="fas fa-user"></i>
              <input type="text" id="username" name="username" placeholder="username"  required />
            </div>
            <br>

            <div class="input-field"><i class="fas fa-lock"></i>
              <input type="password"  id="password" name="password" placeholder="password" required />
            </div>
           <input type="submit" value="Login"  class="btn solid"/>

            <br>
            <a href="update-password/updatepass.php">Change Password ?</a>     
          </form>
          
        </div>
      </div>
      
      <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Are you Admin...?</h3>
                <br>
                <br>
          
                <button class="btn transparent" id="sign-up-btn">Sign In</button>
                <p>OR</p>
                <form action="../main.html" method="post">
                 <button class="btn transparent" id="sign-up-btn">Go To Home</button>
               </form>
            </div>          
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>Are you Student...?</h3>
                <br>
                <br>
          
                <button class="btn transparent" id="sign-in-btn">Sign In</button><br>
                <p>OR</p>
                <form action="../main.html" method="post">
                 <button class="btn transparent" id="sign-up-btn">Go To Home</button>
            </div>          
        </div>
      </div>
    </div>

    <script src="./app.js"></script>
  </body>
</html>