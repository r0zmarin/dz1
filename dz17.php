<html>
<head>
<body>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>";
            if ($i % 2 === 0 & $j % 2 === 0) {
                echo '(' . $i * $j . ')';
            } elseif ($i % 2 > 0 & $j % 2 > 0) {
                echo '[' . $i * $j . ']';
            } else {
                echo $i * $j;
            }
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</head>
</body>
</html>