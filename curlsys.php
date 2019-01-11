<?php
include 'header.php';
include 'navbar.php';
?>


<main>
    <div class="curlsys-header">
    <div class="curlsys-logo">

    </div>

    <div id="outline-img">
        
    </div>
    </div>

    <div class="curlsys-omschrijving-grid">
        <div class="omschrijving">
            <p>CURLSYS® is de geregistreerde merknaam voor het revolutionaire gepatenteerde krullenknip concept van Brian McLean. Dit concept wordt vanuit MCLEAN SYSTEMS® via seminars aangeboden.
            <br>Het systeem bestaat uit speciale technieken en scharen, die dynamische krullen en verschillende variaties creëren.
            </p>
        </div>
        <div class="voordelen-culsys">
            <h2>Voordelen CURLSYS®</h2>
            <ul>
                <li>Het perfecte antwoord voor alle klanten met natuulijk krullend haar.</li>
                <li>Creëert sterke of zachte krullen met structuur.</li>
                <li>Verdubbelt het volume zonder 'slicen', behoudt de natuurlijke kwaliteit van het haar.</li>
                <li>Creëert 'directional swing' en beweging in zelfs stijl haar.</li>
                <li>Versterkt de veerkracht en vitaliteit.</li>
                <li>Geeft gepermanent haar een nieuw leven en een natuurlijke uitstraling.</li>
            </ul>
        </div>
    </div>

    <div class="curlsys-link">
        
    </div>

</main>

<script>
    window.onload = function () {

        var foto = document.getElementById('outline-img');

    function changeImage() {   
        var BackgroundImg = ["images/1x.png",
            "images/2x.png",
            "images/3x.png",
            "images/4x.png"
        ];
        var i = Math.floor((Math.random() * 4));
        foto.style.backgroundImage = 'url("' + BackgroundImg[i] + '")';

    }
    window.setInterval(changeImage, 3000);
}
</script>

<?php
include 'footer.php'
?>