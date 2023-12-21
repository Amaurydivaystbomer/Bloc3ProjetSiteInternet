<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="./../css/mainproject.css">
</head>
<body>
    <ul class="navbar">
        <li class="main"><a href="#acceuil">Accueil</a></li>
        <li class="main"><a href="#apropos">A propos</a></li>
        <li class="main"><a href="#competences">Compétences</a></li>
        <li class="main"><a href="#experience">Expérience</a></li>
        <li class="main"><a href="#formation">Formation</a></li>
        <li class="main"><a href="#contact">Contact</a></li>
    </ul>
    <section id="accueil">
    <?php
    require ("acceuil.php")
    ?>
    </section>

    <section id="apropos">
    <?php
    require ("apropos.php")
    ?>
    </section>

    <section id="competences">
        <?php
        require ("competences.php")
        ?>
    </section>

    <section id="experience">
        <?php
        require ("experience.php")
        ?>
    </section>

    <section id="formation">
      
    </section>

    <section id="contact">
       
    </section>
    
   
</section>
</body>
</html>