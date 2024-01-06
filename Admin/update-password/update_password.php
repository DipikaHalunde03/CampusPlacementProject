<?php
$conn_db = mysqli_connect("localhost", "root", "", "miniproject") or die(mysqli_error($conn_db));

if (isset($_POST['re_password'])) {
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $re_pass = $_POST['re_pass'];

    $chg_pwd = mysqli_query($conn_db, "SELECT * FROM users WHERE id='1'");
    $chg_pwd1 = mysqli_fetch_array($chg_pwd);
    $data_pwd = $chg_pwd1['password'];

    if ($data_pwd == $old_pass) {
        if ($new_pass == $re_pass) {
            $update_pwd = mysqli_query($conn_db, "UPDATE users SET password='$new_pass' WHERE id='1'");
            echo "<script>alert('Update Successfully'); window.location='updatepass.php'</script>";
        } else {
            echo "<script>alert('Your new and Retype Passwords do not match'); window.location='updatepass.php'</script>";
        }
    } else {
        echo "<script>alert('Your old password is incorrect'); window.location='updatepass.php'</script>";
    }
}

mysqli_close($conn_db);
?>
