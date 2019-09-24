<?php
echo "Hoeveel landen ga je toevoegen?\r\n";
$a = readline();
$i = 0;
$topo = array();
while ($i<$a) {
	$i++;
	$b = array();
	echo "Welk land wil je toevoegen?\r\n";
	$b['land'] = readline();
	echo "Wat is de hoofdstad van ".$b['land']."?\r\n";
	$b['stad'] = readline();
	array_push($topo, $b);
}
echo "\r\n\r\nDe volgende landen en steden zitten in de database\r\n";
foreach ($topo as $c) {
	echo $c['land'].", ".$c['stad']."\r\n";
}
?>