<head>
    <title><?php echo 'Dama y caballeros'; ?></title>
<style>
    .producto {
    width: 200px; 
    margin-right: 20px;
    float: left;
    margin-bottom: 20px; 
}
.producto img {
    width: 100%; 
    height: auto;
}
</style>
</head>
<CENTER><h1>tus favoritos</h1><BR></CENTER>
<?php
include 'conexion.php';
$salida="";
$sql = "SELECT * FROM tb_favoritos";
$consulta = $conexion->query($sql);

if ($consulta->num_rows > 0) {
    while ($row= $consulta->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='" . $row['img'] . "' alt='" . $row['nombre_producto'] . "'>"; 
        echo "<p><strong>" . $row['nombre_producto'] . "</strong></p>"; 
        echo "<p><strong>Precio: $</strong>" . $row['precio'] . "</p>";
        echo "<p><strong>Detalles:</strong> ". $row['detalles']. "</p>";
        echo "<button><strong>Agregar a carrito</strong></button><br><br> ";
        echo "</div>";
    }
}