<?php
session_name("Kx");
session_start();


include("conexaopdo2.php");




?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Paulo">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>MercadoRural</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="stylenav2.css">
    <script> function normalizeNFD(str) {
    return str.normalize('NFD').replace(/[\u0300-\u036f]/g, "");
} </script>
    <style>
        body{
            
            background-image: url("close-up-of-white-poster-textu.png");
            background-size: 1310px;
            background-position: center;
            height: 900px;
            opacity: 1.0;
            padding: 32px;
            
            
            }
         
    </style>

    

</head>
<body>
    
 
</body>

</html>
<!-- Alocar o formulario mais abaixo -->
<div id="tela">
<div id="tela">



 


   
</div>
<?php
if(isset($_GET["id"])):
    $id = addslashes($_GET["id"]);
    endif;
$stmt = retornarConexao()->prepare("SELECT * FROM cliente WHERE ID=$id");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
<form action="update.php" method="post">
<div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNomekx"><font color="white">Nome</font></label>
            <input type="text" id="inputNomekx" class="form-control" placeholder="Insira seu nome completo" name="nome_cliente" value = <?php 
            if(isset($row['nome_cliente'])) { echo $row['nome_cliente']; } ?>>
       
        </div>

     <div class="form-group col-md-6">
            <label for="inputCelularkx"><font color="white">Celular</font></label>
            <input type="text" class="form-control" id="inputCelularkx" name="celularkx" placeholder="35999999999" value = <?php 
            if(isset($row['celularkx'])) { echo $row['celularkx']; } ?>>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail"><font color="white">E-mail</font></label>
            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="example@example.com" value = <?php 
            if(isset($row['email'])) { echo $row['email']; } ?>>
        </div>
        <div class="form-group col-md-6">
            
            <input type="hidden" class="form-control" id="ID" name="ID" value = <?php 
            if(isset($row['ID'])) { echo $row['ID']; } ?>>
        </div>
        </div>

        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" id="update" name="submit">Alterar</button>

    </div>

    </form>