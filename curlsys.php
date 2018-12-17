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

    <div class="content">
    
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