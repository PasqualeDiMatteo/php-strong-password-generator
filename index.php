<?php ?>

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