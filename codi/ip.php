<html>
<head>
	<title>Càlcul de ip</title>
</head>
	<body>
		<?php
            require_once(__DIR__ . 'vendor/autoload.php');
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
		
			$network = $sub->getNetworkPortion();
			echo "Xarxa: $network<br>";
			$broadcastAddress = $sub->getBroadcastAddress();
			echo "Adreça de broadcast de subxarxa: $broadcastAddress<br>";
			$addressableHostRange = $sub->getAddressableHostRange();
			echo "Marge de adreçes: $addressableHostRange[0] , $addressableHostRange[1]<br>";
			
			$numberHosts = $sub->getNumberAddressableHosts();
			echo "Nombre de ips que pot donar: $numberHosts<br>";

			
			
			
			
			
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>	
</html>
