<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturando los nombres y precios de los productos
    $producto1 = $_POST['producto1'];
    $precio1 = (float) $_POST['precio1'];
    
    $producto2 = $_POST['producto2'];
    $precio2 = (float) $_POST['precio2'];
    
    $producto3 = $_POST['producto3'];
    $precio3 = (float) $_POST['precio3'];
    
    // Sumando los precios
    $total = $precio1 + $precio2 + $precio3;
    
    // Aplicando el descuento del 16%
    $descuento = $total * 0.16;
    $total_pagar = $total - $descuento;
    
    // Mostrando los resultados
    echo "<h1>Resumen de la Compra</h1>";
    echo "Producto 1: $producto1 - Precio: $$precio1<br>";
    echo "Producto 2: $producto2 - Precio: $$precio2<br>";
    echo "Producto 3: $producto3 - Precio: $$precio3<br>";
    echo "<br>Total antes del descuento: $$total<br>";
    echo "Descuento aplicado (16%): $$descuento<br>";
    echo "<h2>Total a pagar: $$total_pagar</h2>";
} else {
    echo "No se enviaron datos.";
?>
