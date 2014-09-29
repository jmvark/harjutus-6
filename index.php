<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>harjutus-6</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h2>Tingimuslaused</h2>
	<?php
	$a = 4;
	$b = 5;
	if ($a < $b) {
		echo "4 on väiksem kui 5";
	}
	echo "<br>";
	?>
	<?php
	$a = 4;
	$b = 5;
	if ($a > $b) {
		echo "4 on väiksem kui 5";
	}

	elseif ($a = $b) {
		echo "muutuja a on võrdne muutuja b-ga";
	}

	elseif ($a > $b) {
		echo "muutuja a on suurem muutuja b-st";
	}

	elseif ($a < $b) {
		echo "muutuja a on väiksem muutuja b-st";
	}
	echo "<br>";
	?>

	<?php
		$age = 16;
		$age_limit = 18;

		if ($age < $age_limit) {
			echo "ära kavatsegi sisse tulla, pead olema {$age_limit} aastat vana";
		}
		elseif ($age > $age_limit) {
			echo "oled piisavalt vana, et siseneda";
		}
		elseif ($age = $age_limit) {
			echo "tule sisse, oled täpselt õige vanusega";
		}
	?>

	<?php
		$a = 3;
		$b = 3;
		$c = 4;
		$d = 5;

		if (($a = $b) && ($c > $d)){	
			echo "true (ja lause)";
		}
		//kuna antud koodiplokis ei vastanud mõlemad tehted küsitule siis seda ka ei väljastatud
		echo "<br>";
	?>
	<?php
		$a = 3;
		$b = 3;
		$c = 4;
		$d = 5;

		if (($a = $b) || ($c > $d)){	
			echo "true (või lause)";
		}
		//kuna antud koodiplokis vastas vähemalt üks teha küsitule, siis see ka väljastati
		echo "<br>";
	?>
<?php
	if (!isset($nothing)) {
		echo "väljasta teksti";
	}

?>
<h3>Switch</h3>
	<?php
		$current_language = 'et';

		switch ($current_language) {
			case 'et':
				echo "Tere! Kuidas sul läheb?";
				break;
				
			case 'fi':
				echo "Hei! Miten menee?";
				break;
			case 'ru':
				echo "Здравствуйте! Как вы делаете?";
				break;
			case 'en':
			echo "Hello! How are you doing?";	
				break;
			}


	?>

</body>
</html>