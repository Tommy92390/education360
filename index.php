<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="public/assets/css/old/style_2.css">
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" > -->
</head>
<body>
<!--    --><?php /*include('header_3.php');
    */?>
    <main>
        <div id="first-block">
        <h1 class="first-title">Pour nous la réussite passe par:</h1>
        <ol>
            <li>Connaitre le niveau de l’élève et fixer des objectifs :</li>
            <li>Organiser et planifier le travail :</li>
            <li>Fournir un travail régulier au quotidien :</li>
            <li>Maintien dans la durée de cette régularité de travail :</li>
            <li>Suivre et analyser l’évolution</li>
            <li>Ajuster les paramètres de l’organisation et de la méthodologie</li>
        </ol>
        <img class="first-picture" src="public/assets/img/mbr-648x429.jpg" alt="photo 1">
        <button class="btn btn-primary first-button">En savoir plus</button>
        </div>  
        <div class="second-block">
            <div id="first-e">
                <h2 class="second-title">Soutien scolaire</h2>
                <div class="first-e">
                    <img class="img" src="public/assets/img/second_block/mbr-1-700x467.jpg" alt="image1">
                    <div class="first-text">
                        <p><b>Aides aux devoirs</b> Après l’école, ils profitent de deux heures de jeux découverte en anglais ou français. Nos ateliers utilisent la méthode Montessori pour favoriser leur développement. Des activités basées sur les cinq sens favorisent leur mise en mouvement. Elles stimulent leurs capacités et favorisent leur apprentissage pour améliorer leur rapport au monde.</p>
                        <button class="first-button">3 cours</button>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div id="second-e">
                <img class="img" src="public/assets/img/second_block/mbr-2-700x466.jpg" alt="image2">
                <div class="first-text">
                    <p><b>Cours particuliers à domicile ou en ligne</b> Vers un progrès rapide. À travers notre accompagnement personnalisé, notre objectif est de faire éclore le potentiel de chaque enfant : nos enseignants accompagnent l’élève dans son apprentissage en lui fournissant une solide méthodologie. Une évaluation complète préalable permet de déterminer la pédagogie la plus adaptée.</p>
                    <button class="first-button">En savoir plus!</button>
                    <a href="#">Read more</a>
                </div>                
            </div>
            <div id="third-e">
                <img class="img" src="public/assets/img/second_block/mbr-3-700x466.png" alt="image3">
                <div class="first-text">
                    <p><b>Stages intensifs durant les vacances scolaires</b> Vers un progrès rapide  À travers notre accompagnement personnalisé, notre objectif est de faire éclore le potentiel de chaque enfant : nos enseignants accompagnent l’élève dans son apprentissage en lui fournissant une solide méthodologie. Une évaluation complète préalable permet de déterminer la pédagogie la plus adaptée à l'élève.</p>
                    <button class="first-button">En savoir plus!</button>
                    <a href="#">Read more</a>
                </div>                
            </div>
            <div id="fourth-e">
                <img class="img" src="public/assets/img/second_block/mbr-4-700x467.jpg" alt="image4">
                <div class="first-text">
                    <p><b>Coaching scolaire et Méthodologie</b> La formation : la clé de l’avenir Vous souhaitez évoluer dans votre carrière, décrocher un poste ou vous réorienter? Découvrez nos cours intensifs pour adultes. Nos formations professionnelles garantissent votre réussite en vous permettant de renforcer vos connaissances pour obtenir le diplôme que vous convoitez. Tout le monde a besoin de se former.</p>
                    <button class="first-button">En savoir plus!</button>
                    <a href="#">4 courses</a>
                </div>                
            </div>
        </div>
        <div class="third-block">
            <div class="images">
                <img class="img1" src="public/assets/img/third_block/mbr-740x500.png" alt="ABC">
                <img class="img2" src="public/assets/img/third_block/mbr-640x424.jpg" alt="enfant solitaire">
            </div>
            <div class="presentation">
                <h3>Une grande équipe</h3>
                <p>Née en 2008, Education360 propose un accompagnement à l’apprentissage pour tous, sans exception. Pourquoi ? Car notre philosophie est qu’être formé est un droit pour chacun : peu importe l’âge, les moyens financiers et les diplômes,  notre équipe vous offre des services de qualité appropriés à tous les profils. Nous accompagnons les tout petits dans leur processus d’éveil, en Anglais ou en Français, tout en améliorant les compétences scolaires des enfants et adolescents grâce à nos programmes de qualité reconnus. Grâce à notre armée de super nounous, vous aurez également la possibilité de choisir la personne la plus adaptée à vos enfants.</p>
            </div>
        </div>
        <!-- Fourth-block -->
        <div class="row">
            <div class="column">
                <div class="container">
                <img src="public/assets/img/fourth_block/mbr-1-319x240.jpg" alt="francais" class="image">
                    <div class="overlay">
                        <div class="text">Cours de français</div>
                    </div>
                </div>
            </div> 
            <div class="column">
                <div class="container">
                    <img src="public/assets/img/fourth_block/mbr-2-319x240.png" alt="infirmier" class="image">
                        <div class="overlay">
                            <div class="text">Préparation au diplôme d'infirmier</div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="column">
                <div class="container">
                    <img src="public/assets/img/fourth_block/mbr-3-300x300.jpg" alt="aide-soignant" class="image" id="aide-soignant">
                        <div class="overlay">
                            <div class="text">Préparation au diplôme d'aide-soignant</div>
                        </div>
                    </div>
                </div>
            <div class="column">
                <div class="container">
                    <img src="public/assets/img/fourth_block/mbr-4-500x500.png" alt="programmation" class="image" id="programmation">
                        <div class="overlay">
                            <div class="text">Programmation et Web développeur</div>
                        </div>
                    </div>
                </div>
        <div>
            <h4>Garde d'enfants à domicile en anglais</h4>
            <p>Pour parler l’anglais dès le plus jeune âge. Notre nounou anglophone communiquera en anglais : votre enfant sera bilingue.</p>
            <button>Read more</button>
            <img class="fifth-block" src="public/assets/img/fifth_block/mbr-1.jpg" alt="garde-d-enfant">
        </div>
        <div>
            <h5>Cours à domicile</h5>
            <p>Un cours particulier permet à l'élève de reconnaître ses capacités dans une matière donnée, et d'avoir un soutien personnel et individuel. ... En effet, le professeur particulier va progressivement et rapidement établir une relation de confiance entre lui et son élève.</p>
            <button>Read more</button>
            <img class="fifth-block" src="public/assets/img/fifth_block/mbr-2.jpg" alt="cours-a-domicile">
        </div>
        <!-- sixth-block  -->
        <div>
            <h6>Pourquoi choisir education360</h6>
            <div class="row">
            <div class="column">
            Des progrès garantis
                <img src="public/assets/img/sixth_block/mbr-1.jpg" alt="des-progres-garantis">
                <p>Jeudi 2 avril, La Ministre du Travail, Muriel Pénicaud a annoncé que le gouvernement allait prendre en charge « à 100% tous les coûts de formation » des travailleurs au chômage partiel. Durant cette période de confinement, la Grande Classe se mobilise pour vous proposer de nombreuses formations.</p>
            </div>  
            </div>          
            <div class="row">
            <div class="column">
            50% de crédit d’impôt
            <img src="public/assets/img/sixth_block/mbr-2.jpg" alt="50%-credits-impots">
                <p>La méthode Montessori est une pédagogie éducative basée sur la liberté de l'enfant dans le choix de ses activités, l'apprentissage par l'expérimentation et l'autonomie. Développée par Maria Montessori, l'une des premières femmes médecins en Italie, la pédagogie Montessori est une méthode d'éducation alternative basée sur la confiance en soi, l'autonomie, les expérimentations et l'apprentissage en douceur. Ses objectifs : favoriser l'éveil, les sens, l'ouverture au monde et le développement de l'enfant tout en respectant son rythme d'apprentissage et ses centres d'intérêts.</p>
            </div>
            </div>
            <div class="row">
            <div class="column">
            Les nouvelles formations
                <img src="public/assets/img/sixth_block/mbr-3.jpg" alt="les-nouvelles-formations">
                <p>La formation professionnelle maintient sa croissance exponentielle. De plus en plus de Français décident de se lancer, que ce soit auprès d’une université, d’une école ou d’un organisme spécialisé… Mais avant de débuter un tel cursus, il est nécessaire de bien réfléchir et de définir ses objectifs. En effet, le choix d'une formation doit être mûrement réfléchi afin d'apporter satisfaction par la suite. un panel de formation est disponible sur education360</p>
            </div>
            </div>
        </div>             
        <!-- seventh-block     -->
        <!-- <div class="row"> -->
            <!-- <div class="column"> -->
                <div class="seventh_block">
                    <img class="img_seventh_block" src="public/assets/img/seventh_block/mbr-1.jpg" alt="la_garderie">
                    <img class="img_seventh_block" src="public/assets/img/seventh_block/mbr-2.jpg" alt="nos_cours">
                    <img class="img_seventh_block" src="public/assets/img/seventh_block/mbr-3.jpg" alt="nos_formations">
                </div>
            <!-- </div>             -->
        <!-- </div>   -->
        <!-- eight-block                                         -->
    </main>
<!--    --><?php /*include('footer.php');
    */?>
    <script src="public/assets/js/nav_bar.js"></script>
    <!-- <script src="assets/js/fourth_block.js"></script> -->
    <!-- <script src="assets/js/fourth_block_2.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
    <!-- <script src="assets/js/bootstrap.min.js"></script> -->
</body>
</html>