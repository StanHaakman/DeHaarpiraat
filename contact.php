<?php include 'header.php'?>
<?php include 'navbar.php'?>
    <div class="contactform">

        <h1 class="brand">Neem contact op</h1>
            <div class="wrapper">
                <div class="company-info">
                    <h3 id="groot-contact">Wilt u snel contact, dan graag bellen</h3>
                    <ul>
                        <!-- <li id="groot-contact">Wilt u snel contact, dan graag bellen</li> -->
                        <li>Adres:</li>
                        <li>Piraat 12</li>
                        <li>1671 RX Medemblik </li>
                        <li>Telefoon (0227) 724544 </li>
                        <li>Mail: <a id="a-contact-mail" href="mailto:info@dehaarpiraat.nl">info@dehaarpiraat.nl</a></li>
                        <br>
                        <li>Maandag:                    08:30 - 17:30</li>
                        <li>Dinsdag:                         Gesloten</li>
                        <li>Woensdag: 08:30 - 13:00 / 18:00 - 22:00  </li>
                        <li>Donderdag:                 18:00 - 22:00 </li>
                        <li>Vrijdag:                    08:30 - 17:30</li>
                        <li>Zaterdag:                        Gesloten</li>
                        <li>Zondag:                          Gesloten</li>
                    </ul>
                </div>
                <div class="contact">
                    <h3>Email ons</h3>
                    <form action="private/proces_verzenden.php" method="post">

                        <p>
                            <label>Naam</label>
                            <input type="text" name="naam" required>
                        </p>

                        <p>
                            <label>Achternaam</label>
                            <input type="text" name="achternaam" required>
                        </p>

                        <p>
                            <label>Email</label>
                            <input type="email" name="email" required>
                        </p>

                        <p>
                            <label>Telefoon</label>
                            <input type="text" name="telefoon" required>
                        </p>

                        <p class="full">
                            <label>Message</label>
                            <textarea name="message" id="" cols="30" rows="5" required></textarea>
                        </p>
                        <p class="full">
                            <button type="submit" name="submit" value="Versturen">Versturen</button>
                        </p>
                    </form>
                </div>
            </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9491.52932155905!2d5.099476839083594!3d52.761788722690106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82b57f8b33e81f37!2sDe+HaarPiraat!5e0!3m2!1snl!2snl!4v1543491225228"
            class="google-maps" frameborder="0" allowfullscreen></iframe>

    <iframe class="framebox inherit-locale google-360 "
            src="https://www.google.com/maps/embed?pb=!4v1541593605780!6m8!1m7!1sCAoSLEFGMVFpcE9Lc0Z3RlpNclljajlhYVFyVVQxb2dyaGMwM1FFRWJIR0V0NGVE!2m2!1d52.761783875067!2d5.099458182356!3f112.78530989877571!4f-6.884206240899701!5f0.7820865974627469"
            id="google_maps--view">
    </iframe>


<?php 
include 'footer.php'
?>
