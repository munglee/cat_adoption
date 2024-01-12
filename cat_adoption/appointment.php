<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Appointment -- Cat Adoption Center</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="py-5 display-6 navbar navbar-expand-lg mx-auto">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">


                <ul class="navbar-nav">

                    <a class="btn bg-info-subtle text-primary p-3 mx-2 btn-lg " href="/cat_adoption/index.php"
                        role="button">Our mission</a>
                    <a class="btn bg-info-subtle text-primary p-3 mx-2 btn-lg" href="/cat_adoption/gallery.php"
                        role="button">Adopt now🐾</a>


                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR -->

    <?php
    session_start();
    $maxId = getMaxID();
    $id = $maxId['MAX(appointment_id)'] + 1;
    ?>

    <!-- Cat details -->
    <?php
    $cat = getCat();
    $cat_id = $cat['id'];
    ?>

    <h1 class="display-5 text-center mx-auto">Make an appointment to adopt a 🐈</h1><br>

    <div class="row col-md-6 col-lg-4 mx-auto w-50 border rounded-2">
        <div class="card col-md-6 p-0">
            <img src=<?= $cat['image'] ?> class="card-img-top mx-auto" alt="cat" />
            <div class="col-md-6 card-body">
                <h5 class="card-title">
                    <?= $cat["cat_name"] ?>
                </h5>
                <p class="card-text fst-italic">
                    <?= $cat["description"] ?>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <form action="insertAppointment.php" method="POST">
                <br>
                <div class="form-group w-75">
                    <label for="person_name">Your name:</label>
                    <input type="text" class="form-control" id="person_name" name="person_name">
                </div>
                <br>
                <!-- Choosing the date -->
                <div>
                    <label for="Date">Appointment date:</label>
                    <br>
                    <input type="date" id="appointment_date" name="appointment_date">
                </div>
                <br>

                <!-- Contact Phone Number -->
                <div class="form-row">
                    <!-- <div class="form-group col-md-1"> -->
                    <div class="form-group w-25">
                        <label for="inputState">Phone number:</label>
                        <select id="inputState" class="form-control" name="state">
                            <option selected>Choose...</option>
                            <option>+1</option>
                        </select>
                    </div>
                    <input type="text" id="num1" name="num1" size="5">-<input type="text" id="num2" name="num2"
                        size="5">-<input type="text" id="num3" name="num3" size="5">
                </div>
                <br>

                <!-- Email -->
                <div class="form-row">
                    <!-- <div class="form-group col-md-6"> -->
                    <div class="form-group w-75">
                        <label for="inputEmail4">Your email:</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email">
                    </div>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>

                <!-- Hidden Cat information -->
                <input type="hidden" class="" name="appointment_id" value=<?= $id ?>>
                <input type="hidden" class="" name="cat_id" value=<?= $cat_id ?>>
            </form>
        </div>
    </div>



</body>

<?php
function getCat()
{
    $id = $_GET['id'];
    // $id = 3;

    include("config.php");
    $sql = "SELECT * FROM cats WHERE id = $id";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $row = $result->fetch_assoc();
    }

    $conn->close();
}

function getMaxID()
{
    include("config.php");
    $sql = "SELECT MAX(appointment_id) FROM catappointment";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $row = $result->fetch_assoc();
    }

    $conn->close();
}
?>

<footer class="mt-5">
    <div class="text-center p-3 bg-info-subtle">
        🐈🐾
    </div>
</footer>

</html>