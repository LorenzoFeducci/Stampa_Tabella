<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaTabella($righe, $colonne){
            echo "<table style='border: solid black 1px; border-collapse: collapse;'>";
                for($i = 0; $i <= $righe; $i++){
                    echo "<tr>";
                    for($k = 0; $k <= $colonne; $k++){
                        echo "<th style='border: solid black 1px; border-collapse: collapse;'>$i , $k</th>";
                    }
                    echo "</tr>";
                }

            echo "</table>";
        }

        stampaTabella(10, 20);
    ?>
</body>
</html>