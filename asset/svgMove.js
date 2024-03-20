var chemin1 = document.getElementById('path1');
var chemin2 = document.getElementById('path2');
var chemin3 = document.getElementById('path3');
var chemin4 = document.getElementById('path4');
var chemin5 = document.getElementById('path5');


chemin1.style.transition = 'transform 1.3s ease, opacity 4s ease'; // Animation de transition
chemin1.setAttribute('transform', 'translate(0, 650)');
chemin1.style.opacity = '0'; 
setTimeout(function() {
chemin1.setAttribute('transform', 'translate(0, 0)');
chemin1.style.opacity = '1';
}, 100); 


chemin2.style.transition = 'transform 1.3s ease, opacity 5s ease'; 
chemin2.setAttribute('transform', 'translate(0, -650)'); 
chemin2.style.opacity = '0';
setTimeout(function() {
chemin2.setAttribute('transform', 'translate(0, 0)');
chemin2.style.opacity = '1';
 
}, 100); 

chemin3.style.transition = 'transform 0.8s ease, opacity 2s ease'; 
chemin3.setAttribute('transform', 'translate(-850, 0)'); 
chemin3.style.opacity = '0';
setTimeout(function() {
chemin3.setAttribute('transform', 'translate(0, 0)');
chemin3.style.opacity = '1';

}, 1250); 

chemin4.style.transition = 'transform 0.8s ease, opacity 2s ease'; 
chemin4.setAttribute('transform', 'translate(850, 0)'); 
chemin4.style.opacity = '0';
setTimeout(function() {
chemin4.setAttribute('transform', 'translate(0, 0)');
chemin4.style.opacity = '1';
 
}, 1250); 
// Définir la transition pour l'opacité
chemin5.style.transition = 'opacity 4s ease';

// Réduire l'opacité à 0
chemin5.style.opacity = '0';

// Rétablir l'opacité à 1 après un délai
setTimeout(function() {
    chemin5.style.opacity = '1';
}, 2000); // 1500 millisecondes, correspondant au délai avant de rétablir l'opacité