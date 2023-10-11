<?php







?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <header>
        <h1 class="text-center">Password Generator</h1>
    </header>

    <main>
        <div class="container">
            <div class="row flex-column g-2">
                <h2 class="text-danger text-center">Generate a safe password</h2>

                <div class="col border rounded-3 py-3 d-flex justify-content-center">
                    <form>
                        <div class="mb-3">
                            <label for="characters" class="form-label">How many characters should your password contain?</label>
                            <input type="number" class="form-control" name="characters" id="characters" aria-describedby="helpId" min="8" max="30">
                            <small id="characters" class="form-text text-muted">The entered value must be a number between 8 and 30</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Generate</button>



                </div>

            </div>
        </div>

    </main>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>