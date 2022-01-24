<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite</title>
</head>
<body>
    <?php

        $partite = [
            [
            'casa' => 'Olimpia Milano',
            'puntiCasa' => 88,
            'esterna' => 'Virtus Bologna',
            'puntiEsterna' => 90
            ],
            [
            'casa' => 'Varese',
            'puntiCasa' => 45,
            'esterna' => 'Pall. Cantù',
            'puntiEsterna' => 63
            ],
            [
            'casa' => 'Reyer Venezia',
            'puntiCasa' => 66,
            'esterna' => 'Treviso',
            'puntiEsterna' => 54
            ],
            [
            'casa' => 'Stella Azzurra',
            'puntiCasa' => 102,
            'esterna' => 'Scandone Avellino',
            'puntiEsterna' => 103
            ],
            [
            'casa' => 'Libertas Livorno',
            'puntiCasa' => 29,
            'esterna' => 'Petrarca',
            'puntiEsterna' => 37
            ],

        ];
    ?>

    <h2>Partite di Basket</h2>
    <?php for($i = 0; $i < count($partite); $i++) { ?>
        <?php $game = $partite[$i]; ?>
        <div>
            <h5><?php echo $game['casa']; ?> - <?php echo $game['esterna']; ?></h5>
            <span> <?php echo $game['puntiCasa']; ?> - <?php echo $game['puntiEsterna']; ?></span>
        </div>
    <?php } ?>
</body>
</html>