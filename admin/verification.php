<?php
require_once("include/connection.php");
session_start();
$vCode = mysqli_real_escape_string($conn, $_POST['vCode']);
$userId = mysqli_real_escape_string($conn, $_SESSION['id']);
if (isset($vCode)) {


    $query = "SELECT * FROM `admin_login` WHERE `id` = '$userId' AND `code` = '$vCode'";
    $verify = mysqli_query($conn, $query);

    if (mysqli_num_rows($verify) > 0) {
        // Verification code is correct
        $updateQuery = "UPDATE `admin_login` SET `code` = '' WHERE `id` = '$userId'";
        if (mysqli_query($conn, $updateQuery)) {
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Database error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Code doesn\\'t match. Please try again.'); window.location.href = 'verification_page.html';</script>";
    }
} else {
    
}
?>