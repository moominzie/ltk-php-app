<?php
session_start();
include('includes/connection.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_POST['add']))
{
$username=$_SESSION['username'];  
$author=$_POST['author'];
$power=$_POST['power'];
$initials=$_POST['initials'];
$sql="INSERT INTO  tblauthor (AuthorName,PowerId,InitialsId,Username) VALUES(:author,:power,:initials,:username)";
$query = $dbh->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':power',$power,PDO::PARAM_STR);
$query->bindParam(':initials',$initials,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId){

    $username=$_SESSION['username'];  
    $problem=$_POST['problem'];
    $corrective=$_POST['corrective'];
    $summary=$_POST['summary'];
    $sql="INSERT INTO  corrective_maintenance (Problem,Corrective,Summary,Username) VALUES(:problem,:corrective,:summary,:username)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->bindParam(':problem',$problem,PDO::PARAM_STR);
    $query->bindParam(':corrective',$corrective,PDO::PARAM_STR);
    $query->bindParam(':summary',$summary,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId){

   
    $username=$_SESSION['username']; 
    $cmimg1=$_FILES["img1"]["name"];
    $cmimg2=$_FILES["img2"]["name"];

    move_uploaded_file($_FILES["img1"]["tmp_name"],"pic/cm_picture/".$_FILES["img1"]["name"]);
    move_uploaded_file($_FILES["img2"]["tmp_name"],"pic/cm_picture/".$_FILES["img2"]["name"]);


    $sql="INSERT INTO file (Images1,Images2,Username) VALUES(:cmimg1,:cmimg2,:username)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':username',$username,PDO::PARAM_STR);
    $query->bindParam(':cmimg1',$cmimg1,PDO::PARAM_STR);
    $query->bindParam(':cmimg2',$cmimg2,PDO::PARAM_STR);
    $query->execute();
    $_SESSION['complete']="บันทึกข้อมูลสำเร็จ!";
      }
    }
      else {
        $_SESSION['error']="Something went wrong. Please try again";
        header('location:create-data.php');
      }
      }
    }
?>

<html lang="en">
<head> 
<title>LTK CM-Work</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
  <link href="assets/bs4/css/all.css" rel="stylesheet"> <!--load all styles -->

  <link href="assets/bs4/css/style.css" rel="stylesheet"> <!--load all styles -->

    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Barlow:wght@200;400&family=Bebas+Neue&family=Fjalla+One&family=Fredoka+One&family=Josefin+Sans&family=Open+Sans:wght@300&family=Staatliches&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Asap:wght@400&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">


