<!DOCTYPE html>
<html>
<HEAD>
      <meta charset="UTF-16">
      <meta name="description" content="Aviación">
      <meta name="author" content="Javier Masó">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="STYLESHEET" href="estilos.css">
            <title> Contacta con nosotros </title>
            <link rel="shortcut icon" href="images\pestana.ico" />
            <a title="a320" href="index.html"><img src="images/logoMGA1.3.png" alt="Logo página" height=125” width=250”></a>
</HEAD>

<body>
  <body>
       <div class="centrado">
              
        <a href="index.html"><i><img class="bar" src="images/home.png"></i></a> 
        
        <div class="dropdown">
      <button class="btn blue" class="dropbtn" class="bar">El A320</button>
        <div class="dropdown-content">
        <a href="histoairbus.html">Historia A320N</a>
        <a href="caracteristicas.html">Características</a>
        <a href="neo.html"> El motor</a>
      </div>
      </div>

      <div class="dropdown">
      <button class="btn blue botblue" class="dropbtn">La Cabina</button>
      <div class="dropdown-content">
        <a href="cabina.html">El cockpit</a>
        <a href="pasajeros.html">Cabina de pasajeros</a>
      </div>
      </div>
      
      <div class="dropdown">
      <button class="btn blue botblue" class="dropbtn">Las mejores imágenes</button>
      <div class="dropdown-content">
      <a href="lasfotos.html">Imágenes</a>
      <a href="descargas.html">Descargas</a>
      <a href="document.html">Documentación A320</a>
        </div>
        </div>
        <button class="btn botred botblue"><a href="contacta.php">Contacta con nosotros</a></button>
      </div>
  <DIV class="container">
  <form method="post">
  
 
    <p><label for="Nombre">Nombre:</label>
       <input type="text" id="name" name="name" required autofocus>
    </p>
  
<p>
    <label for="Mail">Correo electrónico:</label>
    <input type="email" name="ecorreo" required>
</p>  
<p>
  ¿Qué quieres decirnos?<br>
   <textarea name="coment" rows="10" cols="40" placeholder="Escribe aquí tus comentarios"></textarea>
</p>
<p>
<span class="form-chkbox">
	 <input type="checkbox" name="chkbox" value="1" required> He leído y acepto la <a class="cont" href="privacidad.html" target="_blank">política de privacidad</a>
</span>
</p>
<input type="submit" name="enviar" value="Enviar">
</form>
</DIV>
<?php
include("correo.php");
?>
<footer>
<div class="footer">
  <ul>
    <small><a href="legal.html">Aviso legal</a></li></small>
    <small><a href="privacidad.html">Privacidad</a></li></small>
    <small><a href="contacta.php">Contactar</a></li></small>
  </ul>
</footer> 
</div>
</body>
</html>