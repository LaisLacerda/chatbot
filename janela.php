<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemplo de ChatBot</title>
        <script type="text/javascript">
     function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;
				}
			}
			req.open('GET', 'chat.php', true);
			req.send();
		}
	
		setInterval(function(){ajax();}, 1000);
        
        </script>
        
        
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
    </head>
    <body onload="ajax();" >



<nav class="nav">
	<ul>
            <li><a href="index.php">Home</a>
                <li><a href="logout.php">Fale Conosco</a>
                
	</ul>
</nav>
<br>
<br>


<div id="chat">

		
	</div>
<form action="janela.php" method="post" autocomplete="off">
                <input type="text" name="mensagem" placeholder="mensagem">
		<input type="submit" value="Enviar">
                    
<?php
                include("conexao.php");
		$mensagem = $_POST['mensagem'];
		$sql = $pdo->query("INSERT INTO pessoa SET mensagem= '$mensagem'");

?>
                
                

    <br>
    <br>
    <br>
    <br>	
		
    </body>
</html>
