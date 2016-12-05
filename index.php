<!Doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
  	<title>Pagina con Bootstrap 3</title>

    <?php include 'inc/head_common.php';?>
    <link rel="stylesheet" href="css/workshop.css">

  </head>
  <body>
     <?php include 'inc/header.php';?>
     <div class="workshop-list">
     	<article id="w1" class="workshop workshop-left">
     	<div class="container">
     		<div class="row">
     		    <div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-4 col-md-push-8 col-lg-6 col-lg-push-6 date-info">
     				<h3 class="highlinghted"><strong>W21 </strong>13/14 de Abril</h3>
     				<h3 class="highlinghted">20 Plazas</h3>
     				<h3 class="highlinghted">99 Bs</h3>
     			</div>
     			<div class="col-xs-12 col-sm-9 col-sm-pull-3 col-md-8 col-md-pull-4 col-lg-6 col-lg-pull-6 main-info">
     				<h2>Desarrolla front-end con Bootstrap 3</h2>
     				<p>Este parrafo es de prueba para la pagina. Verificando la maqueación.</p>
     				<a href="detail.php" class="btn btn-custom">Me Apunto</a>
     				<a href="detail.php" class="more-info-linf">Quiero mas Información</a>
     			</div>     			
     		</div>
     	</div>	
     	</article>
     	 <article id="w2" class="workshop workshop-right">
     	 <div class="container">
     	 	<div class="row">
     			<div class="col-xs-12 col-sm-3 col-md-4 col-lg-6 date-info">
     				<h3 class="highlinghted"><strong>W21 </strong>10/14 de Abril</h3>
     				<h3 class="highlinghted">50 Plazas</h3>
     				<h3 class="highlinghted">120 Bs</h3>
     			</div>
     			<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6 main-info">
     				<h2>Desarrolla front-end con Bootstrap 3</h2>
     				<p>Este parrafo es de prueba para la pagina. Verificando la maqueación.</p>
     				<a href="detail.php" class="btn btn-custom">Me Apunto</a>
     				<a href="detail.php" class="more-info-linf">Quiero mas Información</a>
     			</div>
     		</div>
     	 </div>   		
     	</article>
     </div>
  	 <?php include 'inc/footer.php'; ?>
     <?php include 'inc/footer_common.php';?>
  </body>
</html>