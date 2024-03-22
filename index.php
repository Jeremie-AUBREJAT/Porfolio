<?php include('./asset/inc/head.php'); ?>

<body class="bg-gradient-to-r from-gray-900 to-gray-700">

    <?php include('./asset/inc/header.php'); ?>
    
    <div id="content">
        <div>


            <div id="Left2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                <a href="https://jeremie.dwwm2324.fr/LePtitFut" target="_blank">leptitfut.fr
                    <img src="asset/img/sans titre 3.jpg" class="sliders2 block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                    <img src="asset/img/sans titre 5.jpg" class="sliders3 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                    <p>site vitrine "Bar à bières, vins et spiritueux"</p>
            </div>





        </div>
        <div>


            <div id="Left2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                <a href="https://jeremie.dwwm2324.fr/LePtitFut" target="_blank">leptitfut.fr
                    <img src="asset/img/sans titre 3.jpg" class="sliders2 block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                    <img src="asset/img/sans titre 5.jpg" class="sliders3 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                    <p>site vitrine "Bar à bières, vins et spiritueux"</p>
            </div>





        </div>
        <div>


            <div id="Left2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                <a href="https://jeremie.dwwm2324.fr/LePtitFut" target="_blank">leptitfut.fr
                    <img src="asset/img/sans titre 3.jpg" class="sliders2 block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                    <img src="asset/img/sans titre 5.jpg" class="sliders3 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                    <p>site vitrine "Bar à bières, vins et spiritueux"</p>
            </div>





        </div>
    </div>
    <!-- <script>
  window.addEventListener('scroll', function() {
    var header = document.getElementById('header');
    var content = document.getElementById('content');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 0) {
      content.style.marginTop = -scrollPosition + 'px';
    } else {
      content.style.marginTop = '0';
    }
  });
</script> -->
<script>
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
</script>
</body>