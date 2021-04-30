<?php
session_start();
error_reporting(0);
include('includes/connection.php');
if(isset($_POST['add']))
  {
$data=$_POST['dataform'];
$author=$_POST['authorform'];
$cmimg1=$_FILES["img1"]["name"];
$cmimg2=$_FILES["img2"]["name"];

move_uploaded_file($_FILES["img1"]["tmp_name"],"pic/cm_picture/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"pic/cm_picture/".$_FILES["img2"]["name"]);


$sql="INSERT INTO file (Images1,Images2,DataId,AuthorId) VALUES(:cmimg1,:cmimg2,:data,:author)";
$query = $dbh->prepare($sql);
$query->bindParam(':cmimg1',$cmimg1,PDO::PARAM_STR);
$query->bindParam(':cmimg2',$cmimg2,PDO::PARAM_STR);
$query->bindParam(':data',$data,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
    $url ="http://192.168.64.2/LTK/filesUpload.php";
    echo "<script>alert('Create Files successfully'); window.location='$url'</script>";
  }
  else 
  { 
    $url ="http://192.168.64.2/LTK/filesUpload.php";
    echo "<script>alert('Something went wrong. Please try again'); window.location='$url'</script>";
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

<script>
// function for get author name
function getAuthor() {
$("#loaderIcon").show();
jQuery.ajax({
url: "get_author.php",
data:'author='+$("#author").val(),
type: "POST",
success:function(data){
$("#get_author_name").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}


</script> 

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
                <h4 class="header-line" style="font-family: 'Prompt', sans-serif;">Images upload</h4>
                
                            </div>

        </div>
        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

    <div class="panel panel-default" style="margin-left:20%; margin-right:20%">
        <div class="panel-heading"><b>FORM DATA</b></div>
        <div class="panel-body" style="">     
<!--LOGIN PANEL START-->           

<label style="font-family: 'K2D', sans-serif; color: #A52A2A"> *กรุณาดูหมายเลข ID ข้อมูลส่วนที่ 1 และ ข้อมูลส่วนที่ 2 ก่อน* </label>   
<a href="author.php" class="" style="font-family: 'K2D', sans-serif; font-size:14px">ข้อมูลส่วนที่ 1 </a>
<a href="data.php" class="" style="font-family: 'K2D', sans-serif; font-size:14px">ข้อมูลส่วนที่ 2 </a>
        <!-- FORM DATA START!-->
<form action="" method="post" enctype="multipart/form-data" >
 

  <!-- START TITLE -->          
  <div class="form-group">
        <label style="font-family: 'K2D', sans-serif;">Select ID ข้อมูลส่วนที่ 1 หรือ Author : </label>
        <!-- END TITLE -->
    <!-- START SELECT CM FORM ID TITLE -->
    <select class="selectpicker" name="authorform" id="author" onBlur="getAuthor()"  required>
<option value=""> Select </option>
<?php $ret="select id,AuthorName from tblauthor";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->id);?></option>
<?php }} ?>
</select>
 <!-- END SELECT PROBLEM TITLE -->
 <div class="col-md-12">    
 <div class="form-group">
<label for=""style="font-family: 'K2D', sans-serif; color:red;"></label> ตรวจสอบชื่อ : 
<span id="get_author_name" style=""></span> 
</div>
</div>
<!-- END SHOW AGENCY-->

<!-- START TITLE -->             
    <div class="form-group">
        <label for="branch" style="font-family: 'K2D', sans-serif;">Select ID ข้อมูลส่วนที่ 2 หรือ Corrective Maintenance Work: </label>
        <!-- END TITLE -->
    <!-- START SELECT CM FORM ID TITLE -->
    <select class="selectpicker" name="dataform" required>
<option value=""> Select </option>
<?php $ret="select id from corrective_maintenance";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->id);?></option>
<?php }} ?>
</select>
 <!-- END SELECT PROBLEM TITLE -->


    <div class="form-group">

    <label style="font-family: 'K2D', sans-serif; font-size:16px; margin-top:15px">Add picture </label>
    <input type="file" name="img1" required style="margin-bottom:10px">
    <input type="file" name="img2" required>
    </div>  
<button type="submit" name="add" class="btn btn-info" style="font-family: 'Prompt', sans-serif;"> Create data </button> 
  
    </div>

    
    </div>
        </div>  
      </form>
      </div>
    </div>
</div>

</body>
</html>