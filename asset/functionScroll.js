document.addEventListener('DOMContentLoaded', function() {
    var content = document.getElementById('content');
    var lastScrollPosition = 0;
    var ticking = false;

    function updateContent(scrollPos) {
        // Récupère la hauteur totale du document
        var documentHeight = Math.max(
            document.body.scrollHeight, document.documentElement.scrollHeight,
            document.body.offsetHeight, document.documentElement.offsetHeight,
            document.body.clientHeight, document.documentElement.clientHeight
        );

        // Détermine la hauteur maximale de translation possible
        var maxTranslate = documentHeight - window.innerHeight;
        console.log('Scroll Position:', scrollPos);
        console.log('Document Height:', documentHeight);
        console.log('Max Translate:', maxTranslate);
    
        // Ajuste la valeur de translation si nécessaire
        var translateValue = 'translateY(' + Math.max(-scrollPos, -maxTranslate) + 'px)';
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
