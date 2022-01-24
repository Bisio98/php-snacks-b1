<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
</head>
<body>
    <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
    ?>

    <h1>Accedi:</h1>

    <?php if(strstr($email, '@') && strstr($email, '.') && is_numeric($age) && strlen($name) > 3 ) { ?>
        <span>Accesso riuscito</span>
    <?php } else { ?>
        <span>Accesso negato</span>
    <?php } ?>
</body>
</html>