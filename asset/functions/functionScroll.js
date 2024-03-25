document.addEventListener('DOMContentLoaded', function() {
    var content = document.getElementById('content');
    var lastScrollPosition = 0;
    var ticking = false;

    function updateContent(scrollPos) {
        // Récupère la hauteur de la fenêtre
        var windowHeight = window.innerHeight;

        // Détermine la hauteur du contenu
        var contentHeight = content.offsetHeight;

        // Détermine la translation maximale possible
        var maxTranslate = Math.max(contentHeight - windowHeight, 0);

        // Ajuste la valeur de translation
        var translateValue = 'translateY(' + Math.max(-scrollPos, -maxTranslate) + 'px)';
        content.style.transform = translateValue;

        // Ajuste la hauteur du contenu pour éviter que le body ne soit étiré à l'infini
        content.style.height = Math.max(contentHeight, windowHeight) + 'px';
    }

    function requestTick() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                updateContent(lastScrollPosition);
                ticking = false;
            });

            ticking = true;
        }
    }

    window.addEventListener('scroll', function() {
        lastScrollPosition = window.scrollY;
        requestTick();
    });

    window.addEventListener('resize', function() {
        // Met à jour la translation lors du redimensionnement de la fenêtre
        requestTick();
    });

    // Appel initial pour ajuster la position du contenu
    updateContent(window.scrollY);
});
