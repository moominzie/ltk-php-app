<?php
session_start();
error_reporting(0);
include('includes/connection.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT Password,Username FROM member WHERE Username=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach ($results as $result) {
  $_SESSION['username']=$result->Username;
if($result->Username)
   {
$_SESSION['login']=$_POST['username'];


$_SESSION['alertlogin']="คุณกำลังล็อกอินอยู่ในขณะนี้";
header('location:create-data.php');
} else {

}
}

} 

else{
  $msg_error="ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
}
}


?>

<html lang="en">
<head> 
<title>CM-Work</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
<body>

<!-- FORM START -->

<form action="" method="post" role="form" enctype="multipart/form-data">
    <div class="container">
    <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-new" style="text-align:center; font-family: 'K2D', sans-serif; font-size: 22px;margin-top: 70px">เข้าสู่ระบบ</h4>
                
                            </div>

        </div>
        <div class="card">
        <div class="panel-body" style="margin:50px">

    
        <div class="form-group">

<?php if($_SESSION['pwccorrect']!="")
{?>

<div class="alert alert-success" role="alert" >
 <?php echo htmlentities($_SESSION['pwccorrect']);?>
<?php echo htmlentities($_SESSION['pwccorrect']="");?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>

<?php  if($msg_error)
{?>

<div class="alert alert-danger" role="alert" >
 <?php echo htmlentities($msg_error);?>
<?php echo htmlentities($msg_error="");?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php } ?>
</div>
              
    <div class="form-group">
        <label >ชื่อผู้ใช้งาน</label>
        <input class="form-control" type="text" name="username" autocomplete="off" required />
    </div>
    <div class="form-group">
        <label >รหัสผ่าน</label>
        <input class="form-control" type="password" name="password" required autocomplete="off"  />
    </div>
    <button type="submit" name="login" class="create-account"> เข้าสู่ระบบ </button>
 
  </div>
        </div>
      </div>
    </div>
  </form>




  <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>

