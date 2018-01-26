
<html>
<head>

</head>
<body>


	<?php

	echo "ciao";

	if (count($utenti)>0) {
		
		for($i=0; $i < count($utenti); $i++) {
			echo $utenti[$i]->getId();
			echo " ";
			echo $utenti[$i]->getEmail();
			echo " ";
			echo $utenti[$i]->getCitta();
			echo " ";
			echo $utenti[$i]->getPassword();
			echo " ";
			echo "<br>";
		}
	}

	?>





</body>
</html>