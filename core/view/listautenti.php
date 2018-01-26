
<html>
<head>

</head>
<body>


	<?php

	echo "ciao";

	if (count($utenti)>0) {
		
		for($i=0; $i < count($utenti); $i++) {
			echo $utenti[$i]->getId();
			echo $utenti[$i]->getEmail();
			echo $utenti[$i]->getCitta();

		}
	}

	?>





</body>
</html>