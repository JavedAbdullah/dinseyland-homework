<html>
 <head>
  <title>DB & PHP test</title>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>



	<script src="https://kit.fontawesome.com/ad8174dd7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>

 <style>
    body {
      background-image: url("http://localhost/disneyland primo amore/cartella sito web disneyland/images/infanzia.png");
	  background-repeat: no-repeat;
	  background-size: cover;
    }
  </style>


 <body class="is-preload">


 
 <div id="wrapper">

        <!-- Header -->
        <header id="header">
            
            <div class="content">

                <h1 class="text-white bg-secondary "> LE GRANDI CITT&agrave; DELLA NOSTRA INFANZIA</h1>
                <p class="text-white bg-dark">ECCO I LORO PERSONAGGI : </p>

            </div>
    </div>


 

<br>
<br>


 <div class="container">

 <?php
	$connection = mysqli_connect("localhost","root","","disneyland",3325);
	$query = "SELECT personaggi.nome, citta.denominazione
	FROM citta,personaggi
	WHERE citta.sigla = personaggi.siglaCitta 
	GROUP BY personaggi.nome
	";
			  //SELECT nome,denominazione FROM Personaggi,citta
			  //WHERE Personaggi.citta = citta.sigla ORDER BY nome
	$result = mysqli_query($connection,$query);
	if (mysqli_num_rows($result) != 0)
	{
		echo "<table border>";
		echo "<tr>";
		echo "<th>Personaggio</th>";
		echo "<th>Citt&agrave;</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td class='font-weight-bold text-dark-bold'>$row[nome]</td>";
			//echo "<td>$row[0]</td>";
			echo "<td class='font-weight-bold text-dark-bold'>$row[denominazione]</td>";
			//echo "<td>$row[1]</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
		echo " Nessun personaggio &egrave; presente nel database.";
	mysqli_close($connection);
 ?>

 <div class="d-flex flex-row">
 
 <div class="p-2">
  <p class="font-weight-bold">Inserire nuovo personaggio  
  <?php $linkAdd = "http://localhost/disneyland primo amore/cartella sito web disneyland/add.php" ?>
  	<input type="button" onclick="location.href='<?php echo $linkAdd; ?>'" value="Inserisci"/>


	</div>
	<div class="p-2">

	<p class="font-weight-bold">  Elimina personaggio
  <?php $linkDel = "http://localhost/disneyland primo amore/cartella sito web disneyland/del.php"  ?>
  	<input type="button" onclick="location.href='<?php echo $linkDel; ?>'" value="Elimina"/>
  </p>
  </div>
 
 
 </div>
 
  

 


	</div>






	

	 <!-- Scripts -->
	 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  
  
 </body>
</html>