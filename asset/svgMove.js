function lancerAnimation() {
    var chemin1 = document.getElementById('path1');
    var chemin2 = document.getElementById('path2');
    var chemin3 = document.getElementById('path3');
    var chemin4 = document.getElementById('path4');
    var chemin5 = document.getElementById('path5');
    
    // Préparation initiale des chemins
    chemin1.style.transform = 'translate(0, 650px)';
    chemin2.style.transform = 'translate(0, -650px)';
    chemin3.style.transform = 'translate(-850px, 0)';
    chemin4.style.transform = 'translate(850px, 0)';
    chemin5.style.transform = 'translate(0, 650px)';
   

    // Définition des transitions
    chemin1.style.transition = 'transform 1.3s ease, opacity 2s ease';
    chemin2.style.transition = 'transform 1.3s ease, opacity 2s ease';
    chemin3.style.transition = 'transform 0.8s ease, opacity 2s ease';
    chemin4.style.transition = 'transform 0.8s ease, opacity 2s ease';
    chemin5.style.transition = 'transform 0.8s ease,opacity 3s ease';

    // Démarrage de l'animation après un délai de 5 secondes
    setTimeout(function() {
        // Déclenchement des animations
        chemin1.style.transform = 'translate(0, 0)';
        chemin1.style.opacity = '1';
        chemin2.style.transform = 'translate(0, 0)';
        chemin2.style.opacity = '1';
        setTimeout(function() {
            chemin3.style.transform = 'translate(0, 0)';
            chemin3.style.opacity = '1';
            chemin4.style.transform = 'translate(0, 0)';
            chemin4.style.opacity = '1';
            setTimeout(function() {
                chemin5.style.transform = 'translate(0, 0)';
                chemin5.style.opacity = '1';
            }, 1350);
        }, 1250);
    }, 500);
}

// Appel de la fonction après le chargement du DOM
document.addEventListener("DOMContentLoaded", lancerAnimation);



//fonction scroll on header
document.addEventListener('DOMContentLoaded', function() {
    var content = document.getElementById('content');
    var lastScrollPosition = 0;
    var ticking = false;
  
    function updateContent(scrollPos) {
      var translateValue = 'translateY(' + (-scrollPos) + 'px)';
      content.style.transform = translateValue;
    }
  
    window.addEventListener('scroll', function() {
      lastScrollPosition = window.scrollY;
  
      if (!ticking) {
        window.requestAnimationFrame(function() {
          updateContent(lastScrollPosition);
          ticking = false;
        });
  
        ticking = true;
      }
    });
  });


  window.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('header');

    function setHeaderBackground() {
        const orientation = window.matchMedia("(orientation: portrait)").matches ? 'portrait' : 'landscape';
        const imageUrl = orientation === 'portrait' ? 'asset/img/back2 - Copie.png' : 'asset/img/back2.png';
        header.style.backgroundImage = `url('${imageUrl}')`;
        
        // Rafraîchir la page seulement si l'orientation de l'appareil change
        if (window.orientationChanged) {
            window.location.reload();
            window.orientationChanged = false; // Réinitialiser la variable
        }
    }

    setHeaderBackground(); // Définir l'image de fond initiale lors du chargement de la page

    // Écouter les changements d'orientation de l'appareil et changer l'image de fond en conséquence
    window.addEventListener('orientationchange', function () {
        window.orientationChanged = true; // Indiquer que l'orientation de l'appareil a changé
        setHeaderBackground();
    });
});


// window.addEventListener('DOMContentLoaded', function () {
//   const svg = document.getElementById('svg1');

//   function setSvgSize() {
//       const orientation = window.matchMedia("(orientation: portrait)").matches ? 'portrait' : 'landscape';
//       if (orientation === 'portrait') {
//           svg.classList.remove('w-3/4');
//           svg.classList.add('h-3/4');
//       } else {
//           svg.classList.remove('h-3/4');
//           svg.classList.add('w-3/4');
//       }
//   }

//   setSvgSize('w-3/4'); // Définir la taille initiale de l'élément SVG lors du chargement de la page

//   // Écouter les changements d'orientation de l'appareil et ajuster la taille de l'élément SVG en conséquence
//   window.addEventListener('orientationchange', function () {
//       setSvgSize();
//   });
// });

