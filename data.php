<?php
session_start();
error_reporting(0);
include('includes/connection.php');


    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LTK CM-Work</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Corrective Maintenance</h4>
    </div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Corrective Maintenance Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Cause/Problem</th>
                                            <th>Corrective</th>
                                            <th>Summary </th>
                                          
                                          <!--  <th>RegDate</th>
                                            <th>Author Name</th>
                                            <th>Problem </th>
                                            <th>Corrective</th>
                                            <th>Summary</th>
                                            <th>Pic1</th>
                                            <th>Pic2</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $sql = "SELECT * from corrective_maintenance order by id asc";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->Problem);?></td>
                                            <td class="center"><?php echo htmlentities($result->Corrective);?></td>
                                            <td class="center"><?php echo htmlentities($result->Summary);?></td>
                                          <!--  <td class="center"><?php //echo htmlentities($result->RegDate);?></td>
                                             <td class="center"><?php //echo htmlentities($result->AuthorName);?></td>
                                             <td class="center"><?php //echo htmlentities($result->Problem);?></td>
                                            <td class="center"><?php //echo htmlentities($result->Corrective);?></td>
                                             <td class="center"><?php //echo htmlentities($result->Summary);?></td>
                                             <td class="center"><img src="pic/cm_picture/<?php //echo htmlentities($result->Images1);?>" width="100" height="50" style="border:solid 1px #000"></td>
                                             <td class="center"><img src="pic/cm_picture/<?php //echo htmlentities($result->Images2);?>" width="100" height="50" style="border:solid 1px #000"></td> -->
                                           
                                        </tr>
 <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


            
    </div>
    </div>

     <!-- CONTENT-WRAPPER SECTION END-->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
