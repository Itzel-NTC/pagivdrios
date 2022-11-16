<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quienes somos</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>SOBRE NOSOTROS</h3>
   <p> <a href="home.php">Inicio</a> / Quienes somos </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/logo1.png" alt="">
      </div>

      <div class="content">
         <h3>Somos vidrios “Belén” SRL</h3>
         <p>La importadora de vidrios “Belén” SRL. es una empresa especializada en la importación y venta de vidrios, fue fundada el año 2005 en la ciudad de La Paz-Bolivia.

Dedicada a la venta de vidrio, aluminio y accesorios a personas relacionadas con la construcción, carpintería metálica y a personas en general, brindando productos de calidad al mejor precio y con un excelente servicio a través de personal calificado.</p>
         <a href="contact.php" class="btn">contactanos</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Opiniones de nuestros clientes</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/persona1.png" alt="">
         <p>Es una empresa referente en el mundo del vidrio plano. Conformada por un equipo cualificado de profesionales, que transforman el vidrio de acuerdo a las necesidades del cliente, busca la captación de colaboradores deseosos de pertenecer a este fascinante mundo del vidrio.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Luis Alberto Piñero</h3>
      </div>

      <div class="box">
         <img src="images/persona2.jpeg" alt="">
         <p> Es una zona comúnmente muy transitada. Es más fácil llegar en transporte público o vehículo, hay dos líneas de metros cercanas a la empresa, el ambiente de trabajo es muy cómodo.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>

         </div>
         <h3>Gracia Barbera</h3>
      </div>

      <div class="box">
         <img src="images/persona3.png" alt="">
         <p>Es una empresa que ofrece productos de calidad un servicio ágil y eficaz que garantice la plena satisfacción del cliente. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Fernanda Roldan</h3>
      </div>

      <div class="box">
         <img src="images/persona4.png" alt="">
         <p>Es una empresa bastante accesible, es fácil llegar a pie, por transporte propio o público. Es una empresa dedicada a el comercio al por mayor y menor de materiales de construcción, vidrio y artículos de instalación.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Carlos Cabanillas</h3>
      </div>

      <div class="box">
         <img src="images/persona5.png" alt="">
         <p>Ofrece las mejores soluciones para la industria de la construcción, disponiendo de una amplia gama de productos de gran calidad. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Diego Lara</h3>
      </div>

      <div class="box">
         <img src="images/persona6.png" alt="">
         <p>Realizo instalaciones de cristalería, principalmente ventanas en industrias y edificios altos. Al principio, pensé que el procedimiento sería más difícil pero las técnicas que ocupan mis compañeros son realmente fantásticas y prácticas, rápidamente aprendí </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Maribel Saldaña</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">UBICACION</h1>

   <div class="box-container">

      <div class="box">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.0405257629586!2d-68.16485028513543!3d-16.524051588601328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe5a1ebe8b2342171!2zMTbCsDMxJzI2LjYiUyA2OMKwMDknNDUuNiJX!5e0!3m2!1ses!2sbo!4v1666049911555!5m2!1ses!2sbo" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Av. Arica Calle 5</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>