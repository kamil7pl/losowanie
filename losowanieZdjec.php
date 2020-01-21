<?php
$sciezki_zdjec = array(
      "foto1.png", 
      "foto2.jfif",
      "foto3.jfif",
	    "foto4.jfif"
    );  
	
    $losowanie = rand(0, count($sciezki_zdjec)-1); 
	
    echo "<img src='".$sciezki_zdjec[$losowanie]."' />";
?>
