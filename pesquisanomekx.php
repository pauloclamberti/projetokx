<?php

$pesquisakx = "";
session_name("Kx");
session_start();




include("conexaopdo2.php");


try{
    $stmt = retornarConexao()->prepare('Select DISTINCT c.ID, c.nome_cliente, c.celularkx, c.email From cliente c WHERE nome_cliente LIKE CONCAT("%",:pesquisakx,"%") ORDER BY nome_cliente ASC');
    $stmt->execute(array(':pesquisakx' => $_REQUEST["pesquisakx"]));
    while ($row = $stmt->fetch()) {
        
         $pesquisakx .= "<tr><td>".$row["ID"]."</td><td>".$row["nome_cliente"]."</td><td>".$row["celularkx"]."</td><td>".$row["email"]."</td><td><a class='btn btn-primary' href='kxupdate.php?id=".$row["ID"]."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
         <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
         <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
       </svg></a><a class='btn btn-danger' href='delete.php?id=".$row["ID"]."'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
       <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
     </svg></a></td></tr>";
    }

    $html = '<table class="table">
    
    
    <style>
    
   .table{
        font-family: arial, sans-serif;
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
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Celular</th>
        <th scope="col">E-Mail</th>
        <th scope="col">...</th>
       
        
      </tr>
    </thead>
    <tbody>
      '.$pesquisakx.'
    </tbody>
  
 
 
    <a href="consultakx.php">
        <button type="button" class="btn btn-primary">VOLTAR</button>
    </a>



    </table>';

    echo $html;
}catch(Exception $e){
    echo "Erro: " . $e->getMessage();
}

?>