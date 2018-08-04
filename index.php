<html lang="pt">
<head>
  <title>Banco</title>
  <link rel="stylesheet" href="css\style.css" />
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
  <script src="js\javascript.js"></script>
  <?php include("header.php"); ?>
</head>
<main>
  <body>
    <div class="slide">
      <img class="mySlides" src="comprando-carro-fechando-negocio.jpg">
      <img class="mySlides" src="financiamento-imobiliario-2.jpg">

      <script>
      var slideIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
      }
      </script>

    </div>
  </body>
  <?php include("footer.php"); ?>
  </html>
