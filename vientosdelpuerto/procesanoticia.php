<?php
define("DBHOST", "localhost");
define("DBNAME", "vientos");
define("DBUSER", "root");
define("DBPASSWORD", "");
// Verificamos que el formulario no ha sido enviado aun
$postback = (isset($_POST["enviar"])) ? true : false;
if($postback){
    // Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB
    if ((($_FILES["foto"]["type"] == "image/gif") ||
    ($_FILES["foto"]["type"] == "image/jpeg") ||
    ($_FILES["foto"]["type"] == "image/pjpeg")) &&
    ($_FILES["foto"]["size"] < 2000000)) {

    //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0).
      if ($_FILES["foto"]["error"] > 0) {
        echo $_FILES["foto"]["error"] . "<br />";
      } else {
          // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido
          if (file_exists("archivos/" . $_FILES["foto"]["name"])) {
            echo $_FILES["foto"]["name"] . " ya existe. ";
          } else {
           // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida
            move_uploaded_file($_FILES["foto"]["tmp_name"],
            "archivos/" . $_FILES["foto"]["name"]);
              $fecha  = $_POST["fecha"];
              $titulo = $_POST["titulo"];
              $texto  = $_POST["texto"];
              $url    = $_POST["url"];
              $tfoto      = "archivos/".$_FILES["foto"]["name"]."";
              $link = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME) or die(mysql_error($link));

              $sql = "INSERT INTO noticia(id_noticia, fecha, icono, titulo, texto, link)
              VALUES
              ('', '$fecha', '$tfoto', '$titulo', '$texto', '$url')";
              mysqli_query($link, $sql) or die(mysql_error($link));
              echo " Archivo Guardado, correctamente ";
              exit();

          }
      }
    } else {
        // Si el usuario intenta subir algo que no es una imagen o una imagen que pesa mas de 20 KB mostramos este mensaje
        echo "Archivo no permitido";
    }



}
?>
