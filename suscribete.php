<?php
	include("cabecerahtml.php");
?>
<?php
	include("cabecera.php");
?>


<div class="suscribeteP"> <!--PADRE-->
    <div class="suscribeteH">   <!--hijo de SLIDER-->
           <article>
               <p align="center">
                   Si quieres ver mas video turoriales de nuestros cursos 
                   <h2 align="center">SUSCRIBETE ...!!! </h2> 
               </p>
           </article>
            <form>
                
                    <label for="nombre">NOMBRE: </label>
                    <input autofocus type="text" name="" id="nombre" placeholder="NOMBRE" required=""> 

                    <label for="nombre">APELLIDO: </label>
                    <input type="text" name="" id="apellido" placeholder="APELLIDO"> 

                    <label for="email">EMAIL: </label>
                    <input type="text" name="" id="email" placeholder="EMAIL"> 

                    <label for="nombre">TELEFONO: </label>
                    <input type="text" name="" id="telefono" placeholder="TELEFONO" required=""> 

                        <select name="cursos" class="combobox" required>
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


                    <input type="submit" value="SUSCRIBIRTE" class="boton"> 





            </form>



    </div>
</div>



<?php
	include("pie.php");
?>