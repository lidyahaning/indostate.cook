<?php

//CREDENTIALS FOR DB
include "conn.php";

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
    $query = $_REQUEST['query'];
    $sql = mysql_query ("SELECT nama_resep FROM resep WHERE nama_resep LIKE '%{$query}%' ");
	$array = array();
    while ($row = mysql_fetch_array($sql)) {
        $array[] = array (
            'value' => $row['nama_resep'],
        );
    }
    //RETURN JSON ARRAY
    echo json_encode ($array);
}

?>