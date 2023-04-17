<?php

use PhpParser\Node\Expr\Print_;

 $nome = 'João Paulo'; ?>
<!DOCTYPE html>
    <head>
        <title>Site em PHP de <?=$nome?></title>
    </head>
    <body>
        <h1>Meu nome é <?php echo $nome?></h1>
        <p>Olá <?php Print($nome);?></p>
    </body>
</html>