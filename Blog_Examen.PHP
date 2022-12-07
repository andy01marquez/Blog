<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="CSS/Stylos_blog.css"/>
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
    .fecha{
    font: 8pt/10pt arial, serif;
    color: rgb(0, 0, 0);
    text-align: left;
    font-weight: bold;
    }
    .info{
    font: 10pt/12pt arial, serif;
    color: rgb(0, 0, 0);
    text-align: left;
    }
    </style>

</head>
<body>
    <div class="titulo_align">
        <h2 class="titulo">Blog</h2> 
    </header>
    </div>
    
    <div class="btn_align">
    <a href="http://localhost/PHP/Datos.PHP"><input class="btn_redondo" type="button" value="+"></a>
    </div>
   
    <h1 class="titulo2 titulo2_align">
        <?php
        if (isset($_POST['ValidaForm'])){
            $Titulo=$_POST['Titulo'];
            $Imagen=$_POST['Imagen'];
            $Descripcion=$_POST['Descripcion'];
            $Nombre=$_POST['Nombre'];
            
            setcookie("Titulo", $Titulo,time()+(10*60));
            echo $_COOKIE['Titulo'];
        }
        ?>
    </h1>

    <p class="fecha">
        <?php
         if (isset($_POST['ValidaForm'])){
            $Fecha= date('d.m.Y H:i:s');
            setcookie("Fecha", $Fecha,time()+(10*60));
            echo $_COOKIE['Fecha'];
         }
        ?>
    </p>

    <p>
    <?php
        if (isset($_POST['ValidaForm'])){
            $Titulo=$_POST['Titulo'];
            $Imagen=$_POST['Imagen'];
            $Descripcion=$_POST['Descripcion'];
            $Nombre=$_POST['Nombre'];
            $Imprimir=$_COOKIE['Imagen'];
            setcookie("Imagen", $Imagen,time()+(10*60));
            echo "<img src = '$Imprimir'>";
        }
    ?>
    </p>

    <p class="info">
    <?php
    if (isset($_POST['ValidaForm'])){
        $Titulo=$_POST['Titulo'];
        $Imagen=$_POST['Imagen'];
        $Descripcion=$_POST['Descripcion'];
        $Nombre=$_POST['Nombre'];
        
        setcookie("Descripcion", $Descripcion,time()+(10*60));
        echo $_COOKIE['Descripcion'];
        }
    
    ?>

    <p class="fecha">
        <?php
        if (isset($_POST['ValidaForm'])){
        $Titulo=$_POST['Titulo'];
        $Imagen=$_POST['Imagen'];
        $Descripcion=$_POST['Descripcion'];
        $Nombre=$_POST['Nombre'];
        
        setcookie("Nombre", $Nombre,time()+(60*60));
        echo "Elaborado por " .$_COOKIE['Nombre'];
        }
    
        ?>
    </p>

    <p class="titulo2 titulo2_align">
    <?php
        if (isset($_POST['ValidaForm'])){
            if (isset($_COOKIE['Titulo'])){
                $Titulo_1=$_POST['Titulo'];
                echo $Titulo_1;
            }
    }
    
    ?>
    </p>

    <p class="fecha">
        <?php
         if (isset($_POST['ValidaForm'])){
            if (isset($_COOKIE['Titulo'])){
            echo date ("d.m.Y H:i:s");
           
            }
         }
        ?>

    </p>

    <p>
    <?php
        if (isset($_POST['ValidaForm'])){
            if (isset($_COOKIE['Titulo'])){
            $Titulo=$_POST['Titulo'];
            //$Imagen=$_POST['Imagen'];
            $Descripcion=$_POST['Descripcion'];
            $Nombre=$_POST['Nombre'];
            $Imprimir=$_POST['Imagen'];
            
            echo "<img src = '$Imprimir'>";
            }
        }
    ?>
    </p>

    <p class="info">
    <?php
    if (isset($_POST['ValidaForm'])){
        if (isset($_COOKIE['Titulo'])){
        $Titulo=$_POST['Titulo'];
        $Imagen=$_POST['Imagen'];
        $Descripcion=$_POST['Descripcion'];
        $Nombre=$_POST['Nombre'];
       
        $Descripcion_1=$_POST['Descripcion'];
        echo $Descripcion_1;
        }
        }
    
    ?>

    <p class="fecha">
        <?php
        if (isset($_POST['ValidaForm'])){
        if (isset($_COOKIE['Titulo'])){
        $Titulo=$_POST['Titulo'];
        $Imagen=$_POST['Imagen'];
        $Descripcion=$_POST['Descripcion'];
        $Nombre=$_POST['Nombre'];
        
        $Nombre_1=$_POST['Nombre'];
        echo $Nombre;
        }
        }

       
        ?>
    </p>


    <br><br>

    <footer class="estilo_pie">
        <p>
            Derechos reservados para el blog.
        </p>
        <pr>
            
        </pr>
        <p>
            CopyRight.
        </p>
    </footer>
</body>
</html>