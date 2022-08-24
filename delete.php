<?php


include("conexaopdo2.php");


try {
    
    $id = $_GET['id'];
    
    $stmt = retornarConexao()->prepare("DELETE FROM cliente WHERE ID='$id'");
    $stmt->execute();

        echo "<script>alert('Alteração realizada com sucesso!');</script>";
        echo "<script>window.location.href='consultakx.php';</script>";
    } catch(PDOException $e) {
        echo "<script>alert('Há vendas para este cliente, delete as vendas antes!');</script>";
        echo "<script>window.location.href='consultavendakx.php?produto=';</script>";
    }
        ?>