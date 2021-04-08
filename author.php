<?php
session_start();
error_reporting(0);
include('includes/connection.php');
if(isset($_REQUEST['del']))
	{
$delid=intval($_GET['del']);
$sql = "delete from tblauthor  WHERE  id=:delid";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();
$msg="Vehicle  record deleted successfully";
}


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
                <h4 class="header-line">Author</h4>
    </div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Author Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>โรงไฟฟ้า</th>
                                            <th>หน่วยงาน(ย่อ)</th>
                                            <th>หน่วยงาน</th>
                                            <th>ผู้บันทึก </th>
                                            <th>วันที่ทำการบันทึก </th>    
                                            <th>หมายเหตุ </th>    
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
<?php $sql = "SELECT tblauthor.AuthorName,tblpower.PowerplantName,tblinitials.Initials,tblauthor.RegDate,tblcm.Agency from tblauthor join tblpower on tblpower.id=tblauthor.PowerId join tblinitials on tblinitials.id=tblauthor.InitialsId join tblcm on tblcm.id=tblauthor.InitialsId order by tblauthor.id asc";
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
                                            <td class="center"><?php echo htmlentities($result->PowerplantName);?></td>
                                            <td class="center"><?php echo htmlentities($result->Initials);?></td>
                                            <td class="center"><?php echo htmlentities($result->Agency);?></td>
                                            <td class="center"><?php echo htmlentities($result->AuthorName);?></td>
                                            <td class="center"><?php echo htmlentities($result->RegDate);?></td>
                                            <td><a href="author.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-times" style="color:#DC143C;"></i></a></td>
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
