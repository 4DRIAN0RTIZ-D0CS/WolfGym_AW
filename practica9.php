<?php
if($_POST){
$ValorA=$_POST['ValorA'];
$ValorB=$_POST['ValorB'];

if($ValorA > $ValorB){
    echo "El valor de A es mayor que el valor de B";
}
else {
    echo "El valor de A no es mayor que el valor de B";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
<form action="practica9.php" method="post">
Valor A:
<input type="text" name="ValorA" id="">
Valor B:
<input type="text" name="ValorB" id="">

<input type="submit" value="Calcular">


</form>    


</body>
</html>





<?php








?>