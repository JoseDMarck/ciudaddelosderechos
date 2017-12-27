
<div class="contenedorMensajeCorreo">
		<div class="msj">El correo se ha enviado correctamente</div>
</div>


<div class="Seccion_Contacto">

 


 <div class="contendorContacto">
 		<div class="titulo">CONTACTO</div>

 		<div class=formularioContacto>
 			

 			<form id="contacto" name="contacto" class="contacto_form" method="post" action="<?php echo get_template_directory_uri(); ?>/contactoServices/ContactoService.php">
 			
				 <div class="BloqueA">

				 	<div class="textosContacto">Nombre:</div>
					<input type="text"  name="nombre" id="nombre" size="45"/><br><br>

					<div class="textosContacto">Correo:</div>
					<input type="text"  name="correo" id="correo" size="45"/><br><br>
				 </div>


				 <div class="BloqueB">
					<div class="textosContacto">Mensaje:</div>	
       				 <textarea  name="descripcion" id="descripcion" class="Desc" maxlength="501"  rows="4" cols="50" > </textarea>
        			 <div class="countdown"></div>
				 </div>


				 <div style="clear: both;"></div>	
					
					<center>
				<input class="EnviarContacto" type="submit" name="Enviar" value="Enviar"/>
				</center>




			</form>


 		</div>

 </div><!-- contendorContacto -->

				 <div style="clear:both; height: 50px;"></div>	


</div> <!-- sección 2 -->
 


