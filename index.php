<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MROptasia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/mroptasia.css" />
        <link rel="stylesheet" type="text/css" href="css/hover-min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="icon" type="image/png" href="img/favicon-32x32.png">
    </head>
    <body>
        <header class="col" id="h">
            <?php include("navbar.php");?>
            <h1>Votre vision du futur</h1>
            <form method="get" action="https://www.google.com/search" target="_blank">
                <input type="text" name="q" id="search" required placeholder="Dernières actualités" />
                <input type="submit" value="Rechercher" />
            </form>
            <div id="arrow"><a href="#" class="scroll-down"><i class="material-icons">expand_more</i></a></div>
            <div id="arrow"><a href="#" class="scroll-down"><i class="material-icons">expand_more</i></a></div>
        </header>
        <main>
            <section class="col" id="qn">
                <h2 class="titre"><span>QUI SOMMES-NOUS ?</span></h2>
                <div id="qui-somme-nous">
                    <p class="qsn">
                        MR Optasia est une entreprise high tech de Réalité Mixte (MR) innovante et désormais interplanétaire.
                        Nous souhaitons instamment démocratiser la réalité augmentée comme la réalité virtuelle pour cela nous proposons aux PME et aux TPE de s’équiper en casque de MR afin de bouleverser l’expérience d’achat au sein des magasins physiques ou des sites e-commerce.
                        La MR intervient dans divers domaines comme la médecine, l’immobilier, le commerce en tout genre…
                    </p>
                </div>
            </section>
            <div class="row" id="tetes">
                <div class="container row">
                    <div class="row animated  fadeInLeft">
                    <div class="gars col  align-center">
                        <div class="tete hvr-grow" id="arthur"></div>
                        <p>Arthur</p>
                    </div>
                    <div class="gars col  align-center">
                        <div class="tete hvr-grow" id="hannah"></div>
                        <p>Hannah</p>
                    </div>
                    </div>
                    <div class="row animated fadeInRight">
                    <div class="gars col  align-center">
                        <div class="tete hvr-grow" id="balt"></div>
                        <p>Balthazar</p>
                    </div>
                    <div class="gars col align-center">
                        <div class="tete hvr-grow" id="val"></div>
                        <p>Valentin</p>
                    </div>
                    </div>
                </div>
            </div>
            <section class="col align-center" id="dif">
                <h2 class="titre"><span>Quelle différence</span></h2>
                <div id="type" class="row">
                    <div class="AR R s12 m4 l4 animated  zoomIn" >
                        <h3>AR</h3>
                        <div>
                            <p>
                               La réalité augmentée (en anglais, AR) désigne une interface virtuelle, en 2D ou en 3D, qui vient enrichir la réalité en y superposant des informations complémentaires.
                            </p>
                        </div>
                    </div>
                    <div class="MR R s12 m4 l4 animated  zoomIn">
                        <h3>MR</h3>
                        <div>
                            <p>
                                La réalité mixte est un terme désignant les dispositifs de visualisations de contenu en 3D par le biais d’un casque dédié. Par définition, ce terme est un mix entre réalité augmentée et réalité virtuelle. Bien que plus proche de la réalité augmentée, elle reste différente par la technologie qu’elle embarque.
                            </p>
                        </div>
                    </div>
                    <div class="VR R s12 m4 l4 animated  zoomIn">
                        <h3>VR</h3>
                        <div>
                            <p>
                                La réalité virtuelle (en anglais, virtual reality ou VR) est une technologie qui permet de plonger une personne dans un monde artificiel créé numériquement. Elle ne doit pas être confondue avec la réalité augmentée
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col align-center" id="actu">
                <h2 class="titre"><span>Actualité</span></h2>
                <div class="row animated  bounceInLeft">
                    <div class="l6 s11 m6">
                        <h3>Comment la VR/AR participent à l'amélioration de l’expérience utilisateur?</h3>
                        <p>L’expérience utilisateur ou UX (User Interface)  est essentielle au sein du web, elle participe activement au “virtual reality business” tout comme “l’augmented reality business”.
                            Nous ne nous en rendons pas compte mais l’UX devient un facteur important...</p>
                    </div>
                    <div class="l1 m1 s1">
                        <a href="articles.php"><i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
                <div class="row animated  bounceInRight">
                    <div class="l6 s11 m6">
                        <h3>Qu’est-ce que la réalité augmentée (AR)?</h3>
                        <p>La réalité augmentée est la superposition d’éléments (il peut s’agir du son, d’images en 2D ou 3D) calculée par un système informatique en temps réel.Il est possible d’incruster des objets virtuels dans une séquence d’images.</p>
                    </div>
                    <div class="l1 m1 s1">
                        <a href="articles.php"><i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
                <div class="row animated  bounceInLeft">
                    <div class="l6 s11 m6">
                        <h3>L’AR a un futur prometteur</h3>
                        <p>Vous le savez sûrement, l’AR est un système qui va révolutionner le monde. Les médecins vont pouvoir apprendre l’anatomie non plus sur des livres mais en visualisant des corps en AR en 3D ce qui leur permettra de...</p>
                    </div>
                    <div class="l1 m1 s1">
                        <a href="articles.php"><i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>

            </section>
        </main>
        <?php include("footer.php"); ?>
        <script type="text/javascript" src="js/mroptasia.js"></script>
    </body>
</html>