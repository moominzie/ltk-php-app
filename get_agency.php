<?php 
require_once("includes/connection.php");
if(!empty($_POST["agency"])) {
  $agency= strtoupper($_POST["agency"]);
 
    $sql ="SELECT Agency FROM tblcm JOIN tblinitials ON tblinitials.AgencyId=tblcm.id";
$query= $dbh -> prepare($sql);
$query-> bindParam(':agency', $agency, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
foreach ($results as $result) {
 
echo htmlentities($result->Agency);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
 else{
  
  echo "<span style='color:red'> กรุณาเลือกหน่วยงาน</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
}



?>
