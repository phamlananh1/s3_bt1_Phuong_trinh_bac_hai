<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .login {
        height:200px; width:300px;
        margin:0 ;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:1px; margin:20px;
    }
</style>
<body>
<h2>Phuong trinh bac 2 </h2>
<form method="post">
    <div class="login">
        <label>Nhap a: </label>
        <input type="number" name="num1" id="num1"><br>
        <label>Nhap b: </label>
        <input type="number" name="num2" id="num2"><br>
        <label>Nhap 3: </label>
        <input type="number" name="num3" id="num3"><br>
        <button type="submit">Calculator</button>
    </div>
</form>
<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function delta()
    {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $quadraticEquation = new QuadraticEquation($num1, $num2, $num3);
    $root1 = 0;
    $root2 = 0;
    if ($quadraticEquation->delta() > 0) {
        $root1 = ($quadraticEquation->getB()) + sqrt($quadraticEquation->getB() ** 2 - 4 * $quadraticEquation->getA() * $quadraticEquation->getC());
        $root2 = ($quadraticEquation->getB()) - sqrt($quadraticEquation->getB() ** 2 - 4 * $quadraticEquation->getA() * $quadraticEquation->getC());
        echo $root1."</br>";
        echo $root2;
    } else if ($quadraticEquation->delta() === 0) {
        $root1 = $root2 = (-$quadraticEquation->getB()) / 2 * $quadraticEquation->getA();
        echo $root1."</br>";
        echo $root2;
    }
    if ($quadraticEquation->delta() < 0) {
        echo "The equation has no ";
    }
}
?>
</body>
</html>