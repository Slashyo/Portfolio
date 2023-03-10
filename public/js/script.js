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




  