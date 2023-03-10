<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>Task_11.7</title>
</head>
<body>
<div class="container mt-3 text-center">
    <h3>Модуль 11.7. Практика</h3>
    <h5>Задание 1. Таблица истинности PHP</h5>
</div>
<div class="container mt-3">
        <table class="table table-hover table-bordered table-dark text-center">
        <thead>
            <tr>
                <th class="col-2">A</th><th class="col-2">B</th><th class="col-2">!A</th><th class="col-2">A || B</th><th class="col-2">A && B</th><th class="col-2">A xor B</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $a1;?></td><td><?php echo $b1;?></td><td><?php echo $c1;?></td><td><?php echo ($d1 == false) ? "0" : "1";?></td><td><?php echo ($e1 == false) ? "0" : "1";?></td><td><?php echo ($f1 == false) ? "0" : "1";?></td>
            </tr>
            <tr>
                <td><?php echo $a2;?></td><td><?php echo $b2;?></td><td><?php echo $c2;?></td><td><?php echo $d2;?></td><td><?php echo ($e2 == false) ? "0" : "1";?></td><td><?php echo $f2 = $a2 xor $b2;?></td>
            </tr>
            <tr>
                <td><?php echo $a3;?></td><td><?php echo $b3;?></td><td><?php echo ($c3 == false) ? "0" : "1";?></td><td><?php echo $d3;?></td><td><?php echo ($e3 == false) ? "0" : "1";?></td><td><?php echo $f3 = $a3 xor $b3;?></td>
            </tr>
            <tr>
                <td><?php echo $a4;?></td><td><?php echo $b4;?></td><td><?php echo ($c4 == false) ? "0" : "1";?></td><td><?php echo $d4;?></td><td><?php echo $e4;?></td><td><?php echo ($f4 == false) ? "1" : "0";?></td>
            </tr>
        </tbody>
        </table>
</div>
    <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>    
</body>
</html>