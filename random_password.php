<?php
session_start();
$password = $_SESSION["password"]
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Password</title>
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center p-3" role="alert">
            <strong>La Password generata è:</strong> <?= $password ?>
        </div>
    </div>
</body>

</html>