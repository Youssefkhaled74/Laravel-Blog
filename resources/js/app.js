import './bootstrap';
postCss("resources/css/tailwind.css", "public/css", [
    require("tailwindcss")
   
   ])
.sass('resources/scss/bootstrap.scss', 'public/css')
.sourceMaps();
