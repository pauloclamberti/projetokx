<?php

$consultavendakx = "";
session_name("Kx");
session_start();




include("conexaopdo2.php");

try{
    $stmt = retornarConexao()->prepare('Select nome_cliente, celularkx, ID_venda, produto, quantidade, preco_unidade FROM cliente INNER JOIN vendas on cliente.ID = vendas.ID_cliente WHERE produto = :produto OR :produto = "" ORDER BY nome_cliente ASC');
    $stmt->execute(array(
        ':produto' => $_REQUEST["produto"],
        
    ));
    
    while ($row = $stmt->fetch()) {
   
          $consultavendakx .= "<tr><td>".$row["ID_venda"]."</td><td>".$row["produto"]."</td><td>".$row["quantidade"]."</td><td>".$row["preco_unidade"]."</td><td>".$row["nome_cliente"]."</td><td>".$row["celularkx"]."</td><td><a class='btn btn-danger' href='deletevenda.php?id_venda=".$row["ID_venda"]."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
          <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
        </svg></a></td></tr>";




    }
    $html = '<table class="table">
    
    
    <style>
    
   .table{
        font-family: Montserrat, sans-serif;
        border-collapse: collapse;
        width: 100%;
        

    }

    td, th {
        border: 3px solid #dddddd;
        text-align: left;
        padding: 8px;
        
        border-color: orange;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
    <thead>
    <a href="consultakx.php">
        <button type="button" class="btn btn-primary">
        

        VOLTAR
        
        </button>
    </a>
    
      <tr>
        <th scope="col">ID da Venda</th>
        <th scope="col">Produto</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Preço Unitário</th>
        <th scope="col">Cliente</th>
        <th scope="col">Celular</th>
        <th scope="col">...</th>
      </tr>
    </thead>
    <tbody>
      '.$consultavendakx.'
      
    </tbody>
  
 
 
    



    </table>';

    echo $html;

} catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
