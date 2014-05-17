@extends('base')

@section('content')
	<div id="map"></div>

	<script>
		var map = L.map('map').setView([59.220, 39.883], 14);

		var thunderforest = L.tileLayer('http://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">Участники OpenStreetMap</a> (<a target="_blank" href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>), tiles by <a href="http://www.opencyclemap.org/" target="_blank">Andy Allan</a>',
			minZoom: 12,
			maxZoom: 18,
		});

		var opnvkarte = L.tileLayer('http://185.27.252.211/tilegen/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">Участники OpenStreetMap</a> (<a target="_blank" href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>), tiles by <a target="_blank" href="http://memomaps.de">MeMoMaps</a> (<a target="_blank" href="http://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA</a>)',
			minZoom: 12,
			maxZoom: 18,
		});

		var mapserfer = L.tileLayer('http://129.206.74.245:8001/tms_r.ashx?x={x}&y={y}&z={z}', {
			attribution: '&copy; <a href="http://osm.org/copyright">Участники OpenStreetMap</a> (<a target="_blank" href="http://opendatacommons.org/licenses/odbl/1.0/">ODbL 1.0</a>), tiles by <a href=\"http://giscience.uni-hd.de/\" target=\"_blank\">GIScience Research Group @ University of Heidelberg</a> (<a target="_blank" href="http://creativecommons.org/licenses/by-sa/2.0/">CC BY-SA</a>)',
			minZoom: 12,
			maxZoom: 18,
		});

		var openmaplt_over = L.tileLayer('http://pt.openmap.lt/{z}/{x}/{y}', {
			attribution: 'Маршруты: <a href="http://openmap.lt">OpenMap.lt</a>',
			minZoom: 12,
			maxZoom: 18,
		});

		var openptmap_over = L.tileLayer('http://openptmap.org/tiles/{z}/{x}/{y}', {
			attribution: 'Маршруты: <a href="http://openptmap.org">OpenPTMap.org</a>',
			minZoom: 12,
			maxZoom: 18,
		});

		var baseMaps = {
			'Thunderforest': thunderforest,
			'ÖPNVKarte': opnvkarte,
			'OpenMap.lt': L.layerGroup([mapserfer, openmaplt_over]),
			'OpenPTMap': L.layerGroup([mapserfer, openptmap_over]),
		};

		thunderforest.addTo(map);
		L.control.layers(baseMaps).addTo(map);

	</script>
@stop


@section('footer')

	<p class="text-muted"><a id="map-edit" href="#">Edit</a></p>

	<script>
		$('#map-edit').on('click', function(e)
		{
			e.preventDefault();
			var bounds = map.getBounds();
			$.get('http://127.0.0.1:8111/load_and_zoom' + L.Util.getParamString({
				left: bounds.getNorthWest().lng,
				right: bounds.getSouthEast().lng,
				top: bounds.getNorthWest().lat,
				bottom: bounds.getSouthEast().lat
			}));
		});

	</script>
@stop