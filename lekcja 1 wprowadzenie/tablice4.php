<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            
            echo "<h2>Tablice</h2>";

            $paper = array("Ksero", "Atrament", "Laser", "Foto");
            $j = 0;
            foreach($paper as $item){
                echo "$item <br>";
                ++$j;
            }

            $numbers = array(10, 23, 45, 67, 82, 64, 21, 7, 18);
            $j = 0;
            foreach($numbers as $item){
                echo "$item <br>";
                ++$j;
            }
            
            echo "<hr><h2>Tablice posortowane rosnąco</h2>";
            sort($numbers, SORT_NUMERIC);
            sort($paper, SORT_STRING);

            $j=0;
            foreach($paper as $item){
                echo " $item <br>";
                ++$j;
            }

            $j=0;
            foreach($numbers as $item){
                echo " $item <br>";
                ++$j;
            }


            echo "<hr><h2>Tablice posortowane malejąco</h2>";
            rsort($numbers, SORT_NUMERIC);
            rsort($paper, SORT_STRING);

            $j=0;
            foreach($paper as $item){
                echo " $item <br>";
                ++$j;
            }

            $j=0;
            foreach($numbers as $item){
                echo " $item <br>";
                ++$j;
            }
        ?>
    </body>
</html>