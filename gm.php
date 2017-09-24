






<html>
<head>
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>!-->

</head>
<body>

<?php
if(!isset($_POST['submit'])){
//$add = urlencode($_POST['address']);

$add=urlencode('Punjabi Dhabha');
$city = urlencode('Vellore');
$state = urlencode('Tamil Nadu');
$country = urlencode('India');
$zip = urlencode('632014');

$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false');
//$url='http://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false';



$output= json_decode($geocode); //Store values in variable
 // print_r($output);
if($output->status == 'OK'){ // Check if address is available or not
echo "<div class=\"display_map_details\">";
echo "<br/>";
echo "Latitude : ".$lat = $output->results[0]->geometry->location->lat; //Returns Latitude
echo "<br/>";
echo "Longitude : ".$long = $output->results[0]->geometry->location->lng; // Returns Longitude
echo "<br/>";
echo "Address : ".$loc=$output->results[0]->formatted_address;
echo "</div>";

}
}
echo "

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCrMKTQT5wFA0jj5n0umCh1_6ZQDPtJpro'></script><div style='overflow:hidden;height:496px;width:953px;'><div id='gmap_canvas' style='height:496px;width:953px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmap.org/'>how to add a google map to your website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7557cda60d42c58e31e95dd2e66137829c5f01b4'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(".$lat.",".$long."),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(".$lat.",".$long.")});infowindow = new google.maps.InfoWindow({content:'<strong>".$add."</strong><br>".$loc."<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>";
?>

</body>
</html>

