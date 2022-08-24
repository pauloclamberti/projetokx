<?php


include("conexaopdo2.php");


try {
    
    $idv = $_GET["id_venda"];
    
    $stmt = retornarConexao()->prepare("DELETE FROM vendas WHERE id_venda='$idv'");
    $stmt->execute();

        echo "<script>alert('Alteração realizada com sucesso!');</script>";
        echo "<script>window.location.href='consultakx.php';</script>";
    } catch(PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }
        ?>