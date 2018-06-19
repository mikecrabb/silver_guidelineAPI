<?php
header('Content-Type: application/json');
include ("scripts/db_connect.php");
$sql = "SELECT * FROM technology";
$result = $db->query($sql);

while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}

print json_encode($rows);

?>
