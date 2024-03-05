<!-- 
    * Autor : Gabriel FINES
    * Copyright 2022 - Gabriel FINES - Tous droit réservés
 -->
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <title>NAPAQARO - Site non-officiel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="img/logo.png">
    </head>
    <body>
        <?php include("php/menu.php")?>
        <div class="main">
            <div class="main_content">
                <div class="main_header">
                    <video autoplay="true" loop="true" muted="true">
                        <source src="img/lunch_-_2339-_original_.mp4">
                        <source src="img/lunch_-_2339-_original_.webm">
                    </video>
                    <img src="img/repas-resto.jpeg" alt="plato repas restaurant">
                    <!-- video:z-index:0; -->
                    <div class="main_title">napaqaro</div> 
                    <!-- style: position:relative; top:100px; font-size: 150px; font-family:vanilla; align-items:center; -->
                    <div class="main_subtitle">La restauration de demain<br>pour manger sainement</div> 
                    <!-- style: position:relative; top: 50px; font-size: 64px; align-items:center; text-shadow: 0px 0px 10px black; -->
                    <div class="scroll-gif">
                        <img src="img/scroll3.gif" alt="gif scroll" loop=infinite>
                    </div>
                    <p>scroll</p>
                </div>
                <div class="main_valeurs" id="valeurs">
                    <div class="main_valeurs_title">les valeurs</div> 
                    <!-- background:image-fixed; font-size:vanilla-->
                    <div class="main_valeurs_content">
                        <div class="valeur_card_1 valeur_card">
                            <!-- background: image convivialité repas -->
                            <div class="valeur_card_1_title valeur_card_title">ambiance conviviale</div>
                            <div class="valeur_card_1_subtite valeur_card_subtitle">Vous pouvez vous retrouver dans dans une <span>ambiance conviviale</span> pour profiter au maximum des personnes qui vous sont le plus cher.</div>
                        </div>
                        <div class="valeur_card_2 valeur_card">
                            <!-- background: image cuisiniers -->
                            <div class="valeur_card_2_title valeur_card_title">savoir-faire</div>
                            <div class="valeur_card_2_subtite valeur_card_subtitle">Nous vous permettons de manger une cuisine de qualité, grâce au <span>savoir-faire</span> de nos équipes diplomées et riche de connaissances techniques.</div>
                        </div>
                            <div class="valeur_card_3 valeur_card">
                            <!-- background: image prix-->
                            <div class="valeur_card_3_title valeur_card_title">rapport qualité-prix</div>
                            <div class="valeur_card_3_subtite valeur_card_subtitle">Nous souhaitons rendre accessible notre qualité à tout le monde, c'est pour cela que nous avons choisis un <span>rapport qualité-prix</span> à la hauteur de tous.</div>
                        </div>
                        <div class="valeur_card_4 valeur_card">
                             <!-- background: image convivialité repas -->
                             <div class="valeur_card_4_title valeur_card_title">être solidaire</div>
                            <div class="valeur_card_4_subtite valeur_card_subtitle">Nous avons l'ambition d'<span>être solidaire</span> pour aider les personnes qui en ont vraiment besoin, en soutenant l'<span>Association Petits Princes</span> depuis 2019.</div>
                        </div>
                    </div>
                </div>
                <div class="main_distinctions" id="distinctions">
                    <div class="main_distinctions_title">les distinctions</div>
                    <!--background:image; font-size:vanilla; text-align:center-->
                    <div class="distinctions_panels">
                        <!-- display:flex; flex-direction:column; -->
                        <div class="distinctions_panel_1">
                            <div class="panel_1_img panel_img">
                                <img src="img/trans-eco.jpeg" alt="transition écologique">
                            </div>
                            <div class="distinctions_panel_1_title panel_title">acteurs d'une transition alimentaire</div>
                            <div class="black_line"></div>
                            <div class="distinctions_panel_1_subtitle panel_subtitle">Nous nous engagons activement dans la transition alimentaire en <span>valorisant les filières locales</span> mais aussi choisissant des <span>produits d'origine française</span> et pour finir, en proposant une <span>offre végétarienne innovante</span>.</div>
                        </div>
                        <div class="distinctions_panel_2">
                            <div class="panel_2_img panel_img">
                                <img src="img/img-ecole-vie.jpeg" alt="école de la vie">
                            </div>
                            <div class="panel_2_title panel_title">école de la vie</div>
                            <div class="black_line"></div>
                            <div class="distinctions_panel_1_subtitle panel_subtitle">Nous aspirons à devenir une véritable <span>école de la vie</span> notamment en créant une ralations uniques avce <span>nos propres bouchers</span>, ainsi que l'engagement à <span>recruter et former plus de 400 alternants</span> mais aussi le fameux soutient à l'<span>association Petits Princes</span>.</div>
                        </div>
                        <div class="distinctions_panel_3">
                            <div class="panel_3_img panel_img">
                                <img src="img/population-francaise.jpg" alt="population francaise">
                            </div>
                            <div class="distinctions_panel_3_title panel_title">servir tous les français</div>
                            <div class="black_line"></div>
                            <div class="distinctions_panel_3_subtitle panel_subtitle">Nous avons comme ambition de servir <span>tous les français</span> en servant plus de 50 millions de repas par an et rendre nos restaurants accessibles à tous.</div>
                        </div>
                        <!-- distinctions_panel_$ : style : padding:0 15px; -->
                        <!-- distinctions_panel_$_title : style : font-weight:bold; font-size:20px; padding:10px 0px; -->
                        <!-- distinctions_panel_$_subtitle : default style-->
                    </div>
                </div>
            </div>
        </div> 
        <?php include("php/footer.php")?>    
    </body>
</html>