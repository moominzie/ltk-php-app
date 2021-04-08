<?php 
require_once("includes/connection.php");
if(!empty($_POST["author"])) {
  $author= strtoupper($_POST["author"]);
 
  $sql ="SELECT AuthorName FROM tblauthor";
$query= $dbh -> prepare($sql);
$query-> bindParam(':author', $author, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
foreach ($results as $result) {
 
  echo htmlentities($result->AuthorName);
  echo "<script>$('#submit').prop('disabled',false);</script>";
 }
 }
 }
 else{
  
  echo "<span style='color:red'> กรุณาเลือกชื่อผู้บันทึก</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
}



?>
