<?php
//recebe variaveis    
$tabude = $_POST["de"];
$tabudeate = $_POST["ate"];
$multde = $_POST["multde"];
$multate = $_POST["multate"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Avaliação de resultados</title>
    <meta charset="utf-8">
    <!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
	<!-- Última versão JavaScript compilada e minificada -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

	<style>
		p,table{
			text-align: center;
		}
		table{
			background-color: rgba(0, 0, 0, 0.09);
		}
	</style>
</head>
<body>
<br>
<div class="container">
	<?php for($multiplicando=$multde; $multiplicando<=$multate; $multiplicando++){ ?>
		<label>
			<p>Tabuada do  <?php  echo $multiplicando ?></p>
		    <table  class="table  table-sm">
				<thead class="thead-inverse">
				  <tr>
				    <th>Fórmula</th>
				    <th></th>
				    <th>Valor</th>
				  </tr>
		        </thead>
		        <tbody>
		    <?php for($multiplicador=$tabude; $multiplicador<=$tabudeate; $multiplicador++){ ?>

			      <tr>
			        <td><?php  echo $multiplicador . " x " . $multiplicando ?></td>
			        <td>=</td>
			        <td><?php  echo ($multiplicador * $multiplicando) ?></td>
			      </tr>  
		    <?php  } ?>
		        </tbody>
		    </table> 
		</label>  
    <?php } ?>
</div>    
</body>
</html>
