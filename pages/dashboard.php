<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    if ($weight <= 0 || $height <= 0) {
        $error = "Berat badan dan tinggi badan harus lebih besar dari nol.";
    } elseif ($weight > 300) {
        $error = "Berat badan maksimal 300 kg.";
    } elseif ($height > 2.5) {
        $error = "Tinggi badan maksimal 2.5 meter.";
    } else {
        $bmi = $weight / ($height * $height);
        $_SESSION["bmi"] = $bmi;
        header("Location: result.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
</head>

<body style="background-color: #e3f2fd; font-family: 'Poppins', sans-serif;">
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center" style="background-color: #90d1ff;">
                        <b>Kalkulator BMI</b>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="weight" class="form-label">Berat Badan (kg)</label>
                                <input type="number" name="weight" id="weight" step="0.01" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="height" class="form-label">Tinggi Badan (m)</label>
                                <input type="number" name="height" id="height" step="0.01" class="form-control" required>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Hitung BMI</button>
                            </div>
                        </form>
                        <?php if (isset($error)) : ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-3 mb-3 text-center">
        <p>&copy; <span id="currentYear"></span> BMI. Salman Abdul Jabbaar Wiharja.</p>
    </footer>
    <script>
        document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>