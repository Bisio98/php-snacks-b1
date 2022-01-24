<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeri casuali</title>
</head>
<body>
    <?php
        $randomNumbers = [];
        $maxNumbers = 15;
        $randomElement = 0;
    ?>

    <h1>Numeri casuali</h1>

    <?php while( count($randomNumbers) < $maxNumbers) { ?>
        <?php $randomElement = rand(0,100); ?>
        <?php if(!in_array($randomElement,$randomNumbers)){ ?>
            <?php $randomNumbers[] = $randomElement; } ?>
    <?php } ?>
    <?php for($i = 0; $i < count($randomNumbers); $i++) { ?>

        <?php echo $randomNumbers[$i]; ?>
    <?php } ?>
</body>
</html>