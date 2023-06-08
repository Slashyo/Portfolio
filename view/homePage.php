<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menuDarkMode.css">
    <link rel="stylesheet" href="css/skills.css">
    <script src="js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Accueil</title>
</head>
<body>
<div id="gridmenu">
    <?php
include 'include/menuDarkMode.php';
    ?>
<div id="tomBik">
    <h1>TOM BIK</h1>
    <img id="photoHome" src="img/service-developpement-web.png" alt="">
    <h1>WEB DEVELOPER</h1>
</div>

<div id="tomBikRes">
    <h1>TOM BIK</h1>
    <img id="photoHome1" src="img/service-developpement-web.png" alt="">
    <h1>WEB DEVELOPER</h1>
</div>
<hr id="first">
<div id="childBlock2">
<p>Je suis un jeune développeur web en formation, passionné par les technologies et les possibilités créatives que le développement web offre.</br></br>Actuellement, je suis en train de perfectionner mes compétences en matière de conception et de développement de sites web, en utilisant des technologies telles que HTML, CSS, JavaScript, PHP, SQL.</br></br><!--Mon désir d'apprendre et d'explorer de nouvelles idées m'anime constamment, tout en travaillant dur pour créer des sites web fonctionnels, intuitifs et esthétiquement plaisants.</br></br> Je suis confiant dans mes compétences et impatient de travailler avec des clients potentiels pour créer des solutions de développement web innovantes et personnalisées.</br></br>!--> Mon portfolio est une vitrine de mes compétences et de mon expérience en matière de développement web, démontrant ma capacité à créer des sites web fonctionnels et esthétiquement agréables pour une variété de projets et de clients.</p>
</div>
<hr id="deux">
<div class="container">
    <h1 class="title-skills">Skills</h1>
    <div class="bar">
      <div class="skill">HTML & CSS</div>
      <div class="bar-outer">
        <div class="speech-bubble html">90%</div>
        <div class="bar-inner ht"></div>
      </div>
    </div>
    <div class="bar">
      <div class="skill">PHP</div>
      <div class="bar-outer">
        <div class="speech-bubble jquery">50%</div>
        <div class="bar-inner jq"></div>
      </div>
    </div>
    <div class="bar">
      <div class="skill">SQL</div>
      <div class="bar-outer">
        <div class="speech-bubble photo">75%</div>
        <div class="bar-inner ph"></div>
      </div>
    </div>
    <div class="bar">
      <div class="skill">JS</div>
      <div class="bar-outer">
        <div class="speech-bubble illustrator">20%</div>
        <div class="bar-inner il"></div>
      </div>
    </div>
    <div class="bar">
      <div class="skill">XML</div>
      <div class="bar-outer">
        <div class="speech-bubble indesign">85%</div>
        <div class="bar-inner in"></div>
      </div>
    </div>
</div>
<hr id="trois">
<div id="childBlock">
<h3>LAST PROJECTS</h3>
<a href="?page=travaux" target="_blank" ><img src="img/Capture_d’écran_2023-03-13_112644.png" width="150px" height="auto" alt=""></a>
</div>

<div id="childBlock1">
<h3>CONTACT ME</h3>
<a href="?page=contact" target="_blank"><img src="img/Capture_d’écran_2023-03-13_112644.png" width="150px" height="auto" alt=""></a>
</div>

    <?php
include 'include/footer.php'
    ?>
</div>
</body>
</html>