<?php

    header("content-Type:aplication/json");

    $pdo = new PDO("mysql:host=localhost;dbname=calendario","root","");
    $consulta = $pdo->prepare("SELECT * FROM calendario");
    $consulta -> execute();

    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    print_r(json_encode($resultado));
    print_r($_POST);

?>