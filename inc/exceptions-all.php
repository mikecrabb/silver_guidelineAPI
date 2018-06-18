<?php
include ("scripts/db_connect.php");

$criteriaID = $params['criteriaID'];


header('Content-Type: application/json');
$sql = "SELECT * FROM exceptions where successCriteriaID = '$criteriaID'";
$result = $db->query($sql);

while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}

if (empty($rows))
{
  echo "No Data";
}
else {
    print json_encode($rows);
}
?>
