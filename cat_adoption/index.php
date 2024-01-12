<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our mission -- Cat Adoption Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <!-- NAVBAR -->
  <nav class="py-5 display-6 navbar navbar-expand-lg mx-auto">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <a class="btn bg-info-subtle text-primary p-3 mx-2 btn-lg " href="/cat_adoption/index.php" role="button">Our
            mission</a>
          <a class="btn bg-info-subtle text-primary p-3 mx-2 btn-lg" href="/cat_adoption/gallery.php"
            role="button">Adopt now🐾</a>
        </ul>
      </div>
    </div>
  </nav>
  <!-- NAVBAR -->

  <h3 class="text-center fst-italic fw-lighter p-3">🐈Your lucky cat🐈</h3>

  <?php
  // Retriving 3 random entries from database.
  include("getData.php");
  $list = getRandoms();
  ?>

  <!-- Slider -->
  <div id="carouselExampleCaptions" class="carousel slide w-25 mx-auto">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-3">
      <div class="carousel-item active">
        <img src=<?php print_r($list[0][6]) ?> class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>First slide label</h5> -->
          <?php
          print_r($list[0][1]);
          echo "<br>"
            ?>
          <!-- <p>Some representative placeholder content for the first slide.</p> -->
          <?php
          print_r($list[0][5]);
          ?>
        </div>
      </div>
      <div class="carousel-item">
        <img src=<?php print_r($list[1][6]) ?> class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p> -->
          <?php
          print_r($list[1][1]);
          echo "<br>";
          print_r($list[1][5]);
          ?>
        </div>
      </div>
      <div class="carousel-item">
        <img src=<?php print_r($list[2][6]) ?> class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <!-- <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p> -->
          <?php
          print_r($list[2][1]);
          echo "<br>";
          print_r($list[2][5]);
          ?>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Slider       -->


  <!-- Welcome page -->
  <div class="w-50 mx-auto p-3">
    <div class="rounded-3 bg-primary-subtle p-5 my-3">
      <h3>🐾 Welcome to our Cat Adoption Center! 🐾</h3>
      <p class="text-start">At our feline haven, we extend a warm embrace to all cat enthusiasts and potential adopters.
        Our mission is
        simple yet profound - to create loving connections between cats in need and compassionate individuals or
        families
        seeking a forever feline companion.</p>
    </div>

    <div class="rounded-3 bg-primary-subtle p-5 my-3">
      <h3>🌟 Our Objective</h3>
      <p class="text-start">Our primary objective is to provide a safe, nurturing environment for homeless cats,
        offering them a second
        chance at a happy and fulfilling life. Through the magic of adoption, we aspire to unite these resilient feline
        friends with caring humans, creating lasting bonds that enrich both the lives of the cats and their new
        families.
      </p>
    </div>

    <div class="rounded-3 bg-primary-subtle p-5 my-3">
      <h3>🏡 Creating Forever Homes</h3>
      <p class="text-start">At the heart of our mission is the belief that every cat deserves a loving home. We
        diligently work towards
        finding the perfect match for each cat's unique personality, ensuring a harmonious and everlasting
        companionship.
        By facilitating these adoptions, we not only rescue cats from uncertainty but also bring joy and fulfillment to
        the lives of those who open their hearts to our whiskered friends.</p>
    </div>

    <div class="rounded-3 bg-primary-subtle p-5 my-3">
      <h3>🌈 Fostering a Compassionate Community</h3>
      <p class="text-start">Beyond adoptions, we aim to foster a compassionate community of cat lovers. Through
        educational initiatives,
        outreach programs, and ongoing support for adopters, we strive to create an environment where everyone can share
        in the joy of responsible pet ownership. Together, we can make a positive impact on the lives of cats and humans
        alike.</p>
    </div>

    <div class="rounded-3 bg-danger-subtle p-5 my-3">
      <p class="text-start">Join us in our pursuit of creating a world where every cat finds a loving home. Explore our
        adoption pages, learn
        about our precious feline residents, and embark on a journey towards companionship that lasts a lifetime. Thank
        you for considering adoption and being a part of our mission to make a difference, one purr at a time! 🐾💖</p>
    </div>
  </div>
  <!-- Welcome page -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


</body>


<footer class="mt-5">
  <div class="text-center p-3 bg-info-subtle">
    🐈🐾
  </div>
</footer>


</html>