<!DOCTYPE html>
<html>
<head>
    <title>Gestor CMS</title>
</head>
<body>
<form action="cms.php" method="get">
    Head <br>
    <input type="text" name="title" placeholder="Titulo de la pagina">
    <hr>
    <br>
    Body <br> <br>

    <input type="text" name="titulo" placeholder="Header"> <br>
    <br>

    <h1>Contenido de la pagina</h1> <br>
    

    <textarea name="contenido">
    </textarea> <br>

    Colores de los texto: <br><br>

    <input type="text" name="colortitle" placeholder="Color del Header"><br><br>

    <input type="text" name="colorcontenido" placeholder="Color del contenido"><br><br>

    <input type="submit" name="enviar" value="Crear pagina Web">

    <?php 
    
    include("cms.php");
    
    ?>


</form>
    
</body>
</html>