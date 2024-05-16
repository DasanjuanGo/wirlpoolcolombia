<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php'?>
</head>

<body>

    <!-- header section strats -->
    <?php include 'navbar.php'; ?>
    <!-- end header section -->  

    <!-- service section -->
    <section class="service_section layout_padding" id="Proyectos">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                    Consumir APIS <span>JavaScript</span>
                    </h2>
                    <p>
                    La actividad consite en consumir los datos de la siguiente URL: <a href="https://jsonplaceholder.typicode.com/photos">https://jsonplaceholder.typicode.com/photos</a>,
                    Luego mostrarlos en una tabla con el color, descripcion, url y acciones, ya sea de eliminar o editar.
                    </p>
                </div>
            <button onclick="GetFotos()" class="btn btn-primary mt-3" style="margin-bottom: 50px;">Cargar Fotos</button>
    <div class="row">
    <div class="table-container" style="margin-top:-40px;">
        <table>
            <thead>
                <tr>
                    <th>Color</th>
                    <th>Descripcion</th>
                    <th>Url - Img</th>
                    <th>Acciones</th>
                    <!-- Agrega más columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody id="tabla-cuerpo">
                <!-- Agrega tus filas de datos directamente en HTML -->
            </tbody>
        </table>
    </div>
    </div>
</div>
</div>
</section>

    <!-- end service section -->

   <!-- footer section -->
  <?php include 'footer.php'; ?>
   <!-- footer section -->



  <!-- btn Subir section -->
  <button id="btnSubir" title="Subir">&#9650; Subir</button>
  <!-- btn Subir section -->


  <!--INICIO MI JS-->
  <script src="./js/btnScript.js"></script>
  <script src="./js/apis.js"></script>
  <!--Fin MI JS-->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>