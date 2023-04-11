<?php  require_once('navbar.php');  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/kontakt.css">
    <title>Hamburger Navbar</title>
</head>

<body>
    <!-- Navbar -->
    <?php  require_once('navbar.php');  ?>


    
    <div class="content">

        <!-- Kontaktcontainer -->
        <div class="kontaktContainer">
            <!-- Kontaktblock -->
            <div class="kontaktContent">
                <div class="headline">
                    <h3>Kontaktieren Sie mich</h3>
                    <p> für ein unverbindliches Erstgespräch.</p>
                </div>

                <!-- Subcontainer mit Symbol -->
                <div class="innerContactContainer">
                        <div class="element">
                            <div class="elementImg">
                                <img src="../img/kontakt/map-pin-white.png" alt="">
                            </div>
                            <h4>ADRESSE</h4>
                            <p>Birkenweg 200 <br>
                             4794 Kopfing im Innkreis</p>
                        </div>

                        <div class="element">
                            <div class="elementImg">
                                <img src="../img/kontakt/Handy.png" alt="">
                            </div>
                            <h4>Handy</h4>
                            <p>+43 681 10 25 39 54</p>
                        </div>

                        <div class="element">
                            <div class="elementImg">
                                <img src="../img/kontakt/Email.png" alt="">
                            </div>
                            <h4>Mail</h4>
                            <a href="mailto:info@diebrückenbauerin.com">info@diebrückenbauerin.com</a>
                        </div>

                        <div class="element">
                            <div class="elementImg">
                                <img src="../img/kontakt/Kalender.png" alt="">
                            </div>
                            <h4>Termin</h4>
                            <a href="#">Hier buchen</a>
                        </div>
                </div>
            </div>

            <!-- Horizontale Linie -->
            <hr>
            
            <!-- Karte -->
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3147.5715489681206!2d13.657258660609081!3d48.441530686961045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4774644660404995%3A0xedd2dd03b866ed44!2sBirkenweg%20200%2C%204794%20Kopfing%20im%20Innkreis!5e0!3m2!1sde!2sat!4v1674232669623!5m2!1sde!2sat" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        


    </div>        

   
    












</body>


<!-- Footer -->
<?php require_once('footer.php') ?>
</html>