<?php
include_once 'db_queries.php';
$data = (array) calculateUserRanking();
$firstMerge = array_merge($data, (array) calculateRanking());
$secondMerge = array_merge($firstMerge, (array) getTotalChanges());
echo json_encode($secondMerge);
?>
