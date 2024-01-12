<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Confirmation page -- Cat Adoption Center</title>
    </title>
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
    $cat_app = getSingleCat();
    $cat_id = $_POST['cat_id'];
    $appointment_id = $_POST["appointment_id"];
    $person_name = $_POST['person_name'];
    $appointment_date = $_POST['appointment_date'];
    $state = $_POST['state'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $contact_phone = $state . " " . $num1 . "-" . $num2 . "-" . $num3;
    $email = $_POST['email'];
    ?>

    <h1 class="display-5 text-center mx-auto">You have made an appointment!</h1><br>

    <div class="row col-md-6 col-lg-4 mx-auto w-50 rounded-2">
        <div class="card col-md-6 p-0">
            <img src=<?= $cat_app['image'] ?> class="card-img-top mx-auto" alt="cat" />
            <div class="col-md-6 card-body">
                <h5 class="card-title">
                    <?= $cat_app["cat_name"] ?>
                </h5>
                <p class="card-text">
                    <?= $cat_app["description"] ?>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="rounded-3 bg-primary-subtle p-4 mb-3">
                <?php print_r('Your Appointment ID: ' . $appointment_id) ?>
            </div>
            <div class="rounded-3 bg-primary-subtle p-4 mb-3">
                <?php print_r('Cat ID: ' . $cat_id) ?>
            </div>
            <div class="rounded-3 bg-primary-subtle p-4 mb-3">
                <?php print_r('Your name: ' . $person_name) ?>
            </div>
            <div class="rounded-3 bg-primary-subtle p-4 mb-3">
                <?php print_r('Appointment date: ' . $appointment_date) ?>
            </div>
            <div class="rounded-3 bg-primary-subtle p-4 mb-3">
                <?php print_r('Your contact number: ' . $contact_phone) ?>
            </div>
            <div class="rounded-3 bg-primary-subtle p-4 mb-3">
                <?php print_r('Email address: ' . $email) ?>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['person_name']))
    // $_POST  :  Global variable in order to get the form data 
    {
        include("config.php");

        $sql = "INSERT INTO catappointment (appointment_id, person_name, cat_id, appointment_date, contact_phone, email) VALUES ('$appointment_id', '$person_name', '$cat_id', '$appointment_date', '$contact_phone', '$email')";

        //  print_r($sql);exit;
        if ($conn->query($sql) === TRUE) {
            // echo "See You!";
        } else {
            echo "Error occured : " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

    }
    ?>
    <?php

    function getSingleCat()
    {
        $id = $_POST['cat_id'];

        include("config.php");
        $sql = "SELECT * FROM cats WHERE id = $id";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $row = $result->fetch_assoc();
        }

        $conn->close();
    }
    ?>
</body>
<footer class="mt-5">
    <div class="text-center p-3 bg-info-subtle">
        🐈🐾
    </div>
</footer>

</html>