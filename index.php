<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Simple calculator</h1>
<fieldset>
    <legend>Calulator</legend>
    <form method="post">
        <input type="number" placeholder="first operand" name="numb1">
        <select name="operator" id="">
            <option value="+">add</option>
            <option value="-">minus</option>
            <option value="*">multiply</option>
            <option value="/">divide</option>
        </select>
        <input type="number" placeholder="second operand" name="numb2">
        <input type="submit" name="add" placeholder="tinh">
        
</fieldset>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $oper1 = $_POST['numb1'];
    $oper2 = $_POST['numb2'];
    $op=$_POST['operator'];
    switch ($op){
        case '+':
            echo $oper1+$oper2;
            break;
        case '-':
            echo $oper1-$oper2;
            break;
        case '*':
            echo $oper1*$oper2;
            break;
        case '/':
            if ($oper2==0){
                echo 'error';
            }else{
                echo $oper1/$oper2;
                break;
            }
    }
}
?>
</html>
