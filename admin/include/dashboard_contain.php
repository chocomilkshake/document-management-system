<?php
if ($_SESSION['office'] == "") {
    ?>
    <div class="card mb-4 wow fadeIn">
        <h3>Office's</h3>

        <!-- office container -->
        <div class="row-contain">
            <!--SMC Clickable Container-->
            <a href="view_office_file.php?getOffice=SMC">
                <div class="smc-clickable">
                    <!--Company Logo-->
                    <img src="img/company_logo/SMC.png" class="company-logo" alt="">

                    <!--Number of user and document-->
                    <div class="indication">
                        <h5>User's:
                            <?php echo $countSMCacc; ?>
                        </h5>

                        <h5>Documents:
                            <?php echo $countSMC; ?>
                        </h5>

                    </div>

                </div>
            </a>

            <a href="view_office_file.php?getOffice=Crempco">
                <div class="crempco-clickable">
                    <!--Company Logo-->
                    <img src="img/company_logo/Crempco.png" class="company-logo" alt="">

                    <!--Number of user and document-->
                    <div class="indication">
                        <h5>User's:
                            <?php echo $countCrempacc; ?>
                        </h5>

                        <h5>Documents:
                            <?php echo $countCremp; ?>
                        </h5>

                    </div>

                </div>
            </a>

        </div>


        <!-- office container page 2 -->
        <div class="row-contain">
            <!--SMC Clickable Container-->
            <a href="view_office_file.php?getOffice=Job Access">
                <div class="job-access-clickable">
                    <!--Company Logo-->
                    <img src="img/company_logo/Job Access.png" class="company-logo" alt="">

                    <!--Number of user and document-->
                    <div class="indication">
                        <h5>User's:
                            <?php echo $countjobacc; ?>
                        </h5>

                        <h5>Documents:
                            <?php echo $countJobacc; ?>
                        </h5>

                    </div>

                </div>
            </a>

            <a href="view_office_file.php?getOffice=Work Global">
                <div class="work-global-clickable">
                    <!--Company Logo-->
                    <img src="img/company_logo/Work Global.png" class="company-logo" alt="">

                    <!--Number of user and document-->
                    <div class="indication">
                        <h5>User's:
                            <?php echo $countWGacc; ?>
                        </h5>

                        <h5>Documents:
                            <?php echo $countWG; ?>
                        </h5>

                    </div>

                </div>
            </a>

        </div>


        <!-- office container page 3 -->
        <div class="row-contain">
            <!--SMC Clickable Container-->
            <a href="view_office_file.php?getOffice=Ayusinko">
                <div class="ayusin-clickable">
                    <!--Company Logo-->
                    <img src="img/company_logo/Ayusinko.png" class="company-logo" alt="">

                    <!--Number of user and document-->
                    <div class="indication">
                        <h5>User's:
                            <?php echo $countAyusinacc; ?>
                        </h5>

                        <h5>Documents:
                            <?php echo $countAyusin; ?>
                        </h5>

                    </div>

                </div>
            </a>

            <a href="view_office_file.php?getOffice=Crempco Construction">
                <div class="construction-clickable">
                    <!--Company Logo-->
                    <img src="img/company_logo/CREMPCO-CONSTRUCTION-UPDATED.png" class="company-logo" alt="">

                    <!--Number of user and document-->
                    <div class="indication">
                        <h5>User's:
                            <?php echo $countAyusinacc; ?>
                        </h5>

                        <h5>Documents:
                            <?php echo $countAyusin; ?>
                        </h5>

                    </div>

                </div>
            </a>

        </div>


    </div>




<?php }
// if the office have a value
else { ?>
    <div class="card mb-4 wow fadeIn">
        <!-- Top Contain -->
        <div class="row-contain">
            <div class="count_container">
                <!--Company Logo-->
                <img src="img/company_logo/<?php echo $_SESSION['office']; ?>.png" class="company-logo" alt="">

                <!--Number of user and document-->
                <div class="indication">
                    <h5>User's:
                        <?php echo $getAllAccount; ?>
                    </h5>

                    <h5>Documents:
                        <?php echo $getAllcount; ?>
                    </h5>
                </div>
            </div>
        </div>
        
        <div class="col-md-12">

        <table id="dtable" class="table table-striped">
          <thead class = "dash-head">

            <th>Filename</th>
            <th>FileSize</th>
            <th>Uploader</th>
            <th>Designation</th>
            <th>Date/Time Upload</th>
            <th>Downloads</th>

          </thead>
          <tbody>


            <tr>
              <?php

              require_once("include/connection.php");
              if($_SESSION['office']!=""){
              $query = mysqli_query($conn, "SELECT DISTINCT ID,NAME,SIZE,DESIGNATION,EMAIL,ADMIN_STATUS,TIMERS,DOWNLOAD FROM upload_files WHERE office='{$_SESSION['office']}' group by NAME DESC") or die(mysqli_error($con));
              }else{
                $query = mysqli_query($conn, "SELECT DISTINCT ID,NAME,SIZE,DESIGNATION,EMAIL,ADMIN_STATUS,TIMERS,DOWNLOAD FROM upload_files group by NAME DESC") or die(mysqli_error($con));
              }
              while ($file = mysqli_fetch_array($query)) {
                $id = $file['ID'];
                $name = $file['NAME'];
                $size = $file['SIZE'];
                $uploads = $file['EMAIL'];
                $status = $file['DESIGNATION'];
                $time = $file['TIMERS'];
                $download = $file['DOWNLOAD'];

                ?>

                <td width="20%">
                  <?php echo $name; ?>
                </td>
                <td>
                  <?php echo floor($size / 1000) . ' KB'; ?>
                </td>
                <td>
                  <?php echo $uploads; ?>
                </td>
                <td>
                  <?php echo $status; ?>
                </td>
                <td>
                  <?php echo $time; ?>
                </td>
                <td>
                  <?php echo $download; ?>
                </td>


                
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

    </div>
<?php } ?>