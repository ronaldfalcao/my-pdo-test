<?php
/**
 * Created by PhpStorm.
 * User: Ronald
 * Date: 28/06/2015
 * Time: 14:19
 */

    require 'config-database/config-database.php';

    //Fazendo a conexão com o banco de dados e validando...
    try
    {
        $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
    }
    catch ( PDOException $e )
    {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }


    echo '<h2> Retornando a consulta: SELECT * FROM produtos WHERE id IN (1,2,6) </h2>';
    //Fazendo uma consulta...
    $sql = "SELECT * FROM produtos WHERE id IN (1,2,6)";
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll(PDO::FETCH_ASSOC); //Evita que se repitam os valores com indíce [x] e nome do campo [nome]

    //Exibe o resultado na tela.
    var_dump( $rows );

    echo '<h2>Retornando um consulta com filtro (id=1): </h2>';
    //Fazendo uma consulta...
    $filtro = 1;
    $sql = "SELECT * FROM produtos WHERE id =".$filtro;
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    //Exibe o resultado na tela.
    var_dump( $rows );

    echo '<h2>Retornando um consulta com Prepared Statements: </h2>';
    //Fazendo uma consulta...
    $filtro = 6;
    $sql = "SELECT * FROM produtos WHERE id IN (:substitui)";
    $prepared = $PDO->prepare( $sql );
    $prepared->bindParam( ':substitui', $filtro );
    $result = $prepared->execute();
    $rows = $prepared->fetchAll(PDO::FETCH_ASSOC);

    //Exibe o resultado na tela.
    var_dump( $rows );