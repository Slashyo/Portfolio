/* Definition des CONSTANTES  */

const modeSwitch = document.getElementById('mode-switch');
const body = document.body;
const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu');
const menuClose = document.querySelector('.menu-close');

/* Fonction pour le DARK MODE */

modeSwitch.addEventListener('click', function() {
  body.classList.toggle('dark-mode');
  if (body.classList.contains('dark-mode')) {
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

  