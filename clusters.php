<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<style type="text/css">
	
#map{
  margin-top: 70px;
  height: 650px;
  width: 100%
}

</style>

<div id="map"></div>


    <!-- ======= Facts Section ======= -->
    <section id="facts">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Cluster Geofencing</h3>
        </div>
        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span style="font-size: 30px;" id="distance"></span>
            <p>Distance from the containment zone.</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span style="font-size: 30px;" id="message"></span>
            <p>Status</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->


<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChc93JKTU0BEq4WiZ7XIDS8oy5JWEM9UM&callback=initMap">
</script>


<script type="text/javascript">
  function initMap() {

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 5,
    center: {lat: 20.5937, lng: 78.9629}
  });

  // Create an array of alphabetical characters used to label the markers.
  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

  var markers = locations.map(function(location, i) {
    return new google.maps.Marker({
      position: location,
      label: labels[i % labels.length]
    });
  });

  // Add a marker clusterer to manage the markers.
  var markerCluster = new MarkerClusterer(map, markers,
      {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}
var locations = [
  {lat: 11.822600, lng: 93.037110},
  {lat: 17.393480, lng: 78.559647},
  {lat: 17.344800, lng: 78.548670},
  {lat: 17.366010, lng: 78.735940},
  {lat: 17.342310, lng: 78.504180},
  {lat: 17.328120, lng: 78.479870},
  {lat: 17.361259, lng: 78.473450},
  {lat: 17.333820, lng: 78.466740},
  {lat: 19.004050, lng: 72.843300},
  {lat:16.314209,lng:80.435028},
  {lat:13.2172,lng:79.1003},
  {lat:15.8281,lng:78.0373},
  {lat:14.2581,lng:79.9193},
  {lat:16.515099,lng:80.632095},
  {lat:26.1368,lng:91.7379},
  {lat:26.1411,lng:91.7621},
  {lat:26.1417,lng:91.7454},
  {lat:26.1176,lng:91.7843},
  {lat:22.8578,lng:88.268},
  {lat:25.484,lng:85.0233},
  {lat:25.0686,lng:84.0167},
  {lat:25.5647,lng:83.9777},
  {lat:24.7914,lng:85.0002},
  {lat:25.3708,lng:86.4734},
  {lat:20.7929,lng:81.0682},
  {lat:25.2138,lng:75.8648},
  {lat:21.9655,lng:82.0543},
  {lat:22.0685,lng:81.6857},
  {lat:20.5988,lng:80.742},
  {lat:15.5583,lng:74.0124},
  {lat:15.3907,lng:73.8151},
  {lat:15.5959,lng:74.594},
  {lat:22.3072,lng:73.1812},
  {lat:22.3039,lng:70.8022},
  {lat:21.7645,lng:72.1519},
  {lat:23.85,lng:72.121},
  {lat:21.1702,lng:72.8311},
  {lat:28.9931,lng:77.0151},
  {lat:28.4089,lng:77.3178},
  {lat:28.4595,lng:77.0266},
  {lat:28.1473,lng:77.326},
  {lat:28.1024,lng:76.9931},
  {lat:32.7573,lng:76.1784},
  {lat:31.4685,lng:76.2708},
  {lat:31.6798,lng:76.5026},
  {lat:31.0498,lng:76.9182},
  {lat:30.5628,lng:77.4702},
  {lat:34.5052,lng:74.6869},
  {lat:33.3049,lng:75.2012},
  {lat:23.3441,lng:85.3096},
  {lat:24.1549,lng:83.7996},
  {lat:17.3204,lng:76.8397},
  {lat:12.2958,lng:76.6394},
  {lat:12.9646,lng:77.5496},
  {lat:12.9896,lng:77.7127},
  {lat:12.9554,lng:77.5548},
  {lat:11.8745,lng:75.3704},
  {lat:9.9816,lng:76.2999},
  {lat:12.4996,lng:74.9869},
  {lat:9.4981,lng:76.3388},
  {lat:8.8932,lng:76.6141},
  {lat:23.1765,lng:75.7885},
  {lat:23.1815,lng:79.9864},
  {lat:21.3145,lng:76.2108},
  {lat:23.2599,lng:77.4126},
  {lat:24.0734,lng:75.0679},
  {lat:18.9543,lng:72.8354},
  {lat:18.9562,lng:72.8296},
  {lat:18.9548,lng:72.7985},
  {lat:18.9641,lng:72.8305},
  {lat:19.038,lng:72.8538},
  {lat:25.5718,lng:91.9234},
  {lat:22.8671,lng:92.7655},
  {lat:26.1604,lng:91.7747},
  {lat:25.6751,lng:94.1084},
  {lat:20.2804,lng:85.8499},
  {lat:21.0574,lng:86.4963},
  {lat:18.8606,lng:82.551},
  {lat:20.1301,lng:85.4788},
  {lat:21.4934,lng:86.9135},
  {lat:22.124,lng:84.0432},
  {lat:31.634,lng:74.8723},
  {lat:30.3398,lng:76.3869},
  {lat:31.326,lng:75.5762},
  {lat:30.901,lng:75.8573},
  {lat:26.4499,lng:74.6399},
  {lat:27.553,lng:76.6346},
  {lat:23.5461,lng:74.435},
  {lat:25.7521,lng:71.3967},
  {lat:25.4326,lng:75.6483},
  {lat:28.2925,lng:74.9707},
  {lat:26.8991,lng:76.3324},
  {lat:27.2036,lng:88.7019},
  {lat:10.7672,lng:79.8449},
  {lat:12.495,lng:78.5678},
  {lat:13.1231,lng:79.912},
  {lat:12.9487,lng:79.319},
  {lat:9.8433,lng:78.4809},
  {lat:11.9401,lng:79.4861},
  {lat:10.787,lng:79.1378},
  {lat:17.4106,lng:78.4652},
  {lat:17.4399,lng:78.4983},
  {lat:17.4503,lng:78.5322},
  {lat:17.4875,lng:78.3953},
  {lat:17.322,lng:78.4023},
  {lat:17.4984,lng:78.4637},
  {lat:23.8467,lng:91.9099},
  {lat:23.6148,lng:91.3276},
  {lat:23.5167,lng:91.6372},
  {lat:24.0797,lng:92.263},
  {lat:23.8997,lng:91.4048},
  {lat:24.0672,lng:91.6057},
  {lat:28.4744,lng:77.504},
  {lat:28.5355,lng:77.391},
  {lat:27.1767,lng:78.0081},
  {lat:26.4148,lng:80.2321},
  {lat:27.1592,lng:78.3957},
  {lat:28.9845,lng:77.7064},
  {lat:25.3176,lng:82.9739},
  {lat:29.9457,lng:78.1642},
  {lat:30.3165,lng:78.0322},
  {lat:28.961,lng:79.5154},
  {lat:30.3739,lng:78.4325},
  {lat:30.7268,lng:78.4354},
  {lat:22.5252,lng:88.3309},
  {lat:22.53,lng:88.343},
  {lat:22.5945,lng:88.3835},
  {lat:22.4946,lng:88.408},
  {lat:22.5195,lng:88.3828},
  {lat:11.9649,lng:79.8255},
  {lat:11.929,lng:79.7999},
  {lat:11.9451,lng:79.8052},
  {lat:23.7634,lng:85.8204},
  {lat:28.6123,lng:76.9686},
  {lat:28.609,lng:76.9855},
  {lat:28.6371,lng:77.0845},
  {lat:28.6518,lng:77.1645},
  {lat:28.6894,lng:77.2919},
  {lat:28.6643,lng:77.2167},
  {lat:33.7997,lng:77.7579},
  {lat:22.99473,lng:72.57004},
  {lat:22.47921,lng:88.39341},
  {lat:22.29173,lng:70.76214},
  {lat:28.52942,lng:77.21381},
  {lat:28.61906,lng:77.27976},
  {lat:13.00996,lng:77.51601},
  {lat:12.9932,lng:77.70158},
  {lat:25.24374,lng:84.663002},
  {lat:24.885,lng:86.924301},
  {lat:18.95458,lng:72.83682},
  {lat:19.17128,lng:72.94716},
  {lat:26.0227,lng:89.9784},
  {lat:26.2528,lng:92.34259},
  {lat:12.97627,lng:80.258},
  {lat:13.03472,lng:80.18089},
  {lat:22.47841,lng:88.29806},
  {lat:22.59234,lng:88.32809},
  {lat:15.46999,lng:78.47107},
  {lat:15.88536,lng:78.58296},
  {lat:21.99724,lng:82.26671},
  {lat:22.33531,lng:82.71458},
  {lat:30.73335,lng:76.77904},
  {lat:30.71923,lng:76.81524},
  {lat:15.48428,lng:73.82301},
  {lat:15.39214,lng:73.81202},
  {lat:30.91011,lng:77.09669},
  {lat:28.57709,lng:77.12241},
  {lat:32.70533,lng:74.88001},
  {lat:34.2332,lng:74.64},
  {lat:23.35708,lng:85.31953},
  {lat:9.59175,lng:76.53191},
  {lat:11.86078,lng:75.414},
  {lat:21.31173,lng:76.22618},
  {lat:21.8228,lng:76.35229},
  {lat:24.802151,lng:93.938622},
  {lat:20.29248,lng:82.23669},
  {lat:26.10759,lng:91.82195},
  {lat:25.4849,lng:92.28211},
  {lat:22.91189,lng:92.75539},
  {lat:23.92853,lng:92.49048},
  {lat:25.88247,lng:93.77437},
  {lat:25.67492,lng:94.11052},
  {lat:20.51309,lng:84.42992},
  {lat:20.51309,lng:84.42992},
  {lat:31.63269,lng:74.86721},
  {lat:31.326059,lng:75.575623},
  {lat:26.58432,lng:73.85013},
  {lat:27.56109,lng:76.62147},
  {lat:27.30515,lng:88.36463},
  {lat:27.57003,lng:88.4773},
  {lat:23.34897,lng:91.32939},
  {lat:23.74509,lng:91.74274},
  {lat:27.18097,lng:78.01054},
  {lat:27.20987,lng:78.00818},
  {lat:13.03592,lng:80.20775},
  {lat:29.38526,lng:79.46836},
  {lat:12.9414,lng:92.82055},
  {lat:12.9414,lng:92.82055},
  {lat:11.93451,lng:79.8327},
  {lat:22.99473,lng:72.57004},
  {lat:22.47921,lng:88.39341},
  {lat:22.29173,lng:70.76214},
  {lat:28.52942,lng:77.21381},
  {lat:28.61906,lng:77.27976},
  {lat:13.00996,lng:77.51601},
  {lat:12.9932,lng:77.70158},
  {lat:25.24374,lng:84.663002},
  {lat:24.885,lng:86.924301},
  {lat:18.95458,lng:72.83682},
  {lat:19.17128,lng:72.94716},
  {lat:26.0227,lng:89.9784},
  {lat:26.2528,lng:92.34259},
  {lat:12.97627,lng:80.258},
  {lat:13.03472,lng:80.18089},
  {lat:22.47841,lng:88.29806},
  {lat:22.59234,lng:88.32809},
  {lat:15.46999,lng:78.47107},
  {lat:15.88536,lng:78.58296},
  {lat:21.99724,lng:82.26671},
  {lat:22.33531,lng:82.71458},
  {lat:30.73335,lng:76.77904},
  {lat:30.71923,lng:76.81524},
  {lat:15.48428,lng:73.82301},
  {lat:15.39214,lng:73.81202},
  {lat:30.91011,lng:77.09669},
  {lat:28.57709,lng:77.12241},
  {lat:32.70533,lng:74.88001},
  {lat:34.2332,lng:74.64},
  {lat:23.35708,lng:85.31953},
  {lat:9.59175,lng:76.53191},
  {lat:11.86078,lng:75.414},
  {lat:21.31173,lng:76.22618},
  {lat:21.8228,lng:76.35229},
  {lat:24.802151,lng:93.938622},
  {lat:20.29248,lng:82.23669},
  {lat:26.10759,lng:91.82195},
  {lat:25.4849,lng:92.28211},
  {lat:22.91189,lng:92.75539},
  {lat:23.92853,lng:92.49048},
  {lat:25.88247,lng:93.77437},
  {lat:25.67492,lng:94.11052},
  {lat:20.51309,lng:84.42992},
  {lat:20.51309,lng:84.42992},
  {lat:31.63269,lng:74.86721},
  {lat:31.326059,lng:75.575623},
  {lat:26.58432,lng:73.85013},
  {lat:27.56109,lng:76.62147},
  {lat:27.30515,lng:88.36463},
  {lat:27.57003,lng:88.4773},
  {lat:23.34897,lng:91.32939},
  {lat:23.74509,lng:91.74274},
  {lat:27.18097,lng:78.01054},
  {lat:27.20987,lng:78.00818},
  {lat:13.03592,lng:80.20775},
  {lat:29.38526,lng:79.46836},
  {lat:12.9414,lng:92.82055},
  {lat:12.9414,lng:92.82055},
  {lat:11.93451,lng:79.8327}
]
</script>


 <script type="text/javascript" src="js/fencing1.js"></script>

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>





