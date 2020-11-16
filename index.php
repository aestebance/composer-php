<?php
    require_once "vendor/autoload.php";

    use Upgrade\Cuadrado as UpCuadrado;
    use Upgrade\Circulo as UpCirculo;
    use Upgrade\Rectangulo as UpRectangulo;

    $cuadrado = new UpCuadrado(2.5);

    echo "Área del cuadrado " . $cuadrado->getArea() . "<br>";

    $rectangulo = new UpRectangulo(2.5, 3.5);

    echo "Área del rectángulo " . $rectangulo->getArea() . "<br>";

    $circulo = new UpCirculo(2.5);

    echo "Áreal del círculo " . $circulo->getArea() . "<br>";

?>