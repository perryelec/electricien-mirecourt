<?php
	echo "AUTO DEPLOY";
	$output = shell_exec('./deploy.sh');
	echo "<pre>$output</pre>";
 ?>
