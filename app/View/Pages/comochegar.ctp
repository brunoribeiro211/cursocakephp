<?php

echo $this->Html->script(array('http://maps.google.com/maps/api/js?sensor=true', 'googleMaps/jquery.ui.map.full.min', 'googleMaps/map'), array('block' => 'mapGoogle'));


echo 'Como chegar';
echo '<br/>clique no icone vermelho para mais informações';
echo '<br/>(obs: Deixei assim neste inicio para não perder tempo arrumando o box de acordo com o conteudo pois no primeiro acesso ele da um scroll)';
echo '<br/><br/>';

echo $this->Html->div('googleMaps', null, array('id' => 'map_canvas'));
echo '</div>';
echo $this->Html->scriptBlock("
	var lat = -22.90497573069154; // Latitude do marcador
	var lon = -43.17716559999997; // Longitude do marcador
	var zoom = 18;
	var text = 'Tel: (xx) xxxx-xxxx<br/>outras informações:<br/>Blá, blá, blá, blá, blá, blá...';
	var kmlURL = '';
	var tag = '';
        
        createGMap('#map_canvas',lat,lon,zoom,text,kmlURL,tag);
");
?>