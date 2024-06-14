<head>
    <title><?php echo"registrarse"; ?></title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MVLS4GJG3K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MVLS4GJG3K');
</script>
<div class="row">
<h1>Registrarse</h1>
<form action="guardar.php"><br>
    <input type="number" name="documento" placeholder="Documento"><br>
    <input type="text" name="nombre" placeholder="Nombre"><br>
    <input type="text" name="apellido" placeholder="Apellido"><br>
    <input type="text" name="correo" placeholder="Correo electronico"><br>
    <input type="password" name="contraseña" placeholder="Contraseña"><br>
    <input type="date" name="fecha" placeholder="Fecha de nacimiento"><br>
    <input type="submit">
</form>


