<?php  require_once('navbar.php');  ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sectionLayout.css">
    <title>Hamburger Navbar</title>
</head>

<body>
    <!-- Navbar -->
    <?php  require_once('navbar.php');  ?>

    <div class="headerBild">
        <!-- Overlay -->
        <div class="headerBild_Overlay"></div>

            <!-- BG-BridgeTrees -->
            <div class="headerBild_Text">
                <h1>Mediation Hausensteiner</h1>
                <hr>
                <h2>mit Gespür zur Einigkeit</h2>
            </div>
        
    </div>

    <!-- Content -->
    <div class="content">

        <!-- ContentBOX 1-->
        <div class="contentBox">
            <!-- InnerContent -->
            <div class="contentInner">
                <!-- Section 2 Spaltig -->
                <div class="introColumn">
                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing.</h3>

                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi nisi temporibus esse, ullam blanditiis, cupiditate fugit facilis natus, itaque voluptatem expedita incidunt odit aliquam non iure qui voluptatibus quia officiis id quibusdam similique vitae fugiat.</p>

                    <a href="#" id="introButton">Mehr anzeigen</a>

                </div>
            </div>
        </div>


        <!-- ContentBOX 2-->
        <div class="contentBox section1 ">
                

            <!-- Section 2 Spaltig -->
            <div class="section1">
                <div class="section1Inner">
                    <h3>Einleitung</h3>

                    <div class="flex ">
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

   
</body>


<!-- Footer -->
<?php require_once('footer.php') ?>
</html>