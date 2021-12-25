<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Subir el Certificado en formato PDF</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Curso: </label></td>
                        <td><input type="text" name="curso"></td>
                    </tr>
                    <tr>
                        <td><label>Fecha: </label></td>
                        <td><input type="text" name="fecha"></textarea></td>
                    </tr>
					 <tr>
                        <td><label>Nombres: </label></td>
                        <td><input type="text" name="nombres"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                        <td><a href="lista.php">lista</a></td>
                    </tr>
                </table>
            </form>    


<?php
  session_start(); 
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
           
            $curso= $_POST['curso'];
			$fecha= $_POST['fecha'];
			$nombres= $_POST['nombres'];
			
            $db=new Conect_MySql();
            $sql = "INSERT INTO certificados(curso,fecha,nombres,tamanio,tipo,nombre_archivo) VALUES('$curso','$fecha','$nombres','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>
			
        </div>
    </body>
</html>
