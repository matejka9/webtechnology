<link href="<?= base_url()?>assets/css/style-contact-low.css" rel="stylesheet" media="only screen and (max-width: 500px)">
<link href="<?= base_url()?>assets/css/style-contact-medium.css" rel="stylesheet" media="only screen and (min-width: 501px) and (max-width: 1000px)">
<link href="<?= base_url()?>assets/css/style-contact-big.css" rel="stylesheet" media="only screen and (min-width: 1001px)">

<script type="text/javascript">

$(window).load(function(){
	var w = window.innerWidth;
    var h = window.innerHeight;
    console.log(w);
    console.log(h);
    if (w < 320){
    	$("#mapaGoogle").hide();
    }else if (w < 520){
    	$("#mapaGoogle").show();
    	$("#mapaGoogle").css('width', 300);
    } else {
    	$("#mapaGoogle").css('width', 520);
    	$("#mapaGoogle").show();
    }
});


$(window).resize(function(){
	var w = window.innerWidth;
    var h = window.innerHeight;

    if (w < 320){
    	$("#mapaGoogle").hide();
    }else if (w < 520){
    	$("#mapaGoogle").show();
    	$("#mapaGoogle").css('width', 300);
    } else {
    	$("#mapaGoogle").css('width', 520);
    	$("#mapaGoogle").show();
    }
});



$(function(){
   $(".nav").find(".active").removeClass("active");
   $("#contact").parent().addClass("active");
});
</script>


<section>
<h1>Contact</h1>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCCObpQl1lf3xSirBupKY_6tXuBrTz1r0w'></script>
<div class="contact_page">
    <div class="first content">
		<div id="contactText" >
			<h3>Restaurant Tutorial 3 2016</h3>
			<table class="w3-table w3-striped w3-bordered">
		        <tr>
		          <th>Location</th>
		          <td>Nedbalova 10</td>
		        </tr>
		        <tr>
		           <th></th>
		           <td>811 01</td>
		        </tr>
		        <tr>
		           <th></th>
		           <td>Bratislava 1</td>
		        </tr>
		        <tr>
		          <th>Call us</th>
		          <td>0902 222 333</td>
		        </tr>
		        <tr>
		          <th>E-mail us</th>
		          <td>tutorialFood@gmail.com</td>
		        </tr>
			</table>
		</div>
		<br>
		<div class= "second" id="mapaGoogle">
			<div class='style_hidden'>
				<div id='gmap_canvas'></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			</div> <a href='http://maps-website.com/'>www.Maps-website.com</a> 
		</div>
	</div>
</div>
</section>

<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=4c65c7bd8843a7a7357017fa4a4a65fb8506dd59'></script>
<script type='text/javascript'>
function init_map(){
	var myOptions = {zoom:17,
		center:new google.maps.LatLng(48.1442093,17.11099809999996),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);

	marker = new google.maps.Marker({map: map,position: 
		new google.maps.LatLng(48.1442093,17.11099809999996)});

	infowindow = new google.maps.InfoWindow({content:'<strong>Tutorial Restaurant</strong><br>Nedbalova 10<br>811 01 Bratislava 1<br>'});
	google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);}

	google.maps.event.addDomListener(window, 'load', init_map);

</script>


<!-- <div id="map"></div> -->