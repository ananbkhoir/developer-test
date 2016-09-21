<?php
	$kota = @$_POST['city'];

	$appId = "064571700a3309ec183835c8db9ec1d9";
	$cariCuaca = "http://api.openweathermap.org/data/2.5/weather?q=" . $kota . "&mode=json&units=metric&appid=" . $appId;
	$ambilCuaca = file_get_contents($cariCuaca);
	$dataCuaca = json_decode($ambilCuaca, true);

	$img = "http://openweathermap.org/img/w/";

	foreach ($dataCuaca["weather"] as $c) {
		$cuaca = $c["main"];
	}
	
	echo "The weather of " . $kota .  " at " . date('d M Y') . " is " . $cuaca;
?>