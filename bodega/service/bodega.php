<?php
include "../../conexion/conexion.php";

$id = $_POST["id"];

$exist = $pdo->query("SELECT * FROM sgmebod WHERE ebod_cod_ebod='$id'");

if($exist->rowCount() > 0) {
  print 3;
  return false;
}

$exist2 = $pdo->query("SELECT * FROM sgmeherr WHERE eherr_bod_eherr='$id'");

if($exist2->rowCount() > 0) {
  print 3;
  return false;
}

$query = $pdo->query("SELECT * FROM sgmebod WHERE ebod_cod_ebod='$id'");
$bod = $query->fetch();

print json_encode($bod);
