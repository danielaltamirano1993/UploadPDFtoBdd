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
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from certificados where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="archivos/<?php echo $datos['nombre_archivo']; ?>" width="100%"; height="850PX"></iframe>
                
                <?php } } ?>
<strong><h1 class="mb-2" style="font-size: 150%;">&nbsp</strong></h1>
		
<!--menu blanco3-->
<div class="site-section bg-light">
	<div class="container">		
		
		<div class="row hosting">
			
			<div class="tarje col-md-12 col-lg-12 mb-12 mb-lg-12" data-aos="fade" data-aos-delay="100" style="float:center;">
				<div class="unit-2 text-center border  py-5 h-100 bg-white" >
					<a class="btn btn-primary py-2 px-4 rounded-0" align="center" style="float:center; padding: .5em; font-size: 200%;" href="index.php">Regresar</a>
				</div>
			</div>
			
		</div>
	</div>

</div>
<!--fin menu blanco3-->
		
    </body>
</html>
