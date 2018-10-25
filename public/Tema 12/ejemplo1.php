<?php

echo 'Estableciendo conexión con la BD...<br>';

$host = 'mysql';
$port = '3306';
$dbname = 'tema12';
$user = 'default';
$password = 'secret';

$dns = "mysql:host=$host;port=$port;dbname=$dbname";
$options = [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {

  $conexion = new PDO($dns, $user, $password, $options);

  echo 'Ya estamos conectados a la DB';

} catch (PDOException $e) {
  echo 'Error en la conexión: ' . $e->getMessage();
}

$query = $conexion->query('select * from users');

while ($fila = $query->fetch(PDO::FETCH_OBJ)){

  echo '<pre>';
  print_r($fila);

}

$query2 = $conexion->query('select * from users');

while ($fila = $query2->fetchAll()){

  echo '<pre>';
  print_r($fila);

}

$query3 = $conexion->query('select * from users');

while ($fila = $query3->fetch(PDO::FETCH_ASSOC)){

  echo '<pre>';
  print_r($fila);

}

 ?>
