<?php  require_once('navbar.php');  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sectionLayout.css">
    <link rel="stylesheet" href="../css/kreis_layout.css">
    <title>Hamburger Navbar</title>
</head>

<body>
    <!-- Navbar -->
    <?php  require_once('navbar.php');  ?>

    <div class="headerBild">
        <!-- Overlay -->
        <div class="headerBild_Overlay"></div>

            
        
    </div>

    <!-- Content -->
    <div class="content">

        <!-- ContentBOX 1-->
        <div class="contentBox">

                <h3>Grundpfeiler der Mediation</h3>

                <div class="zeitContainer">
        
                    <!-- Zeile -->
                    <div class="timeCont_row">

                        <div class="timeConSide" id="side1">
                            <div class="left_content">
                            <img src="../img/abschlusskappe.png" alt="">
                            <h4>SICHER</h4>
                            <p>Kein ungewisser Ausgang - im Gegensatz zu einem gerichtlichen Verfahren haben die Parteien immer die volle Kontrolle über den Prozess. Keine Gerichtsverhandlung, sondern eine geschützte und vertrauliche Atmosphäre</p>
                            </div>

                            <hr id="right_content">
                        </div>

                        <div class="timeRow_center">
                            <div class="circle" id="circle1">
                            <h3>SICHER</h3>
                            </div>
                        </div>

                        <div class="timeConSide"></div>

                    </div>
                    
                    <!-- Zeile -->
                    <div class="timeCont_row">

                        <div class="timeConSide" > </div>

                        <div class="timeRow_center">
                            <div class="circle" id="circle2">
                            <h3>SCHNELL</h3>
                            </div>
                        </div>

                        <div class="timeConSide" id="side2">
                            <hr id="right_content">
                            <div class="left_content">
                            <img src="../img/abschlusskappe.png" alt="">
                            <h4>SCHNELL</h4>
                            <p>Es ist schneller abgeschlossen als ein Gerichtsverfahren</p>
                            </div>

                        </div>

                    </div>

                    <!-- Zeile -->
                    <div class="timeCont_row">

                        <div class="timeConSide" id="side3">
                            <div class="left_content">
                            <img src="../img/abschlusskappe.png" alt="">
                            <h4>GÜNSTIG</h4>
                            <p>Es ist kostengünstiger, weil geringere/keine Gerichtskosten und Anwaltskosten anfallen</p>
                            </div>

                            <hr id="right_content">
                        </div>

                        <div class="timeRow_center">
                            <div class="circle" id="circle3">
                            <h3>GÜNSTIG</h3>
                            </div>
                        </div>

                        <div class="timeConSide"></div>

                    </div>


                    <!-- Zeile -->
                    <div class="timeCont_row">

                        <div class="timeConSide" > </div>

                        <div class="timeRow_center">
                            <div class="circle" id="circle4">
                            <h3>VERSTÄNDNIS</h3>
                            </div>
                        </div>

                        <div class="timeConSide" id="side4">
                            <hr id="right_content">
                            <div class="left_content">
                            <img src="../img/abschlusskappe.png" alt="">
                            <h4>VERSTÄNDNIS</h4>
                            <p>Zufriedenstellende, nachhaltige Lösung für alle Beteiligten – Alle Anliegen und Bedürfnisse werden berücksichtigt.</p>
                            </div>

                            
                        </div>

                    </div>
                    
                    <!-- Hintergrundlinie -->
                    <div class="bg-line"></div>

                </div>
        </div>


        <!-- ContentBOX 2-->
        <div class="contentBox section1 ">
                
        <div class="contentInner_TwoColumn">
                <!-- Section 2 Spaltig -->
                <div class="section1">
                    <div class="section1Inner">
                        <h3>Einleitung</h3>

                        <div class="flex align_center column_gap flex_start">
                            <!-- Links -->
                            <div class="sec1Item">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex ratione commodi quod recusandae molestias, sit facere aliquam, ea consectetur porro voluptatum tempora optio nobis asperiores eligendi illum cupiditate dolore quasi esse repellat id vitae. Laudantium, ea asperiores. Maiores, ullam atque! Laborum nostrum vero reprehenderit qui molestias impedit dolorem non a.</p>
                            </div>

                            <!-- Rechts -->
                            <div class="sec1Item">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo dolore suscipit voluptates, non doloribus autem sint ab expedita aliquam consequatur sed adipisci quia deleniti accusamus aperiam odio molestias, amet quam repellat dolor. Quaerat commodi ipsa delectus a impedit necessitatibus dolores.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>        

   
</body>


<!-- Footer -->
<?php require_once('footer.php') ?>
<script src="../js/kreis_layout.js"></script>
</html>