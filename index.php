<!DOCTYPE html>

    <head>
        <title>Fatorial</title>
    </head>
    <body>
        <h1>
        <?php
            echo "Calculo de Fatorial!";
        ?>
        </h1>
        <?php
            $n = 5;
            $fatorial = 1;
            for($i = 1; $i <= $n; $i++){
                $fatorial *= $i;
            }
            echo "O fatorial de $n é $fatorial";
        ?>
    </body>
</html>