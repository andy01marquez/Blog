
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Stylos_blog.css"/>
    <style>
        body { background: linear-gradient(to bottom, #ece4d9 0%,#e9dfd1 100%); }
    </style>
</head>
<body>
<div class="titulo_align">
        <h2 class="titulo">Blog</h2> 
    </header>
    </div>

    <div class="titulo2_align">
        <h4 class="titulo2">Añade tu nota</h4> 
    </header>
    </div>

    <form>
        <label class="titulos_formulario" for="Titulo">Título</label><br>
        <input type="text" id="Titulo" name="Titulo"><br><br>
        <label class="titulos_formulario" for="Imagen">Imagen</label> <br>
        <input type="text" id="Imagen" name="Imagen"> <br><br>
        <label class="titulos_formulario" for="Descripcion">Descripción</label> <br>
        <input type="text" id="Descripcion" name="Descripcion"> <br><br>
        <label class="titulos_formulario" for="Nombre">Nombre del autor</label> <br>
        <input type="text" id="Nombre" name="Nombre"> <br><br>
    
        <div>
            <input class="btn2_redondo" type="submit" name="ValidaForm" value="Enviar Datos"> 
        </div>

    </form>
</body>
</html>
