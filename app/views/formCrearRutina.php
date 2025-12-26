<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/CSS/styles.css">
    <title>Rutinas</title>
</head>
<body>
    <?php if(isset($_POST['crearRutina'])){
    ?>

        <form action="/app/controllers/crearRutina.php" method="post">

            Nombre <input type="text" name="nombre"><br><br>
            Descripción <input type="text" name="descripcion" id=""><br><br>
            <button type="submit" name="crear">Crear</button>
        </form>

    <?php } 
    ?>
</body>
</html>