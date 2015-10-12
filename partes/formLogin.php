<?php     
  require_once("clases\Personas.php");
  session_start();
  if(!isset($_SESSION['registrado'])){
?>
  <div class="container">
    <div class="page-header">
      <center> <h1>Iniciar/Cerrar Sesión</h1> </center>     
    </div>
    <div class="CajaInicio animated bounceInRight">
      <h1 id="titulo">LOGIN</h1>

      <form id="FormIngreso" onsubmit="ValidarLogin();return false" enctype="multipart/form-data" >
        <input type="email" name="email" id="email" placeholder="Ingrese E-Mail" /><span id="lblEmail" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
        <div class="checkbox">
          <label>
            <input type="checkbox" id="recordarme" checked> Recordame
          </label>          
        </div>       
        <input type="submit" class="btn btn-info " name="guardar" onclick="return Validar()" class="glyphicon glyphicon-save"/>        
      </form>
    </div>
</div>
<?php }else{ ?>
  <div class="container">
    <div class="page-header">
      <center> <h1>Iniciar/Cerrar Sesión</h1> </center>     
    </div>
    <div class="CajaInicio animated bounceInRight">
      <h1 id="titulo">CERRAR SESIÓN</h1>

      <form id="FormIngreso" onsubmit="Mostrar('Desloguearse');return false" enctype="multipart/form-data" >
        <input type="submit" class="btn btn-info " name="desloguear" value="Desloguearse" class="glyphicon glyphicon-save"/>        
      </form>
    </div>
</div>
<?php } ?>