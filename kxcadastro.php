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
    
     <?php include("kxnavbar.html"); ?>

</body>

</html>
<!-- Alocar o formulario mais abaixo -->
<div id="tela">
<form  method="POST" action="clicadastrokx.php">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputNomekx"><font color="white">Nome</font></label>
            <input type="text" id="inputNomekx" class="form-control" placeholder="Insira seu nome completo" name="nome_cliente" required>
        </div>

     <div class="form-group col-md-2">
            <label for="inputCelularkx"><font color="white">Celular</font></label>
            <input type="text" class="form-control" id="inputCelularkx" name="celularkx" placeholder="35999999999" required>
        </div>
        <div class="form-group col-md-2">
            <label for="inputEmail"><font color="white">E-mail</font></label>
            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="example@example.com" required>
        </div>
        </div>

        <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" id="button">Cadastrar</button>

    </div>

    </form>

 

 

<form action="vendacadastrokx.php" method="POST">
  


<div class="form-row">
<div class="form-group col-md-2">
            <label for="inputIdkx"><font color="white">ID do cliente</font></label>
            <select class="form-control" id="inputIdkx" name="ID_cliente" required>
            <?php 
            $stmt = retornarConexao()->prepare('Select ID, nome_cliente From cliente ORDER BY ID DESC');
            $stmt->execute();

            if($stmt->rowCount() > 0){
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    echo '<option value="'.$row['ID'].' - '.$row['nome_cliente '].'">'.$row['ID'].' - '.$row['nome_cliente'].'</option>';
                }
            }
              ?>  
            
            </select>
        </div> 
        
        <div class="form-group col-md-6">
            <label for="inputProduto"><font color="white">Produto</font></label>
            <input type="text" class="form-control" id="inputProduto" name="produto" placeholder="Insira o nome do produto" required>
        </div>
       
    

        <div class="form-group col-md-6">
            <label for="inputQtd"><font color="white">Quantidade</font></label>
            <input type="text" class="form-control" id="inputQtd" name="quantidade" placeholder="Insira a quantidade" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPreco"><font color="white">Preço da unidade</font></label>
            <input type="text" class="form-control" id="inputPreco" name="preco_unidade" placeholder="Insira o preço unitário" required>
        </div>
        
       
        
    
    

        
       
        
     
    

            <div class="form-group col-md-12 text-right">
            <button type="submit" class="btn btn-primary" id="button">Realizar Venda</button>

    </div>
   


<div class="form-group col-md-12 text-right">



