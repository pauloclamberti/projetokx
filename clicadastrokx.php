<?php


include("conexaopdo2.php");


try {
    
    
    
    $stmt = retornarConexao()->prepare('INSERT INTO cliente (nome_cliente, celularkx, email) VALUES (UCASE(:nome_cliente), UCASE(:celularkx), UCASE(:email))');
    
    

    
         $stmt->execute(array(
        ':nome_cliente' => $_POST["nome_cliente"],
        ':celularkx' => $_POST["celularkx"],
        ':email' => $_POST["email"],
        ));

        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location.href='kxcadastro.php';</script>";
        
        






        

     
        
    


} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
    ?>