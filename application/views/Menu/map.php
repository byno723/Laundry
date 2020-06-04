<div class="main-panel">
        <div class="content-wrapper">
    
        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center bg-info">
                <p class=" text-white"> Informasi</p>
               
               
              </span>
            </div>
          </div>

          <div id="googleMap" style="width:100%;height:380px;"></div>

</div>
        <!-- content-wrapper ends -->

 <!-- Menyisipkan library Google Maps -->
 <script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    // fungsi initialize untuk mempersiapkan peta
    function initialize() {
    var propertiPeta = {
        center:new google.maps.LatLng(-8.5830695,116.3202515),
        zoom:9,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
     