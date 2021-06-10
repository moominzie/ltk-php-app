
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
</head>

<style>
    .container {
        margin-top: 5%;
    }
    h1 {
      font-family: 'Asap', sans-serif;
    }
    b {
      font-family: 'Asap', sans-serif;
        font-size: 18px;
    }
    .pad-botm {
    padding-bottom:30px;
    }
    .header-line {
        font-weight:900;
        padding-bottom:25px;
        border-bottom:1px solid #eeeeee;
        text-transform:none;
        font-family: 'Noto Sans JP', sans-serif; 
    }

    .header-left {
        font-weight:900;
        padding-bottom:25px;
        text-transform:none;
        border-bottom:1px solid #eeeeee;
        font-family: 'Noto Sans JP', sans-serif; 
    }
    .header-shop {
        font-weight:900;
        text-transform:none;
        font-family: 'Noto Sans JP', sans-serif; 
    }

    .header-right {
        text-align: right;
        padding-bottom:25px;
        text-transform:none;
        border-bottom:1px solid #eeeeee;
        font-family: 'Asap', sans-serif;
        margin-left: 70px;
    }
    .text_eng,a {
      font-family: 'Asap', sans-serif;
        font-size: 14px;

    }  
    .header1 {
        padding: 50px;
        text-align: center;
        color: white;
        font-size: 30px;
        margin-top: -30px;
    }.header {
        padding: 60px 70px;
        text-align: right;
        background-image: url("assets/img/wind.jpg");
        background-size: 1440px 480px;
        color: white;
        font-size: 30px;
    }
    img:hover{
      cursor: pointer;
    }

    .count {

    }  


</style>

<div class="header">
        <h1 style="font-family: 'Bebas Neue', cursive;letter-spacing:2px; font-size: 48px;text-shadow: 2px 2px black;">โรงไฟฟ้าลำตะคองชลภาวัฒนา</h1>
      </div>
 
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
  <a class="nav-link" ><img src="assets/img/การไฟฟ้าฝ่ายผลิตแห่งประเทศไทย.png" width="60" height="60" ></a>

  
  <?php if($_SESSION['login'])
{
?> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">  
    <li class="nav-item active">
        <a class="nav-link" href="create-data.php">บันทึกข้อมูล <span class="sr-only">(current)</span></a>
      </li>   
      <li class="nav-item active">
        <a class="nav-link" href="all-data.php">ดูข้อมูลทั้งหมด <span class="sr-only">(current)</span></a>
      </li>  
    </ul>

    <ul class="navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="logout.php"><p class="sign-out">ออกจากระบบ</p><span class="sr-only" >(current)</span></a>
      </li>
    </ul>
  </div>

  <?php } ?>
</nav>