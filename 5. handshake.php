<?php
function count_handshake($t){
	$handshake=0;
	for($i=0;$i<$t;$i++){
		$handshake+=$i;
	}
	echo $handshake;
}
count_handshake(6);
?>