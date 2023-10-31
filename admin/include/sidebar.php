<?php
if ($_SESSION['user_status'] == "Admin" && $_SESSION['office'] != "") {
    ?>
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">

            <img src="img/images.jpg" width="150px" height="200px;" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="dashboard.php" class="list-group-item active waves-effect">
                <i class="fas fa-chart-pie mr-3"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action waves-effect" data-toggle="modal"
                data-target="#modalRegisterForm">
                <i class="fas fa-user mr-3"></i>Add User</a>
            <a href="add_document.php" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-file-medical"></i> Add Document</a>
            <a href="view_userfile.php" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-folder-open"></i> Department File</a>
            <a href="User_log.php" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-chalkboard-teacher"></i> User logged</a>
            <!--     <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a> -->
        </div>
    </div>
<?php
}

elseif ($_SESSION['user_status'] == "Admin" && $_SESSION['office'] == "") {
    ?>
    <div class="sidebar-fixed position-fixed">

        <a class="logo-wrapper waves-effect">

            <img src="img/images.jpg" width="150px" height="200px;" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">
            <a href="dashboard.php" class="list-group-item active waves-effect">
                <i class="fas fa-chart-pie mr-3"></i>Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action waves-effect" data-toggle="modal"
                data-target="#modalRegisterForm">
                <i class="fas fa-user mr-3"></i>Add User</a>
            <a href="add_document.php" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-file-medical"></i> Add Document</a>
            <a href="User_log.php" class="list-group-item list-group-item-action waves-effect">
                <i class="fas fa-chalkboard-teacher"></i> User logged</a>
            <!--     <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a> -->
        </div>
    </div>
<?php
}
else{
?>
<div class="sidebar-fixed position-fixed">

<a class="logo-wrapper waves-effect">

    <img src="img/images.jpg" width="150px" height="200px;" class="img-fluid" alt="">
</a>

<div class="list-group list-group-flush">
    <a href="dashboard.php" class="list-group-item active waves-effect">
        <i class="fas fa-chart-pie mr-3"></i>Dashboard
    </a>
    <a href="add_document.php" class="list-group-item list-group-item-action waves-effect">
        <i class="fas fa-file-medical"></i> Add Document</a>
    <a href="view_userfile.php" class="list-group-item list-group-item-action waves-effect">
        <i class="fas fa-folder-open"></i> Department File</a>
    
    <a href="user_log.php" class="list-group-item list-group-item-action waves-effect">
        <i class="fas fa-chalkboard-teacher"></i> User logged</a>
    <!--     <a href="#" class="list-group-item list-group-item-action waves-effect">
  <i class="fas fa-money-bill-alt mr-3"></i>Orders</a> -->
</div>


<?php }?>