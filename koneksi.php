<?php 
try { 
    $pdo_conn = new PDO('mysql:host=remotemysql.com;dbname=2zmvexNt83', '2zmvexNt83', 'AtaCsX7KJz',
    array(PDO::ATTR_PERSISTENT => true)); 
} 
catch(PDOException $e) { echo $e->getMessage(); 
} 
?>
