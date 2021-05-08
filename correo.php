<?php
if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['ecorreo']) && !empty($_POST['coment'])){ 
		$name = $_POST['name'];
		$ecorreo = $_POST['ecorreo'];
		$coment = $_POST['coment'];
		$header = "From: noreply@megustalaaviacion.es" . "\r\n"; /*/r nos devuelve algo /n da un espacion en la lineaProbar con cuenta existente en caso de error*/
		$header.="Reply-To: noreply@megustalaaviacion.es" . "\r\n";
		$header.="X-Mailer: PHP/". phpversion();
		$mail = @mail("contacto@megustalaaviacion.es",$name,$ecorreo,$coment,$header);
		if ($mail){
			echo "<h3>Enviado correctamente</h3>";	
		}
	}
}
