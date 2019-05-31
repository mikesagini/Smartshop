<?php
session_start();

  include_once '../db.php';

if (isset($_GET['id'])) {
   $id=$_GET['id'];

   $query_insert = "INSERT IN TO users WHERE id = '$id'";
   $result_insert = $connection->query($query_add);

   $query_insert2 = "INSERT IN TO command WHERE id_user = '$id'";
   $result_insert2 = $connection->query($query_insert2);

header('Location: ' . $_SERVER['HTTP_REFERER']);
}

else {
  header('Location: ../sign');
}
?>
