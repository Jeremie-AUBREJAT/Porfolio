/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [ "./src/**/*.{html,php,js,css}", // Pour les fichiers HTML, PHP et JS dans le répertoire src
  "./asset/**/*.{html,php,js,css}", // Pour les fichiers HTML dans le répertoire asset
  "./asset/**/*.{html,php,js,css}", // Pour les fichiers CSS dans le répertoire asset
  "./asset/inc/**/*.{html,php,js,css}",],
  theme: {
    extend: {},
  },
  plugins: [],
}

