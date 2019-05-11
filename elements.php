<?php
include "conn.php";

$sql = "SELECT nama_resep FROM `resep`";
$res = mysql_query($sql);

$array = array();
while($row = mysql_fetch_array($res))
{
$array[] = $row[0];
}
echo json_encode($array);


?>