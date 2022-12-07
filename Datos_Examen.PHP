<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body { background: linear-gradient(to bottom, #ece4d9 0%,#e9dfd1 100%); }
    .titulo{
    font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;;
    text-transform: uppercase;
    font-size: 92px;
    color: #f1ebe5;
    text-shadow: 0 8px 9px #c4b59d, 0px -2px 1px #fff;
    font-weight: bold;
    letter-spacing: -4px;
    text-align: center;
    border-radius: 20px;
    }
    .titulo_align{
    display: flex;
    justify-content: center;
    background: linear-gradient(to bottom, #ece4d9 0%,#e9dfd1 100%);
    }
    .titulo2{
    font-family: "Arial Rounded MT Bold", "Helvetica Rounded", Arial, sans-serif;;
    text-transform: uppercase;
    font-size: 25px;
    color: #ce843b;
    text-shadow: 0 8px 9px #c6ae87, 0px -2px 1px rgb(249, 226, 199);
    font-weight: bold;
    letter-spacing: -4px;
    text-align: center;
    border-radius: 20px;
    }
    .titulo2_align{
    display: flex;
    justify-content: left;
    }
    .btn_redondo{
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border-color: rgb(255, 174, 0);
    color: rgb(0, 0, 0);
    text-align: center;
    font: 16pt/18pt arial, serif;
    font-weight: bold;
    }
    .btn2_redondo{
    display: block;
    width: 100px;
    height: 30px;
    border-radius: 10%;
    border-color: rgb(255, 174, 0);
    color: rgb(0, 0, 0);
    text-align: center;
    font: 10pt/12pt arial, serif;
    font-weight: bold;
    }
    .btn_align{
    display: flex;
    justify-content: right;
    }
    .estilo_pie{
    font: 10pt/12pt arial, serif;
    font-weight: bold;
    }
    .titulos_formulario{
    font: 10pt/12pt arial, serif;
    font-weight: bold;
    color: #de9f61;
    }
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

    <form method="post" action="Blog.PHP">
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