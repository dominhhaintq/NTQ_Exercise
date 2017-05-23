<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>FizzBuzz Plus</title>
    <style type="text/css">

        label {
            font-weight: bold;
            margin-left: 400px;
            font-size: 20px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 15%;
            float: left;
        }

        th {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
            background: yellow;
            color: black;
        }

        td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<div>
    <?php
    $result = array();
    for ($i = 1; $i <= 100; $i++) {
        $fizz = false;
        $buzz = false;
        if (($i % 3 == 0) || (strpos($i, '3') !== false)) {
            $fizz = true;
        }
        if (($i % 5 == 0) || (strpos($i, '5') !== false)) {
            $buzz = true;
        }
        if ($fizz == true && $buzz == true) {
            $result[] = "FizzBuzz";
        } else if ($fizz == true) {
            $result[] = "Fizz";
        } else if ($buzz == true) {
            $result[] = "Buzz";
        } else {
            $result[] = "";
        }
    }
    ?>
    <p>
        <label>
            FizzBuzz Plus
        </label>
    </p>
    <div id="table_container">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <table>
                <tr>
                    <th>Số</th>
                    <th>Trạng thái</th>
                </tr>
                <?php for ($k = ($i - 1) * 20 + 1; $k <= ($i * 20 - 1) + 1; $k++): ?>
                    <tr>
                        <td><?php echo $k ?></td>
                        <td><?php echo $result[$k - 1] ?></td>
                    </tr>
                <?php endfor; ?>
            </table>
        <?php endfor; ?>
    </div>
</div>
</body>
</html>
