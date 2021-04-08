<?php
session_start();
error_reporting(0);
include('includes/connection.php');
if(isset($_POST['add']))
{
$author=$_POST['author'];
$power=$_POST['power'];
$initials=$_POST['initials'];
$date=$_POST['regdate'];
$sql="INSERT INTO  tblauthor (AuthorName,PowerId,InitialsId,RegDate) VALUES(:author,:power,:initials,:date)";
$query = $dbh->prepare($sql);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':power',$power,PDO::PARAM_STR);
$query->bindParam(':initials',$initials,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
  $url ="http://192.168.64.2/LTK/add-author.php";
  echo "<script>alert('Create Author successfully'); window.location='$url'</script>";
}
else 
{
  $url ="http://192.168.64.2/LTK/add-author.php";
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
            <div class="col-md-12">
                <h4 class="header-line" style="font-family: 'Prompt', sans-serif;">Add author</h4>
                
                            </div>

        </div>
    <div class="panel panel-default" style="margin-left:20%; margin-right:20%">
        <div class="panel-heading"><b>FORM DATA</b></div>
        <div class="panel-body" style="">     
<!--LOGIN PANEL START-->           

        <!-- FORM DATA START!-->
<form action="" method="post" enctype="multipart/form-data" name="add">
<!-- AUTHOR -->
<div class="col-md-6">
<div class="form-group">
    <label for="cmwork"style="font-family: 'K2D', sans-serif;">ใส่ชื่อผู้บันทึก : </label>&nbsp;<label for="cmwork"style="font-family: 'K2D', sans-serif; color:red;">* </label>
      <input type="text" class="form-control" value="" name="author" autocomplete="off" required>
    </div>  
  </div>
 <!-- END AUTHOR -->

 <!-- DATE -->
  <div class="col-md-6">
    <div class="form-group">
    <label for="cmwork"style="font-family: 'K2D', sans-serif;">วันที่ทำการบันทึก</label>
      <input type="date" class="form-control" value="" name="regdate" autocomplete="off" required>
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
</div>
</div>
<!-- END SHOW AGENCY-->
<div class="col-md-12"> 
<button type="submit" name="add" id="submit" class="btn btn-info" style="font-family: 'Prompt', sans-serif;"> เพิ่มข้อมูล </button> 
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

