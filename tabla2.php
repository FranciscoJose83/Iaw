<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Divisores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #CCA9DD;
        }
        .row-odd {
            background-color: #FFFF00;
        }
        .row-even {
            background-color: #FFA500;
        }
    </style>
</head>
<body>
    <?php
    function recupera($nombre) {
        return isset($_POST[$nombre]) ? intval($_POST[$nombre]) : 0;
    }

    $num1 = recupera('num1');
    $num2 = recupera('num2');

    if ($num1 >= 1 && $num1 <= 10 && $num2 >= 10 && $num2 <= 20) {
        echo "<table>
                <tr>
                    <th>Número</th>";
        for ($i = 50; $i <= 60; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        for ($j = $num1; $j <= $num2; $j++) {
            $rowClass = ($j % 2 == 0) ? 'row-even' : 'row-odd';
            echo "<tr class='$rowClass'><th>$j</th>";
            for ($k = 50; $k <= 60; $k++) {
                echo "<td>" . ($k % $j == 0 ? '*' : '-') . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>