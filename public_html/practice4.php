<html>
<head>
    <h1>EECS Lab Four, Practice Four</h1>
</head>
<body>
    <h1>PHP Multiplication Table</h1>
    <form method="POST">
        <label>Enter a number:</label>
        <input type="number" name="num" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = intval($_POST["num"]);
            echo "<h2>Multiplication Table up to $num</h2>";
            echo "<table>";
            
            // Table headers
            echo "<tr><th>*</th>";
            for ($i = 1; $i <= $num; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Table rows
            for ($i = 1; $i <= $num; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $num; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>

