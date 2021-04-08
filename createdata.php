<?php
session_start();
error_reporting(0);
include('includes/connection.php');
if(isset($_POST['create']))
{
$problem=$_POST['problem'];
$corrective=$_POST['corrective'];
$summary=$_POST['summary'];
$sql="INSERT INTO  corrective_maintenance (Problem,Corrective,Summary) VALUES(:problem,:corrective,:summary)";
$query = $dbh->prepare($sql);
$query->bindParam(':problem',$problem,PDO::PARAM_STR);
$query->bindParam(':corrective',$corrective,PDO::PARAM_STR);
$query->bindParam(':summary',$summary,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
  $msg="Data Upload successfully";
  header('location:createdata.php');
  }
  else 
  {
  $error="Something went wrong. Please try again";
  }
  
  }
  
?>

<html lang="en">
<head>
  <title>LTK CM-Work</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-- BOOTSTRAP CORE STYLE  -->
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                <h4 class="header-line" style="font-family: 'Prompt', sans-serif;">Add data</h4>
                
                            </div>
        </div>

                 <!-- ALERT START -->
                 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
 <!-- ALERT END -->

    <div class="panel panel-default" style="margin-left:20%; margin-right:20%">
        <div class="panel-heading"><b>FORM DATA</b></div>
        <div class="panel-body" style="">     
<!--LOGIN PANEL START-->           

        <!-- FORM DATA START!-->
<form action="" method="post" enctype="multipart/form-data" name="create">
              
    <div class="form-group">
        <label for="branch" style="font-family: 'K2D', sans-serif;">สาเหตุ/ปัญหา </label>
        <textarea type="text" class="form-control" value="" name="problem" autocomplete="off" required></textarea>
    </div>
    <div class="form-group">
    <label for="powerplant" style="font-family: 'K2D', sans-serif;">การแก้ไข</label>
      <textarea type="text" class="form-control" value="" name="corrective" autocomplete="off" required></textarea>
    </div>
    <div class="form-group">
    <label for="cmwork"style="font-family: 'K2D', sans-serif;">สรุปผล</label>
      <textarea type="text" class="form-control" value="" name="summary" autocomplete="off" required></textarea>
    </div>  
<button type="submit" name="create" class="btn btn-info" style="font-family: 'Prompt', sans-serif;"> Create data </button> 
  
    </div>

    
    </div>
        </div>  
      </form>
      </div>
    </div>
</div>

</body>
</html>

