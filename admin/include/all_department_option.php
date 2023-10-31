<!-- option for view_userfile/Department File Where we get designation to filter-->
<?php if ($_GET["getOffice"] == "SMC") { ?>
    <div class="col-md-12">

        <div class="card-body d-sm-flex justify-content-between">

            <!-- All File -->
            <h4 class="mb-2 mb-sm-0 pt-1">
                <form action="" method='post'>
                    <button type="submit" class="btn btn-info"><i class="fas fa-chevron-circle-right"></i>
                        all
                    </button>
                </form>
                </h4?>

                <!-- Legal File -->
                <h4 class="mb-2 mb-sm-0 pt-1">
                    <form action="" method='post'>
                        <button type="submit" class="btn btn-info"><i class="fas fa-suitcase"></i>
                            Legal
                        </button>
                        <input type="hidden" id="userStatus" name=userStatus value="Legal">
                    </form>
                    </h4?>

                    <!-- Welfare File -->
                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <form action="" method='post'>
                            <button type="submit" class="btn btn-info"><i class="fas fa-user"></i>
                                Welfare
                            </button>
                            <input type="hidden" id="userStatus" name=userStatus value="Welfare">
                        </form>
                        </h4?>

                        <!-- HR File -->
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <form action="" method='post'>
                                <button type="submit" class="btn btn-info"><i class="fas fa-user-friends"></i>
                                    Human Resource
                                </button>
                                <input type="hidden" id="userStatus" name=userStatus value="HR">
                            </form>
                            </h4?>

                            <!-- Skilled File -->
                            <h4 class="mb-2 mb-sm-0 pt-1">
                                <form action="" method='post'>
                                    <button type="submit" class="btn btn-info"><i class="fas fa-user-tie"></i>
                                        Skilled
                                    </button>
                                    <input type="hidden" id="userStatus" name=userStatus value="Skilled">
                                </form>
                                </h4?>

                                <!-- SMC Marketing File -->
                                <h4 class="mb-2 mb-sm-0 pt-1">
                                    <form action="" method='post'>
                                        <button type="submit" class="btn btn-info"><i class="fas fa-chart-pie"></i>
                                            Marketing
                                        </button>
                                        <input type="hidden" id="userStatus" name=userStatus value="Marketing(SMC)">
                                    </form>
                                    </h4?>
        </div>
    </div>

    

<?php } elseif ($_GET["getOffice"] == "Crempco") {
    ?>

<div class="col-md-12">

<div class="card-body d-sm-flex justify-content-between">

    <!-- All File -->
    <h4 class="mb-2 mb-sm-0 pt-1">
        <form action="" method='post'>
            <button type="submit" class="btn btn-info"><i class="fas fa-chevron-circle-right"></i>
                all
            </button>
        </form>
        </h4?>

        <!-- Legal File -->
        <h4 class="mb-2 mb-sm-0 pt-1">
            <form action="" method='post'>
                <button type="submit" class="btn btn-info"><i class="fas fa-suitcase"></i>
                    HR
                </button>
                <input type="hidden" id="userStatus" name=userStatus value="HR">
            </form>
            </h4?>

            <!-- Welfare File -->
            <h4 class="mb-2 mb-sm-0 pt-1">
                <form action="" method='post'>
                    <button type="submit" class="btn btn-info"><i class="fas fa-desktop"></i>
                        IT
                    </button>
                    <input type="hidden" id="userStatus" name=userStatus value="IT">
                </form>
                </h4?>

                <!-- HR File -->
                <h4 class="mb-2 mb-sm-0 pt-1">
                    <form action="" method='post'>
                        <button type="submit" class="btn btn-info"><i class="fas fa-user-friends"></i>
                            Outsourcing
                        </button>
                        <input type="hidden" id="userStatus" name=userStatus value="Outsourcing">
                    </form>
                    </h4?>

                    <!-- Skilled File -->
                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <form action="" method='post'>
                            <button type="submit" class="btn btn-info"><i class="fas fa-dollar-sign"></i>
                                Accounting
                            </button>
                            <input type="hidden" id="userStatus" name=userStatus value="Skilled">
                        </form>
                        </h4?>

                        <!-- SMC Marketing File -->
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <form action="" method='post'>
                                <button type="submit" class="btn btn-info"><i class="fas fa-chart-pie"></i>
                                    Marketing
                                </button>
                                <input type="hidden" id="userStatus" name=userStatus value="Marketing">
                            </form>
                            </h4?>
</div>
</div>






<?php } ?>

<div class="col-md-12">

        <table id="dtable" class="table table-striped">
            <thead>

                <th>Filename</th>
                <th>FileSize</th>
                <th>File Uploader</th>
                <th>Designation</th>
                <th>Date/Time</th>
                <th>Action</th>



            </thead>
            <tbody>


                <tr>
                    <?php

                    require_once("include/connection.php");
                    if (isset($_POST['userStatus'])) {
                        $userStatus = $_POST['userStatus'];
                        $getOffice = $_GET['getOffice'];
                    
                        // Create a prepared statement for the first query
                        $stmt = $conn->prepare("SELECT ID, NAME, SIZE, DESIGNATION, EMAIL, ADMIN_STATUS, TIMERS, DOWNLOAD FROM upload_files WHERE designation = ? AND office = ? AND (NAME, ID) IN (SELECT NAME, MAX(ID) AS MaxID FROM upload_files GROUP BY NAME)");
                        $stmt->bind_param("ss", $userStatus, $getOffice);
                        $stmt->execute();
                        $result = $stmt->get_result();
                    
                    } else {
                        $getOffice = $_GET['getOffice'];
                    
                        // Create a prepared statement for the second query
                        $stmt = $conn->prepare("SELECT DISTINCT ID, NAME, SIZE, DESIGNATION, EMAIL, ADMIN_STATUS, TIMERS, DOWNLOAD FROM upload_files WHERE office = ? GROUP BY NAME DESC");
                        $stmt->bind_param("s", $getOffice);
                        $stmt->execute();
                        $result = $stmt->get_result();
                    }
                    
                    
                    
                    
                    while ($file = $result->fetch_assoc()) {
                        $id = $file['ID'];
                        $name = $file['NAME'];
                        $size = $file['SIZE'];
                        $email = $file['EMAIL'];
                        $uploads = $file['DESIGNATION'];
                        $time = $file['TIMERS'];


                        ?>

                        <td>
                            <?php echo $name ?>
                        </td>
                        <td>
                            <?php echo floor($size / 1000) . ' KB'; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td>
                            <?php echo $uploads; ?>
                        </td>
                        <td>
                            <?php echo $time; ?>
                        </td>
                        <td><a href='downloads.php?file_id=<?php echo $id; ?>' class="btn btn-sm btn-outline-primary"><i
                                    class="fa fa-download"></i></a> <a href='delete.php?ID=<?php echo $id; ?>'
                                class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } $result->close();?>
            </tbody>
        </table>
    </div>