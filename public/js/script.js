/* Definition des CONSTANTES  */

const modeSwitch = document.getElementById('mode-switch');
const body = document.body;
const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');
const menuClose = document.querySelector('.menu-close');

/* Fonction pour le DARK MODE */

// Initialisation de l'état du mode sombre
let DarkMode = false;

// Vérification si l'état du mode sombre existe déjà dans le localstorage
if (localStorage.getItem('DarkMode') !== null) {
  DarkMode = localStorage.getItem('DarkMode') === 'true';
  body.classList.toggle('dark-mode', DarkMode);
  if (DarkMode) {
    modeSwitch.classList.remove('dark-mode');
    modeSwitch.classList.add('light-mode');
  } else {
    modeSwitch.classList.remove('light-mode');
    modeSwitch.classList.add('dark-mode');
  }
}

// Fonction de commutation du mode sombre
modeSwitch.addEventListener('click', function() {
  body.classList.toggle('dark-mode');
  DarkMode = body.classList.contains('dark-mode');
  localStorage.setItem('DarkMode', DarkMode.toString());
  if (DarkMode) {
    modeSwitch.classList.remove('dark-mode');
    modeSwitch.classList.add('light-mode');
  } else {
    modeSwitch.classList.remove('light-mode');
    modeSwitch.classList.add('dark-mode');
  }
});

/* Fonction pour le MENU */

menuToggle.addEventListener('click', function() {
    menu.classList.toggle('show');
    menuToggle.classList.toggle('open');
    menu.classList.contains('show');
});
  
  
if (menuClose) {
  menuClose.addEventListener('click', function() {
    menu.classList.remove('show');
    menuToggle.classList.remove('open');
  });
}

// Fonction pour les boites interactif 'TUTORIELS'

const moreInfoLinks = document.querySelectorAll('.card .more-info');

moreInfoLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const card = e.target.closest('.card');
    if (card !== null) {
      const extraInfo = card.querySelector('.extra-info');
      if (extraInfo !== null) {
        extraInfo.style.display = extraInfo.style.display === 'block' ? 'none' : 'block';
        link.classList.toggle('clicked');
      }
    }
  });
});

// Skills

var skills = {
  ht: 90,
  jq: 50,
  sk: 90,
  ph: 75,
  il: 20,
  in: 85,
  fl: 75
};

$.each(skills, function(key, value) {
  var skillbar = $("." + key);

  skillbar.animate(
    {
      width: value + "%"
    },
    3000,
    function() {
      $(".speech-bubble").fadeIn();
    }
  );
}); 




  