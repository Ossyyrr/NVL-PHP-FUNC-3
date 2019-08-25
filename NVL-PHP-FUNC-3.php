<!DOCTYPE html>
<html>	
<head>
	<meta charset="utf-8">
 	<title> Prework </title>
<style>

</style> 
</head>
	<body>


<?php


function cuentaLetras($palabra){
$arr= str_split($palabra);

$a=FALSE;
$e=FALSE;
$i=FALSE;
$o=FALSE;
$u=FALSE;

foreach($arr as $k => $v){
		switch ($v){
			case "a":
				$a=true;
				break;
			case "e":
				$e=true;
				break;
			case "i":
				$i=true;
				break;
			case "o":
				$o=true;
				break;
			case "u":
				$u=true;
				break;
		}
}
if ($a==TRUE && $e==TRUE && $i==TRUE && $o==TRUE && $u==TRUE){
	echo "LA PALABRA CONTIENE LAS 5 VOCALES <br>";
}
else{
	echo "NO CONTIENE TODAS LAS VOCALES <br>";
}

}
cuentaLetras("Murcielago");
cuentaLetras("Pedo");
cuentaLetras("Esternocleidomastoideo");
cuentaLetras("Holita How are you");

?>



	</body>	    
</html>