<?php


include("conexaopdo2.php");


try {
    
    
    
    $stmt = retornarConexao()->prepare('INSERT INTO vendas (ID_cliente, produto, quantidade, preco_unidade) VALUES (UCASE(:ID_cliente), UCASE(:produto), UCASE(:quantidade), UCASE(:preco_unidade))');
    
    

    
         $stmt->execute(array(
        ':ID_cliente' => $_POST["ID_cliente"],
        ':produto' => $_POST["produto"],
        ':quantidade' => $_POST["quantidade"],
        ':preco_unidade' => $_POST["preco_unidade"]
        
    ));
        
        
        echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location.href='kxcadastro.php';</script>";






        

     
        
    


} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
    
    ?>