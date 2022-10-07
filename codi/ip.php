<html>
<head>
	<title>Càlcul de ip</title>
</head>
	<body>
		<?php
            require_once(__DIR__ . '/vendor/autoload.php');
			#Obtenció del primer operand
			if ($_GET["camp_ip"] =="") {
				$camp_ip = "";
			}
			else{
				$camp_ip = $_GET["camp_ip"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["camp_masc"] =="") {
				$camp_masc = 0;
			}
			else{
				$camp_masc = $_GET["camp_masc"];
			}
			#
			
			$sub = new IPv4\SubnetCalculator($camp_ip, $camp_masc);
		
			$subxarxa = $sub->getSubnetMask();
			echo"La màscara de subxarxa és $subxarxa<br>";
		    echo"Rang de ips.<br>";
			foreach ($sub->getAllHostIPAddresses() as $hostAddress) {
				echo "$hostAddress<br>";
			}
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>	
</html>
