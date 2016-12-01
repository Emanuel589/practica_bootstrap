<!Doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
  	<title>Pagina con Bootstrap 3</title>
    <?php include 'inc/head_common.php';?>
    <link rel="stylesheet" href="css/detail.css">
  </head>
  <body>  	 
     <?php include 'inc/header.php';?>
     <article id="w1-detail" class="detail">
       <header>
         <div class="container">
           <div class="row">
             <div class="col-xs-12">
               <h2>Desarrolla Bootstrap 3 Paso a Paso</h2>
             </div>
           </div>
         </div>
       </header>
       <div class="container">
         <div class="row">
           <div class="col-xs-7">
             <section id="intro">
               <h3>En este workshop aprenderas...</h3>
               <p>Los pre-procesadores son herramientas que nos 
               permiten escribir CSS con una sintaxis particular 
               y lo convierte en CSS que es, al fin y al cabo lo que las páginas necesitan para verse bonicas</p>
             </section>
             <section id="trainer-list">
               <h3>Los Formadores</h3>
               <div class="trainer row">
                 <div class="col-xs-4">
                   <img src="img/Benito_Mussolini.jpg" width="50%" height= ="50%" alt="Benito Mossolini">
                 </div>
                 <div class="col-xs-8">
                   <h4>Benito Mossolini</h4>
                   <p>Aca pongo datos personales del formador.</p>
                 </div>
               </div>
               <div class="trainer row">
                 <div class="col-xs-4">
                   <img src="img/alex-gonzales.jpg" width="50%" height="50%" alt="Alex Gonzales">
                 </div>
                 <div class="col-xs-8">
                   <h4>Alex Gonzales</h4>
                   <p>Aca pongo datos personales del formador.</p>
                 </div>
               </div>
             </section>
            </div>
            <div class="col-xs-5">
            <section id="registration">
                <h3>Registro</h3>
                <p>Hay varios pre-procesadores disponibles para nosotros, siendo los más comunes Sass (con SCSS) y LESS. En este artículo, como ya lo habrás adivinado, hablaremos de Sass que es el que acostumbro a usar.</p>
                <div id="registration-badge">
                  <h3 class="price">99 $</h3>
                  <p class="included">
                     workshop + <br>
                     desayuno + <br>
                     almuerzo
                  </p>
                  <div class="clearfix"></div>
                  <a href="#" class="do-register">ME APUNTO!</a> 
                </div>
            </section>
            <section id="agenda">
                <h3>Agenda del día</h3>
                <h4><span>W21</span>Sábado 24 de Septiembre</h4>
                <dl class="dl-horizontal">
                  <dt>10.00Hr</dt>
                  <dd>WorkShop parte 1/4</dd>
                  <dt>12.00Hr</dt>
                  <dd>WorkShop parte 2/4</dd>
                  <dt>14.00Hr</dt>
                  <dd>WorkShop parte 3/4</dd>
                  <dt>16.00Hr</dt>
                  <dd>WorkShop parte 4/4</dd>
                </dl>
            </section>
          </div>
         </div>
       </div>
       <section id="table-of-contents">
          <div class="container">
             <div class="row">
                <div class="col-xs-12">
                  <h3>Indice de Contenidos</h3>
                </div>
                <div class="col-xs-4">
                  <h4>1.- Frameworks Front-End</h4>
                  <ul>
                    <li>Item indice primero</li>
                    <li>Item indice segundo</li>
                    <li>Item indice tercero</li>
                  </ul>
                  
                  <h4>2.- Frameworks Front-End</h4>
                   <ul>
                    <li>Item indice primero</li>
                    <li>Item indice segundo</li>
                    <li>Item indice tercero</li>
                  </ul>
                </div>
                <div class="col-xs-4">
                   <h4>3.- Frameworks Front-End</h4>
                  <ul>
                    <li>Item indice primero</li>
                    <li>Item indice segundo</li>
                    <li>Item indice tercero</li>
                  </ul>
                  <h4>4.- Frameworks Front-End</h4>
                  <ul>
                    <li>Item indice primero</li>
                    <li>Item indice segundo</li>
                    <li>Item indice tercero</li>
                  </ul>
                </div>
                <div class="col-xs-4">
                   <h4>5.- Frameworks Front-End</h4>
                   <ul>
                    <li>Item indice primero</li>
                    <li>Item indice segundo</li>
                    <li>Item indice tercero</li>
                  </ul>
                </div>
             </div>
          </div>
       </section>
       <section id="location-info">
       <!-- Mapa de Google-->
          <div class="map-canvas"></div>
          <div class="container">
            <div class="row">
               <div class="col-xs-5">
                  <h3>¿Necesitas Alojamiento?</h3>
                  <div class="hotel">
                     <h4>Hotel Los Tajibos</h4>
                     <p>You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first-class API and should be your first consideration when using a plugin.</p>
                     <a href="#">Consultar Disponibilidad</a>
                  </div>  
                  <div class="hotel">
                     <h4>Hotel Boganvillas</h4>
                     <p>You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap's first-class API and should be your first consideration when using a plugin.</p>
                     <a href="#">Consultar Disponibilidad</a>
                  </div>  
               </div>
            </div>
          </div>
         
       </section> 
       <section id="faq">
          <div class="container">
             <div class="row">
                <div class="col-xs-12">
                   <h3>Preguntas Frecuentes</h3>
                   <div class="col-xs-4">
                     <h4>Primer preguntas</h4>
                     <p>Las respuestas se veran en este apartado. Por el momemo no tenemos nada. </p>
                   </div>
                   <div class="col-xs-4">
                     <h4>Segunda preguntas</h4>
                     <p>Las respuestas se veran en este apartado. Por el momemo no tenemos nada. </p>
                   </div>
                   <div class="col-xs-4">
                     <h4>Tercera preguntas</h4>
                     <p>Las respuestas se veran en este apartado. Por el momemo no tenemos nada. </p>
                   </div>
                   <div class="col-xs-4">
                     <h4>Cuarta preguntas</h4>
                     <p>Las respuestas se veran en este apartado. Por el momemo no tenemos nada. </p>
                   </div>
                   <div class="col-xs-4">
                     <h4>Quinta preguntas</h4>
                     <p>Las respuestas se veran en este apartado. Por el momemo no tenemos nada. </p>
                   </div>
                   <div class="col-xs-4">
                     <h4>Sexta preguntas</h4>
                     <p>Las respuestas se veran en este apartado. Por el momemo no tenemos nada. </p>
                   </div>
                </div>
             </div>
          </div>
         
       </section>
     </article>
    <?php include 'inc/footer.php';?>
    <?php include 'inc/footer_common.php';?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize {
          var mapOptions = {
            zoom: 8,
            scrollwheel: false,
            center: new google.maps.LatLng(-34.397,150.644)
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        }
        google.maps.event.addDomListener(window,'load',initialize);
    </script>
  </body>
</html>