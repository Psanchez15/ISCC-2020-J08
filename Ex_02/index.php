<!DOCTYPE html>
<HTML>
    <body>
    <HEAD>
    <meta charset="utf-8">
    <TITLE>Summer Code Camp</TITLE>
    
    </HEAD>   
    <header>

        <h1>Summer Code Camp</h1>
        <div class="navigation">
        <a class="nav-link active" href="?page=1#">Accueil</a>
        <a class="nav-link" href="?page=2#">Programme</a>
        <a class="nav-link" href="?page=3#">Contact</a>
        </div>
    </header>
<h2> 
    
    <?php 

    
        if (!isset($_GET['page'])) {echo "Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ? Pour mieux comprendre cette révolution, venez apprendre les rudiments du code et découvrir les bases de la programmation des sites internet. Destiné aux étudiants, ce code camp vous initiera en un mois aux principaux langages de programmation Web (HTML-CSS et PHP), vous dévoilera le fonctionnement d’outils comme Google ou Paypal et vous éclaira sur la sécurité des sites internet."
        ;}
        elseif ($_GET['page']==2) {echo "
            <tr>date</tr> &nbsp; &#160;&nbsp; &#160;<tr>Programme</tr>
        </br> <tr>Jour 1</tr>&nbsp; &#160;&nbsp; &#160;<tr></tr> Accueil des apprenants Installations et Conférences</tr>
    </br> <tr>Jour 2</tr>&nbsp; &#160;&nbsp; &#160;<tr>Html-1</tr>
    </br> <tr>Jour 3</tr>&nbsp; &#160;&nbsp; &#160;<tr>Html-2</tr>
    </br> <tr>Jour 4</tr>&nbsp; &#160;&nbsp; &#160;<tr>Html-3 et Conférence</tr>
    </br> <tr>Jour 5</tr>&nbsp; &#160;&nbsp; &#160;<tr>Php-1</tr>
    </br> <tr></tr>
    </br> <tr></tr>
    </br> <tr>Jour 6</tr>&nbsp; &#160;&nbsp; &#160;<tr>Php-2</tr>
    </br> <tr>Jour 7</tr>&nbsp; &#160;&nbsp; &#160;<tr>Php-3</tr>
    </br> <tr>Jour 8</tr>&nbsp; &#160;&nbsp; &#160;<tr>Php-4</tr>
    </br> <tr>Jour 9</tr>&nbsp; &#160;&nbsp; &#160;<tr>Php-5</tr>
    </br> <tr>Jour 10</tr>&nbsp; &#160;&nbsp; &#160;<tr>SQL-1</tr>
    </br> <tr></tr>
    </br> <tr></tr>
    </br> <tr>Jour 11</tr>&nbsp; &#160;&nbsp; &#160;<tr>SQL-2</tr>
    </br> <tr>Jour 12</tr>&nbsp; &#160;&nbsp; &#160;<tr>SQL-3 et Conférence</tr>
    </br> <tr>Jour 13</tr>&nbsp; &#160;&nbsp; &#160;<tr>Projet MyDevBlog</tr>
    </br> <tr>Jour 14</tr>&nbsp; &#160;&nbsp; &#160;<tr>Projet MyDevBlog et Conférence</tr>
    </br> <tr>Jour 15</tr>&nbsp; &#160;&nbsp; &#160;<tr>Projet MyDevBlog</tr>
    </br> <tr></tr>
    </br> <tr></tr>
    </br> <tr>Jour 16</tr>&nbsp; &#160;&nbsp; &#160;<tr>Soutenance Projet MyDevBlog</tr>
        ";}
        elseif ($_GET['page']==3) {echo"formulaire";}
        else {
            echo "error 404"
        ;}
    
    
    ?>
</h2>
</body>


<footer>
        <a href="http://www.epitech.eu"><img src="logo_epitech.png" alt="logo_epitech.png"> </a>
    </footer>
</html>