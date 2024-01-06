<?php
include('s_header.php');
require_once("s_dbconnection.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Placement Portal</title>
    <style>
    #heading {
        text-align: center;
        margin-bottom: 50px;
        padding-top: 20px;

    }

    .notice-box {
    width: 1000px;
    display: flex;
    flex-direction: column;
    border: 1px solid #ccc;
    padding: 7px;
    margin-bottom: 10px;
    background-color: lightblue;
    align-items: center;
    flex-basis: 1000px; /* Adjust the value as needed */
    padding-top: 0;
}

    .notice-subject,
    .notice-date,
    .notice-time,
    .notice-attachment,
    .notice-no-attachment {
        margin-bottom: 5px;
    }
    h1{
        color: red;
        text-align: center;

    }
    .titlew{
        font-family: times new Roman;
        font-size: 25px;
        font-weight: 20px;
    }
    a{
        text-decoration: none; /* Remove underline */
            color: black;
    }
</style>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
        
        <div class="content-wrapper" style="margin-left: 0px;">

            <section id="candidates" class="content-header">
                <div class="container" align="left">
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <div class="box box-primary">
                                

                                <h1>Attention Please !!!</h1><br>

                                <div class="box-body">
                                    <?php
                                    $sql = "SELECT * FROM notice";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc())
                                     {
                                    ?>
                                            <div class="notice-box">
                                                <div class="titlew"><b><div class="notice-subject">..   <?php echo $row['subject']; ?>  ..</div></b></div>
                                                <div class="notice-date"> Date : - <?php echo $row['date1']; ?></div>
                                                <div class="notice-time"> Time : - <?php echo $row['time1']; ?></div>
                                             <?php if ($row['Resumepath'] != '') { ?>
                                                <?php $attachmentPath = $row['Resumepath']; ?>
                                                <div class="notice-attachment">
                                                        <a  href="<?php echo $attachmentPath; ?>" target='_blank' >Click Here To Download Notice</a><br>
                                                </div>
                                                 <?php } else { ?>
                                                <div class="notice-no-attachment">No Attachment uploaded</div>
                                                        <?php } ?>


                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    

                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>


<?php
include('footer.php');
include('script.php');
?>