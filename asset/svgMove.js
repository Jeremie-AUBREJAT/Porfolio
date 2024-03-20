var chemin1 = document.getElementById('path1');
var chemin2 = document.getElementById('path2');
var chemin3 = document.getElementById('path3');
var chemin4 = document.getElementById('path4');

// Animation du chemin1 : arrivée depuis le haut
chemin1.style.transition = 'transform 1.5s ease'; // Animation de transition
chemin1.setAttribute('transform', 'translate(0, 650)'); // Déplacement initial vers le haut
setTimeout(function() {
  chemin1.setAttribute('transform', 'translate(0, 0)');}, 100); // Délai avant de déplacer à l'emplacement d'origine

// Animation du chemin2 : arrivée depuis le bas
chemin2.style.transition = 'transform 1.5s ease'; // Animation de transition
chemin2.setAttribute('transform', 'translate(0, -650)'); // Déplacement initial vers le bas
setTimeout(function() {
chemin2.setAttribute('transform', 'translate(0, 0)');
 // Déplacement final à l'emplacement d'origine
}, 100); // Délai avant de déplacer à l'emplacement d'origine // Déplacement final à l'emplacement d'

chemin3.style.transition = 'transform 0.8s ease'; // Animation de transition
chemin3.setAttribute('transform', 'translate(-850, 0)'); // Déplacement initial vers le bas
setTimeout(function() {
chemin3.setAttribute('transform', 'translate(0, 0)');
 // Déplacement final à l'emplacement d'origine
}, 1500); // Délai avant de déplacer à l'emplacement d'origine // Déplacement final à l'emplacement d'

chemin4.style.transition = 'transform 0.8s ease'; // Animation de transition
chemin4.setAttribute('transform', 'translate(850, 0)'); // Déplacement initial vers le bas
setTimeout(function() {
chemin4.setAttribute('transform', 'translate(0, 0)');
 // Déplacement final à l'emplacement d'origine
}, 1500); // Délai avant de déplacer à l'emplacement d'ori