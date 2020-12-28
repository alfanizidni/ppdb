<footer id="myFooter">
        <div class="container col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                <div class="footer-widgets">
                         <div class="widgets-title">
                             <h2>Sekolah</h2>
                         </div>
                         <address>
                             <p>Nama Lengkap Sekolah,<br> Integer nisl dui, ABC 12000</p>
                         </address>                              
                         <div class="copyright-text"> 
                              <p>Copyright &copy; 2019 Company Name</p>
                              <p>Design: TemplateMo</p>
                           <ul class="social_icons">
                           <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                         </ul>
                         </div>
                      </div>
                </div>
                <div class="col-sm-4">
                  <div class="footer-info">
                      <div class="section-title">
                        <h2>Alamat Sekolah</h2>
                      </div>
                      <address>
                        <p>Alamat Lengkap Sekolah</p>
                        <p><a href="mailto:youremail.co">Telp./Fax.:@@@</a></p>
                      </address>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="footer-info">
                    <div class="section-title">
                      <h2>Info Kontak Utama</h2>
                    </div>
                    <address>
                      <p>+65 2244 1100, +66 1800 1100</p>
                      <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                    </address>
                  </div>
                </div>
            </div>
            <div class="center">
              <div id="map-container-google-1" class="map-container" style="height: 200px">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
        </div>
</footer>

            <!-- <iframe id="map-container" frameborder="0" style="border:0" class="map_section">
              <div id="map"></div>
            </iframe> -->
        
<!-- <footer class="footer_style_2" style="height: 200px">
  <div class="container-fuild" >
    <div class="row">
      
        <div class="map_section">
          <div id="map" ></div>
        </div>
      
      <div class="footer_blog">
        <div class="row">
        <div class="col-md-4">
                      <div class="footer-widgets">
                         <div class="widgets-title">
                             <h2>Sekolah</h2>
                         </div>
                         <address>
                             <p>Nama Lengkap Sekolah,<br> Integer nisl dui, ABC 12000</p>
                         </address>                              
                         <div class="copyright-text"> 
                              <p>Copyright &copy; 2019 Company Name</p>
                              <p>Design: TemplateMo</p>
                           <ul class="social_icons">
                           <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                         </ul>
                         </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Alamat Sekolah</h2>
                              </div>
                              <address>
                                   <p>Alamat Lengkap Sekolah</p>
                                   <p><a href="mailto:youremail.co">Telp./Fax.:@@@</a></p>
                              </address>
                         </div>
                    </div>
                    <div class="col-md-4">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Info Kontak Utama</h2>
                              </div>
                              <address>
                                   <p>+65 2244 1100, +66 1800 1100</p>
                                   <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                              </address>
                         </div>
                     </div>
                  </div>
        </div>
      </div>
    </div>
  </div>
</footer> -->
<!-- end footer -->
<!-- map js -->
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             height: '200px',
             center: {lat: 40.645037, lng: -73.880224},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->