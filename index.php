<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venez simulez un pret personnel à hauteur de 500€ minimum cher crédit Lédonien.">

    <!-- script -->
    <script type="text/javascript" src="js/main.js" async></script>

    <!-- styles CSS -->
    <link  href="css/fonts.css" rel="stylesheet">
    <link  href="css/reset.css" rel="stylesheet">
    <link  href="css/styles.css" rel="stylesheet">

    <title>Le Crédit Lédonien</title>
</head>
<body>
<div id="wrapper">
    

    <!-- début de la page -->
    <div id="page">

        <!-- header -->
        <header class="header">
             <?php include 'includes/header.php'; ?>
        </header>

        <!-- debut du main -->
        <main id="main">
            <?php
            if (!empty($_GET['page'])) {
                    switch ($_GET['page']) {
                    case 'about': include 'includes/about.php'; break;
                    default : include 'includes/home.php';
                    }
                }else{
                    include 'includes/home.php';
                }
            ?>
        </main>
        <!-- fin du main -->

        <!-- navigation du bas -->
        <nav id="bottomNav">
            <a class="linkNavBottom" href="?page=home" title="Accueil">ACCUEIL</a>
            <a class="linkNavBottom" href="?page=about" title="qui sommes nous">QUI SOMMES NOUS ?</a>
            <a class="linkNavBottom" href="?page=offres" title="nos offres">NOS OFFRES</a>
            <a class="linkNavBottom" href="?page=contact">CONTACTEZ-NOUS</a>
        </nav>
        
        <!-- footer -->
        <footer id="footer">
            <?php include 'includes/footer.php'; ?>
        </footer>
    </div>
    <div id="btPolygone"><a href="#wrapper"><img src="img/polygone.svg" alt="top"></a></div>
    <!-- fin de la page -->
    
    <!-- menu latéral                                                                            !!!!!!!!!!!!!!!!!! bouton toggle a regler --> 
        <nav id="lateralNav">
            <div id="btOpenMenu">
                <div id="trait1"></div>
                <div id="trait2"></div>
                <div id="trait3"></div>
            <span id="Menu">Menu</span> 
            </div>    
            <div class="blockNavCenter" >
                <button>FR</button>
                <button id='call'><img id="pictoCall" src="img/call.svg" alt="appel"></button>
                <button><img id="pictoLoupe" src="img/loupe.svg" alt="rechercher"></button>
            </div>
            <div id="scroll">SCROLL</div>
            <div id="traitScroll"></div>
                
        </nav>

        <div id="menuOverlay">                                                                   <!-- changer le nom de l'id -->
            <div class="header">
                <?php include 'includes/header.php'; ?>
            </div> 
                <div id="sidenavLinks">
                    <a href="?page=home" title="Accueil">ACCUEIL</a>
                    <a href="?page=about" title="qui sommes nous">QUI SOMMES NOUS?</a>
                    <a href="?page=offres" title="nos offres">NOS OFFRES</a>
                    <a href="?page=contact">CONTACTEZ-NOUS</a>
                </div>
        </div>

        <div id="boxShadow"></div>
    </div>
    </body>
</html>
