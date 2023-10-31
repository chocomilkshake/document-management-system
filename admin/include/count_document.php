<?php
//call the cinnection of database
include("include/connection.php");
session_start();

// SMC count of document uploaded and count of account
$getCountsmc=mysqli_query($conn,"SELECT * FROM upload_files WHERE office ='SMC'");
$countSMC=mysqli_num_rows($getCountsmc);

$smcAccount=mysqli_query($conn,"SELECT * FROM admin_login WHERE office ='SMC'");
$countSMCacc=mysqli_num_rows($smcAccount);

// Crempco count of document uploaded and count of account
$getCountCremp=mysqli_query($conn,"SELECT * FROM upload_files WHERE office ='Crempco'");
$countCremp=mysqli_num_rows($getCountCremp);

$crempAccount=mysqli_query($conn,"SELECT * FROM admin_login WHERE office ='Crempco'");
$countCrempacc=mysqli_num_rows($crempAccount);

// Job Access count of document uploaded and count of account
$getCountJobacc=mysqli_query($conn,"SELECT * FROM upload_files WHERE office ='Job Access'");
$countJobacc=mysqli_num_rows($getCountJobacc);

$jobaccAccount=mysqli_query($conn,"SELECT * FROM admin_login WHERE office ='Job access'");
$countjobacc=mysqli_num_rows($jobaccAccount);

// Work Global count of document uploaded and count of account
$getCountwg=mysqli_query($conn,"SELECT * FROM upload_files WHERE office ='Work Global'");
$countWG=mysqli_num_rows($getCountwg);

$wgAccount=mysqli_query($conn,"SELECT * FROM admin_login WHERE office ='Work global'");
$countWGacc=mysqli_num_rows($wgAccount);

// Ayusin Ko count of document uploaded and count of account
$getCountayusin=mysqli_query($conn,"SELECT * FROM upload_files WHERE office ='Work Global'");
$countAyusin=mysqli_num_rows($getCountayusin);

$ayusinAccount=mysqli_query($conn,"SELECT * FROM admin_login WHERE office ='Work global'");
$countAyusinacc=mysqli_num_rows($ayusinAccount);

$allCount=mysqli_query($conn,"SELECT * FROM upload_files WHERE office ='{$_SESSION['office']}'");
$getAllcount=mysqli_num_rows($allCount);

$allAccount=mysqli_query($conn,"SELECT * FROM admin_login WHERE office ='{$_SESSION['office']}'");
$getAllAccount=mysqli_num_rows($allAccount);
?>