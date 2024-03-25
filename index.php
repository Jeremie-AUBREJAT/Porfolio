<?php include('asset/inc/head.php'); ?>

<body class="bg-gradient-to-r from-gray-900 to-gray-700">

    <?php include('asset/inc/header.php'); ?>

    <div id="content">
        <div class="mx-2 bg-gray-100 grid grid-cols-1">
            <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 justify-center items-center">
                <img src="asset/img/profil.png" alt="" class="mx-auto w-1/2 sm:w-1/6 xl:1">
                <p class="text-2xl font-mono-bold italic ml-4 sm:ml-8 md:ml-12 lg:ml-16 xl:ml-20">Bienvenue sur AJ-WEB<br> Je suis Jérémie AUBREJAT.<br>
                    Développeur web freelance passionné, <br>je m'engage à transformer vos idées en réalité.</p>
            </div>

            <div class="mx-10 flex flex-wrap justify-center">
                <div class="w-1/2 sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 p-8 relative">
                    <div class="bg-gray-100 p-12">
                        <a href="#competences"><img src="asset/img/fond1.png" alt="Fond 1" class="h-1/3 p-4 filter blur-sm transition-all duration-300 ease-in-out hover:blur-none">
                            <img src="asset/img/competences.png" alt="Compétences" class="absolute top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-20">
                        </a>
                    </div>

                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 p-8 relative">
                    <div class="bg-gray-100 p-12">
                        <a href="#contact"><img class="h-1/3 p-4 filter blur-sm transition-all duration-300 ease-in-out hover:blur-none" src="asset/img/fond2.png" alt="Portfolio">
                            <img src="asset/img/contact.png" alt="Contact" class="absolute top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-20">
                        </a>
                    </div>

                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 p-8 relative">
                    <div class="bg-gray-100 p-12">
                        <a href="#portfolio"><img class="h-1/3 p-4 filter blur-sm transition-all duration-300 ease-in-out hover:blur-none" src="asset/img/fond3.png" alt="Contact">
                            <img src="asset/img/portfolio.png" alt="porfolio" class="absolute top-1/4 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-20">
                        </a>
                    </div>

                </div>
            </div>






        </div>


        <div id="competences" class="mt-12 mx-2 grid grid-cols-1 ">
            <!-- Section de compétences -->
            <section class="py-16 bg-gray-50">

                <div id="Left" class=" container mx-auto text-center">
                    <img src="asset/img/competences.png" alt="icone competences" class="mx-auto w-20">
                    <h2 class="inline-block px-4 py-2  text-black rounded-lg text-2xl font-semibold italic">Compétences</h2>

                    <div class="py-12 mx-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-8">
                        <!-- compétences front -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">Développement Frontend</h3>
                            <div class="mt-4 flex items-center">

                                <img src="asset/img/html.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar  h-3 w-11/12 bg-green-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center">

                                <img src="asset/img/css.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar  h-3 w-11/12 bg-green-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-4 flex items-center">

                                <img src="asset/img/javascript.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar3  h-3 w-11/12 bg-green-500 rounded"></div>
                                </div>
                            </div>


                        </div>
                        <!-- competences back -->
                        <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">Développement Backend</h3>
                            <div class="mt-8 flex items-center">

                                <img src="asset/img/php.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar2  h-3 w-1/4 bg-blue-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-12 flex items-center">

                                <img src="asset/img/laravel.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar2  h-3 w-11/12 bg-blue-500 rounded"></div>
                                </div>
                            </div>
                            <div class="mt-10 flex items-center">

                                <img src="asset/img/sql.png" alt="icone html" class="mr-4 w-7 sm:w-10">
                                <div class="w-full h-3 bg-gray-200 rounded">
                                    <div class="progress-bar2  h-3 w-11/12 bg-blue-500 rounded"></div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">framework Frontend</h3>
                            <p class="italic">TAILWIND</p>
                            <div class="w-full bg-gray-200 rounded">
                                <div class="progress-bar3 mt-2 h-3 w-5/6 bg-green-500 rounded"></div>
                            </div>
                        </div>
                        <div class="bg-gray-100 p-5 rounded-lg shadow-2xl">
                            <h3 class="text-lg font-semibold italic">CMS</h3>
                            <p class="italic">Wordpress</p>
                            <div class=" w-full bg-gray-200 rounded">
                                <div class="progress-bar3 mt-2 h-3 w-5/6 bg-green-500 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- Section de portfolio -->
        <section id="portfolio" class="py-16">
            <div class="py-16 bg-gray-50">
                <div class="container text-center mx-auto">
                <img src="asset/img/portfolio.png" alt="icone competences" class="mx-auto w-20">
                    <h2 class="inline-block px-4 py-2  text-black rounded-lg text-2xl font-semibold italic">Portfolio</h2>
                    <!-- projets -->

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8 mt-8">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                            <h3 class="mt-">Votre Projet</h3>
                            <img src="asset/img/votreprojet.png" class="w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                            <p class="mt-">Le site Web dont vous avez toujours rêvé</p>
                        </div>
                        <div id="Right2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                            <a href="https://jeremie.dwwm2324.fr" target="_blank">atliee.fr
                                <img src="asset/img/sans titre 2.jpg" class="sliders block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                <img src="asset/img/sans titre 4.jpg" class="sliders1 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                            </a>
                            <p>site vitrine "Création d' objets de décoration"</p>
                        </div>
                        <div id="Left2" class="bg-gray-100 p-4 rounded-lg shadow-2xl">
                            <a href="https://jeremie.dwwm2324.fr/LePtitFut" target="_blank">leptitfut.fr
                                <img src="asset/img/sans titre 3.jpg" class="sliders2 block w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                <img src="asset/img/sans titre 5.jpg" class="sliders3 hidden w-full mx-auto rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                                <p>site vitrine "Bar à bières, vins et spiritueux"</p>
                        </div>
                    </div>
                </div>


                <div class=" flex justify-center items-center h-2/3 lg:mx-20 mt-8 rounded-b-lg">
                    <div class="bg-gray-100 p-4 rounded-lg shadow-2xl w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 text-center mb-8">
                        <h3 class="text-lg font-semibold"><a href="https://github.com/Jeremie-AUBREJAT" target="_blank">Github</a></h3>
                        <a href="https://github.com/Jeremie-AUBREJAT" target="_blank">
                            Github
                            <img src="asset/img/github.jpg" class="w-1/4 mx-auto mt-2 rounded-lg transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none shadow-xl" alt="Description de l'image">
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section de contact -->
        <div class="py-16">
            <div class="container mx-auto text-center">
                <div><a href="contact.php#contact" class="font-semibold inline-block px-4 py-2 border border-gray-700 text-black bg-gray-400 rounded-xl hover:bg-gray-300 transition duration-300 shadow-xl transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">Contactez-moi</a></div>
                <p class="mt-4">Prêt à démarrer un projet ensemble ?</p>
                <!-- Ajoutez ici un formulaire de contact ou vos informations de contact -->
            </div>
        </div>

        <!-- Pied de page -->

        <div id="contact" class="container mx-auto my-8 p-8 bg-gray-100 shadow-md rounded-md">
            <h2 class="text-2xl font-semibold italic mb-4">Contact</h2>
            <form id="contactForm" onsubmit="return validateForm()" class="space-y-4">
                <div class="flex flex-col">
                    <label for="nom" class="text-m font-medium">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Tapez votre nom" required class="border p-2 rounded-md">
                </div>

                <div class="flex flex-col">
                    <label for="prenom" class="text-m font-medium">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" placeholder="Tapez votre prénom" required class="border p-2 rounded-md">
                </div>

                <div class="flex flex-col">
                    <label for="email" class="text-m font-medium">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Tapez votre E-mail" required class="border p-2 rounded-md">
                </div>

                <div class="flex flex-col">
                    <label for="message" class="text-m font-medium">Message :</label>
                    <textarea id="message" name="message" rows="4" placeholder="Tapez votre message" required class="border p-2 rounded-md"></textarea>
                </div>

                <p id="errorMessage" class="error"></p>

                <button type="submit" class="bg-gray-700 text-white p-2 rounded-md hover:bg-gray-600 transition">Envoyer</button>
            </form>
    

    <script>
        function validateForm() {
            // Récupérer les valeurs des champs
            var nom = document.getElementById("nom").value;
            var prenom = document.getElementById("prenom").value;
            var email = document.getElementById("email").value;
            var message = document.getElementById("message").value;

            // Vérifier si les champs sont vides
            if (nom === "" || prenom === "" || email === "" || message === "") {
                document.getElementById("errorMessage").innerHTML = "Tous les champs doivent être remplis.";
                return false;
            }

            // Vérifier si l'email est valide
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById("errorMessage").innerHTML = "Veuillez saisir une adresse e-mail valide.";
                return false;
            }

            // Réinitialiser le message d'erreur
            document.getElementById("errorMessage").innerHTML = "";

            // Vous pouvez ajouter ici le code pour envoyer le formulaire par e-mail (côté serveur)

            // Empêcher le formulaire de se soumettre normalement
            return false;
        }
    </script>
    </div>
    <?php include('asset/inc/footer.php'); ?>
    
</body>

</html>