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

<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line" style="font-family: 'Prompt', sans-serif;">แสดงข้อมูลทั้งหมด</h4>
    </div>
        </div>

                 <!-- ALERT START -->
                 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
 <!-- ALERT END -->

            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-family: 'Prompt', sans-serif;">
                          ข้อมูลทั้งหมด
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
                                            <th>สาเหตุ/ปัญหา</th>
                                            <th>การแก้ไข</th>
                                            <th>สรุปผล</th>
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
                                    <?php $sql = "SELECT file.Images1,file.Images2,file.DataId,file.AuthorId,tblauthor.AuthorName,corrective_maintenance.Problem,corrective_maintenance.Corrective,corrective_maintenance.Summary,tblauthor.RegDate,tblpower.PowerplantName,tblinitials.Initials,tblcm.Agency FROM file join tblauthor on file.AuthorId=tblauthor.id join corrective_maintenance on file.DataId=corrective_maintenance.id join tblpower on tblauthor.PowerId=tblpower.id join tblinitials on tblinitials.id=tblauthor.InitialsId join tblcm on tblcm.id=tblauthor.InitialsId order by file.id asc";
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
                                            <td class="center"><?php echo htmlentities($result->Problem);?></td>
                                            <td class="center"><?php echo htmlentities($result->Corrective);?></td>
                                            <td class="center"><?php echo htmlentities($result->Summary);?></td>
                                            <td class="center"><?php echo htmlentities($result->AuthorName);?></td>
                                            <td class="center"><?php echo htmlentities($result->RegDate);?></td>
                                            <td><a href="index.php?del=<?php echo $result->id;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-times" style="color:#DC143C;"></i></a></td>
                                         
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
