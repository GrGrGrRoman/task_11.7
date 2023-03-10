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
<div class="container mt-5 text-center">
    <h6>Жёсткое сравнение c === в PHP</h6>
</div>
<div class="container mt-3">
        <table class="table table-hover table-bordered table-dark text-center">
        <thead>
            <tr>
                <th class="col-1">#</th>
                <th class="col-1"><?php echo $true_txt;?></th>
                <th class="col-1"><?php echo $false_txt;?></th>
                <th class="col-1"><?php echo $one;?></th>
                <th class="col-1"><?php echo $zero;?></th>
                <th class="col-1"><?php echo $neg_one;?></th>
                <th class="col-1"><?php echo $one_txt;?></th>
                <th class="col-1"><?php echo $null;?></th>
                <th class="col-1"><?php echo $php_txt;?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?php echo $true_txt;?></th>
                <td><?php echo ($true === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($true === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $false_txt;?></th>
                <td><?php echo ($false === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($false === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $one;?></th>
                <td><?php echo ($one === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($one === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $zero;?></th>
                <td><?php echo ($zero === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($zero === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $neg_one;?></th>
                <td><?php echo ($neg_one === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($neg_one === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $one_txt;?></th>
                <td><?php echo ($str_1 === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($str_1 === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $null;?></th>
                <td><?php echo ($NULL === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($NULL === $str_php) ? $true_txt : $false_txt;?></td>
            </tr>
            <tr>
                <th><?php echo $php_txt;?></th>
                <td><?php echo ($php_txt === $true) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $false) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $zero) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $neg_one) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $str_1) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $NULL) ? $true_txt : $false_txt;?></td>
                <td><?php echo ($php_txt === $php_txt) ? $true_txt : $false_txt;?></td>
            </tr>
        </tbody>
        </table>

</div>
    <script src="./js/bootstrap.bundle.min.js" type="text/javascript"></script>    
</body>
</html>