</head>
<script>
// function for get agency name
function getAgency() {
$("#loaderIcon").show();
jQuery.ajax({
url: "get_agency.php",
data:'agency='+$("#agency").val(),
type: "POST",
success:function(data){
$("#get_agency_name").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

// function for get powerplant name
function getPowerplant() {
$("#loaderIcon").show();
jQuery.ajax({
url: "get_powerplant.php",
data:'powerplant='+$("#powerplant").val(),
type: "POST",
success:function(data){
$("#get_powerplant_name").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}

</script> 
<style>
  

    
</style>
<body>
    <!------MENU SECTION START-->
    <?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
    <div class="row pad-botm">
    <?php
$username=$_SESSION['username'];  
$sql="SELECT * FROM member WHERE Username=:username";
$query = $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 

<?php if($_SESSION['alertlogin']!=""){
?>
<div class="alert alert-light" role="alert" >
<strong>สวัสดี! &nbsp<?php echo htmlentities($result->Name);?></strong>
 <?php echo htmlentities($_SESSION['alertlogin']);?>
<?php echo htmlentities($_SESSION['alertlogin']="");?>
</div>

    <?php } ?>
    <?php }} ?>



            <div class="col-md-12">
                <h4 class="header-line" style="font-family: 'Prompt', sans-serif;">บันทึกข้อมูล</h4>
                
<?php if($_SESSION['complete']!="")
{?>
<div class="alert alert-success" role="alert" >
<?php echo htmlentities($_SESSION['complete']);?>
<?php echo htmlentities($_SESSION['complete']="");?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close" onClick="emptyCart()">
<span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>
                
                            </div>

        </div>
    <div class="panel panel-default" style="margin-left:20%; margin-right:20%">
        <div class="panel-heading"><b>กรอกข้อมูล</b></div>
        <div class="panel-body" style="">     
<!--LOGIN PANEL START-->           

        <!-- FORM DATA START!-->
<form action="" method="post" enctype="multipart/form-data" name="add">
<!-- AUTHOR -->
<div class="col-md-6">
<div class="form-group">
<?php
$username=$_SESSION['username'];  
$sql="SELECT * FROM member WHERE Username=:username";
$query = $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?> 


    <label for="cmwork"style="font-family: 'K2D', sans-serif;">ใส่ชื่อผู้บันทึก : </label>&nbsp;<label for="cmwork"style="font-family: 'K2D', sans-serif; color:red;">* </label>
      <input type="text" class="form-control" value="<?php echo htmlentities($result->Name);?>" name="author" autocomplete="off" required readonly >
        <?php }} ?>
    </div>  
  </div>
 <!-- END AUTHOR -->

  <!-- START TITLE -->     
  <div class="col-md-12">     
  <div class="form-group">
        <label style="font-family: 'K2D', sans-serif;">เลือกโรงไฟฟ้า : </label>&nbsp;<label for=""style="font-family: 'K2D', sans-serif; color:red;">* </label>
        <!-- END TITLE -->
    <!-- START SELECT POWER NAME TITLE -->
    <select class="selectpicker" name="power" id="powerplant" onBlur="getPowerplant()" required>
<option value=""> เลือก </option>
<?php $ret="select id,PowerplantName from tblpower";
  $query= $dbh -> prepare($ret);
  //$query->bindParam(':id',$id, PDO::PARAM_STR);
  $query-> execute();
  $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() > 0)
    {
      foreach($results as $result)
    {
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->PowerplantName);?></option>
<?php }} ?>
</select>
</div>  
</div>  
 <!-- END SELECT PROBLEM TITLE -->
 
 <div class="col-md-12">    
 <div class="form-group">
<label for=""style="font-family: 'K2D', sans-serif; color:red;"></label> โรงไฟฟ้า : 
<span id="get_powerplant_name" style=""></span> 
</div>
</div>
<!-- END SHOW AGENCY-->

   <!-- START TITLE -->    
   <div class="col-md-12">         
   <div class="form-group">
        <label style="font-family: 'K2D', sans-serif;">เลือกหน่วยงาน : </label>&nbsp;<label for="cmwork"style="font-family: 'K2D', sans-serif; color:red;">* </label>
        <!-- END TITLE -->
    <!-- START SELECT CM FORM ID TITLE -->
    <select class="selectpicker" name="initials" id="agency" onBlur="getAgency()" required>
<option value=""> เลือก </option>
<?php $ret="select id,Initials from tblinitials";
  $query= $dbh -> prepare($ret);
  //$query->bindParam(':id',$id, PDO::PARAM_STR);
  $query-> execute();
  $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() > 0)
    {
      foreach($results as $result)
    {
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->Initials);?></option>
<?php }} ?>
</select>
</div>
</div>

 <!-- END SELECT PROBLEM TITLE -->
 <div class="col-md-12">    
 <div class="form-group">
<label for="cmwork"style="font-family: 'K2D', sans-serif; color:red;"></label> หน่วยงาน : 
<span id="get_agency_name" style=""></span> 

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
    <div class="form-group">
    <label style="font-family: 'K2D', sans-serif;">เพิ่มรูปภาพ</label>
    <input type="file" name="img1" style="margin-bottom:10px">
    <input type="file" name="img2" >
    </div>  
</div>
</div>
<!-- END SHOW AGENCY-->
<div class="col-md-12"> 
<button type="submit" name="add" id="submit" class="btn btn-info" style="font-family: 'Prompt', sans-serif;"> เพิ่มข้อมูล </button> 
  </div>
    </div>

 

  
    </div>

    
    </div>
        </div> 
      </form>
      </div>
    </div>
</div>

</body>
</html>

