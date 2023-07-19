<?php

$characters_type = ['alfa_upper', 'alfa_lower', 'number', 'simbol'];
$password_length = isset($_GET["password-length"]);

function create_random_password($password_length, $characters_type)
{

    $characters = "";
    if (in_array('alfa_upper', $characters_type)) {
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if (in_array('alfa_lower', $characters_type)) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if (in_array('number', $characters_type)) {
        $characters .= '1234567890';
    }
    if (in_array('simbol', $characters_type)) {
        $characters .= '!"£$%&/()=?\^@#[]*';
    }
    if (!is_numeric($password_length)) {
        $length = 4;
    }
    $string = '';
    for ($i = 0; $i < $password_length; $i++) {
        $string = $string . substr($characters, rand(0, strlen($characters) - 1), 1);
    }
    return $string;
}

if ($password_length) {
    echo create_random_password(intval($_GET["password-length"]), $characters_type);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container mt-4">
        <header class="text-center">
            <h1>PHP Strong Password Generator</h1>
        </header>
        <main>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Genera una Password sicura</h5>
                    <form action="" novalidate>
                        <div class="mb-3">
                            <label for="password-length" class="form-label">Lunghezza password:</label>
                            <input type="number" class="form-control" id="password-length" min="4" name="password-length" value="<?= $_GET["password-length"] ?? 4 ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>