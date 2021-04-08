<?php 
require_once("includes/connection.php");
if(!empty($_POST["powerplant"])) {
  $powerplant= strtoupper($_POST["powerplant"]);
 
    $sql ="SELECT PowerplantName FROM tblpower";
$query= $dbh -> prepare($sql);
$query-> bindParam(':powerplant', $powerplant, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
foreach ($results as $result) {
 
echo htmlentities($result->PowerplantName);
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
}
 else{
  
  echo "<span style='color:red'> กรุณาเลือกหน่วยงาน</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
}



?>
