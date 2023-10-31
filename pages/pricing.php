<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/bmi-square.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                BMI (Body Mass Index)
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="pricing.php">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="../logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mb-4">Pricing</h1>
                <div class="card card-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-6">
                                <div class="card-header text-center">
                                    <h5>Free</h5>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title text-center">Rp0</h2>
                                    <p class="card-text text-center">unlimited</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Calculator Only</li>
                                    <li class="list-group-item"> - </li>
                                    <li class="list-group-item"> - </li>
                                </ul>
                                <div class="card-body text-center">
                                    <a href="dashboard.php" class="btn btn-primary">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-6">
                                <div class="card-header text-center bg-success">
                                    <h5>Pro</h5>
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title text-center">$99</h2>
                                    <p class="card-text text-center">per month</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Calculator</li>
                                    <li class="list-group-item">Tips</li>
                                    <li class="list-group-item">Consultation</li>
                                </ul>
                                <div class="card-body text-center">
                                    <a href="https://wa.me/6285624772870" class="btn btn-success">Contact Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>