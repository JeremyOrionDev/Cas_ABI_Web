<?php function MapsDisplay() {?>
<script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat:43.675819,lng: 	7.289429},
      zoom: 11,
      mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain',
                'styled_map']
      }
    });
    var mark = new google.maps.Marker({
      position:{lat:43.728311,lng: 7.284914},
      map:map,
      label:"Entreprise ABI",
      title:"Afpa",
    });
}
</script>

<?php
}
?>
