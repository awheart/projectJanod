<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- feuille de style css -->
    <link rel="stylesheet" href="assets/css/form_qualification.css">
    <title>formulaire de qualification</title>
</head>
<body>
    <!--HEADER-->
    <header>
        <nav>
            <ul>
                <li><a href="https://www.janod.com/fr/"><img class="logo" src="assets/images/logo.png" alt=""></a></li>
                <img class="marque" src="assets/images/janod.png" alt="">
            </ul>
        </nav>
    </header>
    <!--BODY-->
    <main>
        <h1>Faisons connaissance !</h1>

        <img class="fondqualification" src="assets/images/fondqualification.jpeg" alt="">

        <h3>Afin d'affiner vos recommandations, veuillez répondre aux 5 questions suivantes :</h3>

        <form action="remerciement_qualification.php" method="post">
            <label for="nom">Nom *</label><br>
            <input type="text" name="nom" id="nom" required><br/>

            <label for="prenom">Prenom *</label><br>
            <input type="text" name="prenom" id="prenom" required><br/>

            <label for="dep">Département *</label><br>
            <input type="number" name="departement" id="dep" required><br/>

            <label for="tranchemin">L'âge de/des enfant(s) est compris entre</label>
            <input type="number" id="tranchemin" min="0" max="18"> 
            <label for="tranchemax">et</label> 
            <input type="number" id="tranchemax" min="0" max="18"> <br>

            <!-- sexe enfant -->
            <!-- <label for="sexe">Sexe de/des l'enfant(s):</label><br>
            <select name="pets" id="sexe">
                <option value="">--Sélectionner le sexe de/des l'enfant(s)--</option>
                <option value="Garcon">Garçon</option>
                <option value="Fille">Fille</option>
                <option value="Garçons">Garçons</option>
                <option value="Filles">Filles</option>
                <option value="Fille&Garçon">Fille(s) et Garçon(s)</option>
            </select><br/> -->


            <div class="apprentissage">
                <h4>Vos types d'apprentissage préférés (sélectionner au minimum 1 type en cliquant sur les images)</h4>
                <input type="checkbox" id="construire&concevoir">
                <label for="construire&concevoir"><img src="assets/images/icone1.png" alt=""><p>Construire & concevoir</p></label>
                <input type="checkbox" id="decouvrir&experimenter">
                <label for="decouvrir&experimenter"><img src="assets/images/icone2.png" alt=""><p>découvir & expérimenter</p></label>                
                <input type="checkbox" id="echanger&partager">
                <label for="echanger&partager"><img src="assets/images/icone3.png" alt=""><p>Échanger & partager</p></label><br/>
                <input type="checkbox" id="imaginerinventer&creer">
                <label for="imaginerinventer&creer"><img src="assets/images/icone4.png" alt=""><p>Imaginer, inventer & créer</p></label>
                <input type="checkbox" id="lireecrire&compter">
                <label for="lireecrire&compter"><img src="assets/images/icone5.png" alt=""><p>Lire, écrire & compter</p></label>
                <input type="checkbox" id="manipuler&manier">
                <label for="manipuler&manier"><img src="assets/images/icone6.png" alt=""><p>Manipuler <br> & créer</p></label><br/>
                <input type="checkbox" id="marchercourir&bouger">
                <label for="marchercourir&bouger"><img src="assets/images/icone7.png" alt=""><p>Marcher, courir & bouger</p></label>
                <input type="checkbox" id="memoriser&assimiler">
                <label for="memoriser&assimiler"><img src="assets/images/icone8.png" alt=""><p>Mémoriser & assimiler</p></label>
                <input type="checkbox" id="touchervoir&entendre">
                <label for="touchervoir&entendre"><img src="assets/images/icone9.png" alt=""><p>Toucher, voir & entendre</p></label><br/>
            </div>
            
            <!-- reste à coder -->
            <input type="checkbox" id="verif" required>
            <label for="verif">J'ai relu et vérifié que les informations sont correctes *</label><br>
    
            <button type="submit">Je valide</button>
        </form>
    </main>

    <!--FOOTER-->
    <footer>
        <div class="reseau">
            <h2>Nos réseaux sociaux !</h2>
            <ul>
                <li>
                    <a href="https://www.facebook.com/Janod.page/">Rejoindre notre page Facebook </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCy--7dZ2nDOI9wavSbPBJwQ">S'abonner à notre chaîne Youtube</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/janod_france/">Nous follow sur Instagram</a>
                </li>
            </ul>
        </div>
        <img class="imgfooter" src="assets/images/logo_footer.png" alt="Logo">
        <p>Copyright © 2021 Janod - Tous droits réservés - <a href="https://www.janod.com/fr/content/3-cgv" target="_blank">CGV</a> - <a href="https://www.janod.com/fr/content/2-mentions-legales" target="_blank">Mentions Légales</a></p>
    </footer>
</body>
</html>