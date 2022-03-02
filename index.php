<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <style>
      /* El contenedor padre donde sera 1000px  */
    #contenedor {
      height: 1000px;
      width: 1000px;
      font-size: 13px;
    }
    header {
      display: flex;
      align-items: center;
      padding-bottom: 2%;
      padding-left: 5%;
    }
    #letrasN {
      width: 50%;
      display: flex;
      justify-content: space-around;
      font-weight: bold;
    }
    #nav1 {
      background-color: #03aefe;
      display: flex;
      justify-content: space-around;
      font-weight: bold;
      color: white;
    }
    #nav2 {
      height: 40px;
      background-color: #3d3e3e;
    }
    #btnWhite {
      width: 60%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
    }
    /* Tendremos que usar el alto total y el margin auto si no lo utilizamos el recuadro que recubre los parrafos es peque lo que el efecto sera en una mini caja */
    .efectoP {
      align-items: center;
      text-align: center;
      display: flex;
      height: 100%;
      margin: auto;
    }
    /* Cuando estamos encima de un parrafo con la propiedad :hover de css nos cambiara el color que queramos */
    .efectoP:hover {
      background-color: #048bcb;
    }
    #btnSearch {
      display: flex;
      align-items: center;
      text-align: center;
      cursor: pointer;
    }
    #contenedor2{
        display: grid;
        text-align: center;
        grid-template-rows: 1fr 1fr 1fr;
        grid-template-columns:repeat(4, 25%);
    }

    hr{
        width: 20px;
    }
    
  </style>
  <body>
    <!-- Creamos un contenedor con el vw dicho en el ejercicio -->
    <div id="contenedor">
      <header>
        <img src="imagenes/Captura.PNG" alt="" />
        <div id="letrasN">
          <p>SHOP</p>
          <p>BLOG</p>
          <p>ABOUT</p>
          <p>LOOKBOOK</p>
        </div>
      </header>
      <!-- Creamos varias cajas en funcion de como queramos colocarlo como en este ejemplo el display flex  -->
      <nav id="nav1">
        <div id="btnWhite">
          <p class="efectoP">CLOTHING</p>
          <p class="efectoP">LIFESTYLE</p>
          <p class="efectoP">PRINTS</p>
          <p class="efectoP">KIDS</p>
          <p class="efectoP">SALE</p>
          <p class="efectoP">GIFT GUIDES</p>
        </div>
        <div id="btnSearch">
          <!-- Utilizo algunos estilos dentro de la etiqueta por que es algo puntual -->
          <p
            style="
              background-color: #048bcb;
              align-items: center;
              display: flex;
              height: 100%;
            "
          >
            SEARCH
            <img src="imagenes/Capturalupa.PNG" alt="" />
          </p>
        </div>
      </nav>
      <nav id="nav2"></nav>
      <?php
  // Nos conectamos a la DB
    $conexion = new mysqli ("127.0.0.1", "root", "", "imprenta");
    $conexion->set_charset("utf8");
    // Hacemos la sentencia sql
    $sql = "select * FROM articulos";

    $instruccion = $conexion->prepare($sql);
    $instruccion->execute();
    $tabla = $instruccion->get_result();
    // Lo ejecutamos y pintamos, por fuera con un echo del div contenedor que seria nuestro contenedor para grid
    echo "<div id='contenedor2'>";
    while ($registro = $tabla->fetch_object()) {
      //hariamos un bucle con el pintando el resultado
        echo "<div id='conte1'><img src='imagenesBD/". $registro->imagen ."'><p>" . $registro->nombreArticulo ."</p><hr><p> $". $registro->precio . "</p></div>";
    }
    echo "</div>";
?>    
    </div>
  </body>
</html>