<a href="https://api.whatsapp.com/send?phone=5535998980759&text=Ol%c3%a1%2c+preciso+de+suporte+no+sistema+MercadoPet." class="bt-whatsApp" target="_blank" style="left:25px; position:fixed;width:60px;height:60px;bottom:40px;z-index:100;">
<img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pjxzdmcgdmlld0JveD0iMjYxOSA1MDYgMTIwIDEyMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48c3R5bGU+CiAgICAgIC5jbHMtMSB7CiAgICAgICAgZmlsbDogIzI3ZDA0NTsKICAgICAgfQoKICAgICAgLmNscy0yLCAuY2xzLTUgewogICAgICAgIGZpbGw6IG5vbmU7CiAgICAgIH0KCiAgICAgIC5jbHMtMiB7CiAgICAgICAgc3Ryb2tlOiAjZmZmOwogICAgICAgIHN0cm9rZS13aWR0aDogNXB4OwogICAgICB9CgogICAgICAuY2xzLTMgewogICAgICAgIGZpbGw6ICNmZmY7CiAgICAgIH0KCiAgICAgIC5jbHMtNCB7CiAgICAgICAgc3Ryb2tlOiBub25lOwogICAgICB9CiAgICA8L3N0eWxlPjwvZGVmcz48ZyBkYXRhLW5hbWU9Ikdyb3VwIDM2IiBpZD0iR3JvdXBfMzYiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIzMDAgNzMpIj48Y2lyY2xlIGNsYXNzPSJjbHMtMSIgY3g9IjYwIiBjeT0iNjAiIGRhdGEtbmFtZT0iRWxsaXBzZSAxOCIgaWQ9IkVsbGlwc2VfMTgiIHI9IjYwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzMTkgNDMzKSIvPjxnIGRhdGEtbmFtZT0iR3JvdXAgMzUiIGlkPSJHcm91cF8zNSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjU0IDM4NikiPjxnIGRhdGEtbmFtZT0iR3JvdXAgMzQiIGlkPSJHcm91cF8zNCI+PGcgY2xhc3M9ImNscy0yIiBkYXRhLW5hbWU9IkVsbGlwc2UgMTkiIGlkPSJFbGxpcHNlXzE5IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSg5NCA3NSkiPjxjaXJjbGUgY2xhc3M9ImNscy00IiBjeD0iMzEuNSIgY3k9IjMxLjUiIHI9IjMxLjUiLz48Y2lyY2xlIGNsYXNzPSJjbHMtNSIgY3g9IjMxLjUiIGN5PSIzMS41IiByPSIyOSIvPjwvZz48cGF0aCBjbGFzcz0iY2xzLTMiIGQ9Ik0xNDI0LDE5MWwtNC42LDE2LjMsMTYuOS00LjcuOS01LjItMTEsMy41LDIuOS0xMC41WiIgZGF0YS1uYW1lPSJQYXRoIDEyNiIgaWQ9IlBhdGhfMTI2IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTMyNSAtNjgpIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTI2Niw5MGMwLS4xLDMuNS0xMS43LDMuNS0xMS43bDguNCw3LjlaIiBkYXRhLW5hbWU9IlBhdGggMTI3IiBpZD0iUGF0aF8xMjciIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xMTY1IDQzKSIvPjwvZz48cGF0aCBjbGFzcz0iY2xzLTMiIGQ9Ik0xNDM5LjMsMTYwLjZhOS40LDkuNCwwLDAsMC0zLjksNi4xYy0uNSwzLjksMS45LDcuOSwxLjksNy45YTUwLjg3Niw1MC44NzYsMCwwLDAsOC42LDkuOCwzMC4xODEsMzAuMTgxLDAsMCwwLDkuNiw1LjEsMTEuMzc4LDExLjM3OCwwLDAsMCw2LjQuNiw5LjE2Nyw5LjE2NywwLDAsMCw0LjgtMy4yLDkuODUxLDkuODUxLDAsMCwwLC42LTIuMiw1Ljg2OCw1Ljg2OCwwLDAsMCwwLTJjLS4xLS43LTcuMy00LTgtMy44cy0xLjMsMS41LTIuMSwyLjYtMS4xLDEuNi0xLjksMS42LTQuMy0xLjQtNy42LTQuNGExNS44NzUsMTUuODc1LDAsMCwxLTQuMy02cy42LS43LDEuNC0xLjhhNS42NjQsNS42NjQsMCwwLDAsMS4zLTIuNGMwLS41LTIuOC03LjYtMy41LTcuOUExMS44NTIsMTEuODUyLDAsMCwwLDE0MzkuMywxNjAuNloiIGRhdGEtbmFtZT0iUGF0aCAxMjgiIGlkPSJQYXRoXzEyOCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEzMjYuMzMyIC02OC40NjcpIi8+PC9nPjwvZz48L3N2Zz4=" alt="" width="60px">
</a>
<span id="alertWapp" style="left:30px; visibility: hidden; position:fixed;	width:17px;	height:17px;bottom:90px; background:red;z-index:101; font-size:11px;color:#fff;text-align:center;border-radius: 50px; font-weight:bold;line-height: normal; "> 1 </span>
<div id="msg1" style="left: 90px; visibility: hidden; background: #fff;color: #000;position: fixed;width: 100px;bottom: 55px;font-size: 12px;line-height: 13px;padding: 3px; border-radius: 10px; border:1px solid #e2e2e2; box-shadow: 2px 2px 3px #999;z-index:100; ">Fale conosco via WhatsApp</div>
<script type="text/javascript">function showIt2() {document.getElementById("msg1").style.visibility = "visible";}    setTimeout("showIt2()", 5000); function hiddenIt() {document.getElementById("msg1").style.visibility = "hidden";}setTimeout("hiddenIt()", 15000); function showIt3() {document.getElementById("msg1").style.visibility = "visible";} setTimeout("showIt3()", 25000);  msg1.onclick = function() {document.getElementById('msg1').style.visibility = "hidden"; };function alertW() { document.getElementById("alertWapp").style.visibility = "visible";	} setTimeout("alertW()", 15000); </script>



    </div>

            </form>
        </div>