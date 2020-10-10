<?php

    include ("conexao.php");

    $id = $_POST["id"];

    //variavel para guardar a consulta (query)
    $sql_consulta = "SELECT * FROM empresa.cliente WHERE ID = $id";

    // Resultado
    $resultado = mysqli_query($connect, $sql_consulta);

    if(!$resultado){
        dir('A consulta falhou!' . mysqli_error($connect));
    } else {
        $dados = mysqli_fetch_array($resultado);
        echo "Nome: " . $dados[0]['nome'] . "<br><br>";
                
    }