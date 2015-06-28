<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 28/06/2015
 * Time: 15:09
 */

    require '/config-database/config-database.php';

    //Fazendo a conexão com o banco de dados e validando...
    try {
        $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
    } catch (PDOException $e) {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }

    echo '<h2>Inerindo Valores </h2>';
    //Fazendo uma consulta...
    $nome = 'Produto 11';
    $descricao = 'Esse é o  produto 10 do estoque';
    $preco = 2.10;
    $sql = "INSERT INTO produtos(nome, descricao, preco) VALUES(:nome, :descricao, :preco)";
    $prepared = $PDO->prepare( $sql );
    $prepared->bindParam( ':nome', $nome );
    $prepared->bindParam( ':descricao', $descricao );
    $prepared->bindParam( ':preco', $preco );
    $result = $prepared->execute();

    if ($result )
    {
        echo 'Consulta realizada com sucesso!<br/>';
    }
    else{
        var_dump( $prepared->errorInfo() );
        exit;
    }

    echo $prepared->rowCount() . " linhas foram inseridas.";