<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}

if (!isset($_SESSION["bmi"])) {
    $bmi = 0;
    $bmiText = "Tidak ada data BMI tersedia.";
} else {
    $bmi = $_SESSION["bmi"];
    $bmiText = "";
    if ($bmi < 18.5) {
        $bmiText = "Kurus";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        $bmiText = "Normal";
    } elseif ($bmi >= 25.0 && $bmi <= 29.9) {
        $bmiText = "Berlebihan";
    } else {
        $bmiText = "Obesitas";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
</head>

<body style="background-color: #e3f2fd; font-family: 'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-lg" style="background-color: #90d1ff;">
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
                        <b>Hasil BMI</b>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><b>Nilai BMI</b></td>
                                    <td class="text-center"><b><?php echo number_format($bmi, 2); ?></b></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center alert alert-info">
                            <b>Interpretasi BMI<br>
                                <?php echo $bmiText; ?></b>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="dashboard.php">Kembali ke Kalkulator BMI</a>
                        </div>
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