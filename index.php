<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
        table {
            border: 1px solid black;
        }

        td {
            padding: 20px;
            border: 1px solid black;
        }

        .bgcolor {
            background-color: black;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="box">
        <input type="submit" name="submit" value="Gen" required>
    </form>
    <br>
    <table>
        <?php
        if (isset($_POST['submit'])) {
            $data = $_POST['box'];
            for ($row = 1; $row <= $data; $row++) {
                echo "<tr>";
                for ($col = 1; $col <= $data; $col++) {
                    $total = $row + $col;
                    if ($total % 2 == 0) {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    } else {
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>

</html>