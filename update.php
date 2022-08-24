<?php


include("conexaopdo2.php");


try {
    
    
    
    $stmt = retornarConexao()->prepare("UPDATE cliente SET nome_cliente = UCASE:nome_cliente, celularkx = :celularkx, email = :email WHERE ID=:ID");
    
    

    
         $stmt->execute(array(
        ':ID' => $_POST["ID"],
        ':nome_cliente' => $_POST["nome_cliente"],
        ':celularkx' => $_POST["celularkx"],
        ':email' => $_POST["email"]
        ));

        echo "<script>alert('Alteração realizada com sucesso!');</script>";
        echo "<script>window.location.href='consultakx.php';</script>";
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
        ?>