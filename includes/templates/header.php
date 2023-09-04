<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
  <header class="header <?php echo $inicio ? 'inicio': '' ?>">
    <nav class="header-mobile">
    <div class="logo">
        
        <a href="index.php"><h1 class="logoTitulo">BIENES<span class="logoTituloSpan">RAICES</span></h1> </a>

        <img class="hamburguesa" id="hamburguesa" src="/src/img/barras.svg" alt="icono_menu">
   
    </div>
    


    <div class="navegacion nav-mob" id="navegacion-header">
        <ul>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="anuncios.php">Avisos</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
      

    </nav>
    <div class="mobile-menu">
    </div>

    <div class="headerTexto">
        <?php 
        echo $inicio ?'<h2>Casas y Deptos de lujo</h2> <h3>Exclusivos</h3>'
        : ""; 

        ?>
    
   
    </div>
  </header>