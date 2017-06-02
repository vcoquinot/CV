<!DOCTYPE html>
<html>
<head>
  <title>Nataraj Bollywood accueil</title>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>

<!--*******************************************************************************************-->
<!--HEADER : menu-->
<?php include("menu.php"); ?>


<!--*******************************************************************************************-->
<!-- INTRO-->
  <section class="intro">
     <div class="row">
     	<figure class="col-md-12">
		<p><strong>Découvrez le Bollywood.<br/>Laissez-vous entraîner par les couleurs et l'énergie de cette danse indienne.</br>Rejoignez le Centre de Danse Nataraj</strong></p>
		</figure>
	</div>
</section>

<!-- Image centrale-->
<section class="jumbotron">
    <div class="container">
    <div class="row">
      <div class="bottom-align-text col-md-4">
        <p>Entrez dans <br/>l'univers Bollywood!</p>
        <a class= "btn btn-primary" href="galerie.php" role ="button"><strong>Voir plus de photos</strong></a>
      </div>
    </div>
    </div>
</section>

<!--*******************************************************************************************-->
<!-- Présentation ANNE-->
<section class="intro_2">
	<div class="container">
    <div class="row-text-center">
  		<h3><strong>Anne, professeur de danse Bollywood,<br/> vous propose des cours hebdomadaires pour enfants, ados et adultes,<br/> des stages tout au long de l'année et la possibilité de se produire régulièrement sur scène.<br/>La danse bollywood est accessible à tous âges et à tous niveaux.</strong></h3>
		</div>
	</div>
</section>
  
<!--*******************************************************************************************-->
<!--4 photos PAGE ACCUEIL-->
  <section class="container">
    <div class="row">
      <figure class="col-md-6">
        <a class="btn btn-primary" href="anne.php"><strong>Anne Nataraj</strong></a>
        <img src="photos/anne.jpg" />
      </figure>
      <figure class="col-md-6">
        <a class="btn btn-primary" href="cours.php"><strong>Planning des cours</strong></a>
        <img src="photos/anne_3.jpg" />
      </figure>
    </div>
    <div class="row">
      <figure class="col-md-6">
        <a class="btn btn-primary" href="agenda.php"><strong>Événements</strong></a>
        <img src=video.jpg />
      </figure>
      <figure class="col-md-6">
      <a class="btn btn-primary" href="https://www.youtube.com/user/NATARAJBOLLYWOOD/videos"><strong>Vidéos</strong></a>
      <img src=photos/spectacle.jpg />
      </figure>
      
        </div>
  </section>

<!--*******************************************************************************************-->
  <!--Footer-->
<?php include("footer.php"); ?>

</body>
</html>



