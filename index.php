<?php
require 'header.php';
require 'navbar.php';
?>
<head>
  <link rel="stylesheet" href="styles/slider.css">
</head>

<main>

<div class="slider" id="slider">
		<div class="slItems">
      <div class="slItem" style="background-image: url('images/background1.jpg');">
			</div>
			<div class="slItem" style="background-image: url('images/background2.jpg');">
			</div>
			<div class="slItem" style="background-image: url('images/background3.jpg');">
			</div>
      <div class="slItem" style="background-image: url('images/background4.jpg');">
			</div>
      <div class="slItem" style="background-image: url('images/background5.jpg');">
			</div>
      <div class="slItem" style="background-image: url('images/background6.jpg');">
			</div>
      <div class="slItem" style="background-image: url('images/background7.jpg');">
			</div>
      <div class="slItem" style="background-image: url('images/background8.jpg');">
			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="scripts/slider.min.js"></script>
	<script>
	$(function(){
		$('#slider').rbtSlider({
			'dots': true,
			'arrows': true,
			'auto': 8
		});
	});
	</script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
















    <!-- <div class="wide-img"></div> -->
    <div id="description">
        <div id="gc1">
            <div id="desc-container">
               <h2>De HaarPiraat</h2>
               <p>
               Welkom bij De HaarPiraat.
Gezelligheid en aandacht voor het haar én de klanten, daar draait het om bij de HaarPiraat. 
De prikkel om het elke dag goed te doen, is voor mij vanzelfsprekend en voor u een zekerheid om uw haar tip-top in orde te hebben en te houden.
<br><br>
Ook een volume behandeling en/of verlenging met de extensions van "Great Lengths" behoren tot de mogelijkheden!!!
<br><br>
Of knippen volgens de CURLSYS®-methode. 
CURLSYS® is de geregistreerde merknaam voor de gepatenteerde krullen knip techniek ontwikkeld door Brian McLean. Het systeem behelst speciale technieken en scharen waarmee dynamische krullen in verschillende variaties geknipt kunnen worden.
<br><br>
Wilt u iemand verrassen met een cadeaubon? 
Ze zijn verkrijgbaar met diverse bedragen of behandelingen.

               </p>
            </div>
        </div>
        <div id="gc2">
            <div id="img-container">
                <img src="images/omschrijving.png" alt="">
            </div>
        </div>
    </div>

</main>

<script src="scripts/slider.js"></script>

<?php
require 'footer.php';
?>



