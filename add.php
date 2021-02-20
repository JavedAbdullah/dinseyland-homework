<html>
  <head>
    <title>DB & PHP test: INSERT</title>
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
      background-image: url("https://wallpapercave.com/wp/7r9FMBk.jpg");
	  background-repeat: no-repeat;
	  background-size: cover;
    }
  </style>
  
  <body>


<div class="container">

   <form action="insert.php" method="GET" class="text-white"><br>

   <div class="w-25 p-3">
     <span class="border border-dark"><p class=" h4 text-white" aria-placeholder="inserisci ">Inserire il nome di un personaggio:</p></span>
   
   
   </div>
    
    <input type="text" name="personaggio"> <br>
     
     <div class="w-25 p-3">
     <span class="border border-dark"><p class=" h4 text-white" aria-placeholder="inserisci ">Citt&agrave; </p></span>
   
   
   </div>
     
     <br>
    <select name="citta">
     <option value="PA"><span class="border border-dark"><p class=" h4 text-white" aria-placeholder="inserisci ">Paperopoli </p></span></option>
     <option value="TO"><span class="border border-dark"><p class=" h4 text-white" aria-placeholder="inserisci ">Topolinia </p></span></option>
    </select><br><br>
    <input type="submit" value="Inserisci">
   </form>
   
   </div>

     <!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
