<?php
	include("cabecerahtml.php");
?>
<?php
	include("cabecera.php");
?>

<a class="ancla" name="suscribete"></a>
<div class="suscribeteP"> <!--PADRE-->
    <div class="suscribeteH">   <!--hijo de SLIDER-->
         <br>
          <div class="barra3"> 
				<font>SUSCRIBETE</font>
			</div>		
           <article>
               <P class="titulosuscribete">
                   Si te interesan nuestros cursos, talleres, seminarios REGISTRATE.
               </P>
           </article>
            <form>
                
                    <label for="nombre">NOMBRE: </label>
                    <input autofocus type="text" name="" id="nombre" placeholder="NOMBRE" required=""> 

                    <label for="nombre">APELLIDO: </label>
                    <input type="text" name="" id="apellido" placeholder="APELLIDO"> 

                    <label for="email">EMAIL: </label>
                    <input type="text" name="" id="email" placeholder="EMAIL"> 

                    <label for="nombre">CELULAR: </label>
                    <input type="text" name="" id="telefono" placeholder="CELULAR" required=""> 
					<label for="nombre">CARRERAS: </label>
                        <select name="carreras" class="combobox" required>
                          <option value="C01">--CARRERAS--</option>
                          <option value="C01">DISEÑO E IMPLEMENTACION DE REDES</option>
                          <option value="C02">MICRO AUTOMATIZACION Y CONTROL</option>                          
                          <option value="C03">ETHICAL HACKING</option>  
                          <option value="C03">JAVA 8</option>                        
                          <option value="C03">LINUX</option>
                          <option value="C03">ARDUINO</option>
                          <option value="C03">WEB</option>
                          <option value="C03">ANDROID</option>
                        </select>

							<br>
                    <input type="submit" value="SUSCRIBIRTE" class="boton"> 





            </form>



    </div>
</div>



<?php
	include("pie.php");
?>