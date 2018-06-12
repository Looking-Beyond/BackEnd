<?php
$mysqli = mysqli_connect("localhost", "root","","lookingBeyond");

$result = mysqli_query($mysqli, "SELECT * FROM voto");

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_query($mysqli, "update voto set qtd_voto = qtd_voto + 1");
//file_put_contents("getjson.json", json_encode($data));
echo(json_encode($data));
?>

