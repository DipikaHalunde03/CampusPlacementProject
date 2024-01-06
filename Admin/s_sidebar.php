<?php


//To Handle Session Variables on This Page
session_start();
if (isset($_SESSION['userid'])) {
    $name = $_SESSION['name'];
   
} 
else
{
    header("Location:index.php");
}

//If user Not logged in then redirect them back to homepage. 

?>
<html>

<head>
    <style>
        p {
           color: white;
           font-size:20px;
        }
    </style>
</head>  
   
   
<body>
<div id="layoutSidenav_nav">
                
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <b><p> <?php echo "&nbsp;&nbsp;&nbsp;Welcome, $name!";?></p></b>
                            <div class="sb-sidenav-menu-heading">Categaries</div>
                            <a class="nav-link" href="studentpage1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Profile</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                                Update Profile
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="updateprofile.php"><i class="fas fa-eraser"></i>Edit</a>
                                    
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Active Drives
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                <a class="nav-link" href="view_drive.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-bookmark"></i></div>
                               View Drives
                             </a>
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Placement Prepartion</div>
                            <a class="nav-link" href="resume.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                                Create Resume
                            </a>
                            <a class="nav-link" href="notice.php">
                                <div class="sb-nav-link-icon"><i class="far fa-clone"></i></div>
                                Notice Board
                            </a>

                            <a class="nav-link" href="Resources/cources.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                                Practice
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                       <div class="small">Logged in as : User</div>

                    <!--<h3 class="sb-sidenav-footer">Welcome<b><?php echo $_SESSION['name']; ?></b></h3>-->
                    </div>
                </nav>
</div>
</body>
</html>