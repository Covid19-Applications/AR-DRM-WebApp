<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>



<style type="text/css">
        

      #map{
        margin-top: 70px;
        height: 650px;
        width: 100%
      }


#mapsbtn {

  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  margin-bottom: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #006600;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#mapsbtn:hover {background-color: #3e8e41}

#mapsbtn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#mapsbtn:hover a{

   color: #21c87a;    
}


</style>


<body>

 
                        <div id="map"></div>
                        <br>
                        
                        <div class="col-xs-6" >
                                <div class="card">
                                    <div class="card-header">
                                        <h3 id="text">Pharmacy @24 HOUR Service </h3>
                                    </div>
                                    <div class="card-body"  >
                                        <div class="table-responsive">
                                          <?php
                                                  $query = "SELECT * FROM medstore WHERE state = 'arunachal pradesh'";
                                                  $query_run = mysqli_query($connection, $query);
                                              ?>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-warning">Pharmacy Name</th>
                                                        <th class="bg-info">Address </th>
                                                       
                                                        <th class="bg-danger">Phone No.</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                  <?php
                                                  if(mysqli_num_rows($query_run) > 0)        
                                                  {
                                                      while($row = mysqli_fetch_assoc($query_run))
                                                      {
                                                         ?>
                                                    <tr>  
                                                      <td><?php  echo $row['name']; ?></td>
                                                      <td><?php  echo $row['address']; ?></td>
                                                      <td><?php  echo $row['phone']; ?></td>

                                                           </tr>

                                                      <?php
                                                        } 
                                                    }
                                                    ?>

                                            </table>
                                            </div>
                                    </div>
                                </div>
                            </div>




                          <div class="col-xs-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 >Pharmacies @3km Radius </h3>
                                    </div>
                                    <div class="card-body"  >
                                        <div class="table-responsive">
                                                <h3 id="loc">Enable location to view pharmacies near 3 Km </h3>


                                                <table class="table">
                                                    <th  class="bg-secondary">S.No</th>
                                                        <th class="bg-warning">Pharmacy Name</th>
                                                        <th class="bg-info">Address </th>
                                                <tbody id="box"></tbody>
                                            </table>
                                             
                                                <button  style="float: right; margin-right: 15px;" id="mapsbtn" >More Pharmacies</button>
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
<br><br><br>





<!-- Replace the value of the key parameter with your own API key. -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJtzDjYH9_kxP_5kBgOMkxGc6OVrTNDho&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">

var map,infoWindow;

function initMap() {
  // Create the map.
  var pyrmont ={lat: 22.3039, lng: 70.8022};
  map = new google.maps.Map(document.getElementById('map'), {
    center: pyrmont,
    zoom: 19
  });


  infoWindow = new google.maps.InfoWindow;

 if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
 
      infoWindow.setPosition(pos);
      map.setCenter(pos);

        var center = new google.maps.LatLng(pos.lat,pos.lng);
       
    


  // Create the places service.
  var service = new google.maps.places.PlacesService(map);
  var getNextPage = null;
  var moreButton = document.getElementById('mapsbtn');
  moreButton.onclick = function() {
    moreButton.disabled = true;
    if (getNextPage) getNextPage();
  };

  // Perform a nearby search.
  service.nearbySearch(
      {location: center,
      radius: 3000, type: ['pharmacy']},
      function(results, status, pagination) {
        if (status !== 'OK') return;

        createMarkers(results);
        moreButton.disabled = !pagination.hasNextPage;
        getNextPage = pagination.hasNextPage && function() {
          pagination.nextPage();
        };
      })

 }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}




function createMarkers(places) {
  var bounds = new google.maps.LatLngBounds();
  var placesList = document.getElementById('places');

  for (var i = 0, place; place = places[i]; i++) {
    var image = {
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(25, 25)
    };

    var marker = new google.maps.Marker({
      map: map,
      icon: image,
      title: place.name,
      position: place.geometry.location
    });


    bounds.extend(place.geometry.location);
  }
  map.fitBounds(bounds);

  var html = "<table border='1|1'>";
  var sno = 1;
for (var i = 0; i < 20; i++) {
    html+="<tr>";
    html+="<td>"+ sno + "</td>";
    html+="<td>"+ places[i].name + "</td>";
    html+="<td>"+ places[i].vicinity +"</td>";  

    html+="</tr>";
    sno++;

}
html+="</table>";
document.getElementById("box").innerHTML = html;
document.getElementById("loc").innerHTML = ' ';


}


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);


}


function med() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("box");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>








