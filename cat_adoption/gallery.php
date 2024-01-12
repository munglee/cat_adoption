<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Adopt me -- Cat Adoption Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


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

  <!-- Search -->
  <div class="w-25 mx-auto">
    <form class="d-flex" role="search" action="search.php" method="GET">
      <input class="form-control me-2" name="query" type="search" placeholder="Find cats to adopt..."
        aria-label="Search">
      <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>
  </div>
  <!-- Search -->

  <!-- Gallery starts -->
  <!-- Carousel wrapper starts -->
  <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
    <!-- Inner -->
    <div class="carousel-inner py-4">

      <!-- Single item -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <?php
            include("config.php");
            $sql = "SELECT * FROM cats";
            $result = mysqli_query($conn, $sql);
            while ($row = $result->fetch_array()) {
              ?>
              <div class="col-md-6 col-lg-4 pb-3">
                <div class="card border-primary-subtle">
                  <img src=<?= $row["image"] ?> class="card-img-top mx-auto" alt="cat" />
                  <div class="card-body">
                    <h5 class="card-title">
                      <?= $row["cat_name"] ?>
                    </h5>
                    <p class="card-text">
                      <?= $row["description"] ?>
                    </p>
                    <a href="appointment.php?id=<?= $row["id"] ?>" class="btn btn-primary">Adopt me</a>
                  </div>
                </div>
              </div>
            <?php } ?>
            <!-- Gallery ends -->

</body>

</html>