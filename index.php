<?php
//inizializzo l'array
$generatedPassword = null;

//faccio un check su lenght e se è vero...
if (isset($_GET['length'])) {
    $passwordLength = $_GET['length'];

    // caratteri scelti dall'utente
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $symbolChars = '!@#$%^&*()-_=+[]{}/\|.:,;\'"`~<>^';

    //caratteri con lettere minuscole
    // $allChars = $lowercaseChars;
    
    //inizializzo allChars ma non c'è bisogno su php
    // $allChars = '';

    // personalizzazione dei checkbox(prede i valori che ho messo nel name)
    if (isset($_GET['lowercase'])) {
        $allChars .= $lowercaseChars;
    }
    if (isset($_GET['uppercase'])) {
        $allChars .= $uppercaseChars;
    }
    if (isset($_GET['numbers'])) {
        $allChars .= $numberChars;
    }
    if (isset($_GET['symbols'])) {
        $allChars .= $symbolChars;
    }
     //chiamo la funzione
    $generatedPassword = generateRandomPassword($passwordLength, $allChars);
}

function generateRandomPassword($length,$allChars)
{
    $generatedPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $generatedPassword .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    return $generatedPassword;
}






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
                    <form method="get">
                        <div class="mb-3">
                            <label for="characterCount" class="form-label">Password Length:</label>
                            <input type="number" class="form-control" name="length" id="characterCount" min="1" required>
                        </div>
                        <div class="mb-3">
                            <h6>Personalize your password:</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="lowercase" id="lowercase">
                                <label for="lowercase" class="form-check-label">Lowercase letters</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="uppercase" id="uppercase">
                                <label for="uppercase" class="form-check-label">Uppercase letters</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="numbers" id="numbers">
                                <label for="numbers" class="form-check-label">Numbers</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="symbols" id="symbols">
                                <label for="symbols" class="form-check-label">Symbols</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Generate Password</button>
                    </form>
                </div>
                <h4 class="text-center">Result : <?= $generatedPassword ?></h4>

            </div>

        </div>
       

    </main>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>