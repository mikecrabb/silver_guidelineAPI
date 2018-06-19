<?php
include ("scripts/db_connect.php");

$articleID = $params['criteriaID'];


header('Content-Type: application/json');
$sql = "SELECT * FROM passingTests where passingTechniqueID = '$articleID'";
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
