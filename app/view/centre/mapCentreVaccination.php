<?php
require($root . '/app/view/fragment/fragmentHeader.html');
?>

    <body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <h3 id="emplacement">Lokasi pusat vaksinasi di peta</h3>
    <label for="centre">Pilih pusat : </label>
    <select class="form-control" id='centre' name='centre' style="width: 400px" onselect="initMap()"
            onchange="updateMap()">
        <?php
        foreach ($results as $centre) {
            printf("<option name='centre' value='%s' data-address='%s'>%s: %s: %s</option>", $centre->getId(),
                $centre->getAddress(), $centre->getId(), $centre->getLabel(), $centre->getAddress());
        }
        ?>
    </select>
    <br/>
    <div id="osm-map"></div>
</div>
<script>
    var element = document.getElementById('osm-map');

    // Mengatur tinggi elemen
    element.style = 'height:600px;';
    var map = L.map(element);


    // Membuat peta pada element

    // Menambahkan OSM
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    once = false;

    function initMap() {
        let centre = document.getElementById("centre").children;

        if (centre.length !== 0) {
            if (centre[0].selected) {
                address = centre[0].dataset.address;
                requestMap(address);
            }
        }

    }

    function updateMap() {
        let centre = document.getElementById("centre").children;

        if (centre.length !== 0) {
            for (let i = 0; i < centre.length; i++) {
                if (centre[i].selected) {
                    address = centre[i].dataset.address;
                    requestMap(address);
                }
            }

        }

    }

    function requestMap(address) {
        $.ajax({
            url: 'https://api-adresse.data.gouv.fr/search/?q=' + address,
            success: function (data) {
                // Tangkap koordinat dari GPS
                var target = L.latLng(data.features[0].geometry.coordinates[1], data.features[0].geometry.coordinates[0]);

                // Mengatur pusat peta dengan zoom x14
                map.setView(target, 14);

                // Memberikan penanda di tempat yang sama
                L.marker(target).addTo(map);
            }
        });
    }

    window.addEventListener("DOMContentLoaded", initMap);
</script>

<?php
include $root . '/app/view/fragment/fragmentFooter.html'; ?>