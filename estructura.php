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
                <div class="heading_container heading_center" style="margin-top: -40px">
                    <h2>
                    Estructura <span>Proyecto Final - Restaurante</span>
                    </h2>
                    <p>
                    Este proyecto de restaurante se centra en el desarrollo de un sistema integral utilizando tecnologías web y Python. La aplicación utiliza HTML para la estructura de las páginas, CSS para el diseño y la presentación, y JavaScript para la interactividad del usuario. La lógica del servidor y la gestión de datos se realizan con Python, empleando SQLite como base de datos para almacenar información
                    </p>
                </div>
  
                <div class="row" style="margin-top: 20px">
                <h2>Modelo Relacional</h2>
        <img src="./images/Modelo E-R.jpeg" alt="modelo entidad" style="width: 50%; height: 50%;">
        <div style="margin-top: 20px; ">
            <a class="btn btn-primary mt-3" style="margin-bottom: 50px;" href="./files/Script BD.txt" download="./files/Script BD.txt"
                class="boton-de-descarga">Descargar script BD</a>
            <a class="btn btn-primary mt-3" style="margin-bottom: 50px;" href="./files/Consultas.txt" download="./Consultas.txt"
                class="boton-de-descarga">Descargar Consultas</a>
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