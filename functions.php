
<?php 

function generateRandomPassword($length,$allChars)
{
    $generatedPassword = '';

    for ($i = 0; $i < $length; $i++) {
        $generatedPassword .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    return $generatedPassword;
}
