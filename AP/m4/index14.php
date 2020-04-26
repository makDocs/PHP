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
<?php
if (isset($_POST['sub'])){

    $txt1=$_POST['number1'];
    $txt2=$_POST['number2'];
    $oprnd=$_POST['sub'];

    if ($oprnd=="+")
        $res=$txt1+$txt2;

    elseif($oprnd=="-")
        $res=$txt1-$txt2;

    elseif ($oprnd=="x")
        $res=$txt1*$txt2;

    elseif ($oprnd=="/")
        $res=$txt1/$txt2;
}


?>
<form action="" method="post">
    Calculator
    <br>
    <input name="number1" value="<?php echo $txt1; ?>">
    <br>
    <input name="number2" value="<?php echo $txt2; ?>">
    <br>
    <input name="res" value="<?php echo $res;?>">
    <br>
    <input type="submit" name="sub" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="sub" value="x">
    <input type="submit" name="sub" value="/">
</form>

</body>
</html>
