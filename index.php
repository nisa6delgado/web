<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Nisa Delgado</title>

<link href="node_modules/tailwindcss/dist/tailwind.css" rel="stylesheet">
<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
	<nav id="header" class="fixed w-full z-10 top-0">
		<div id="progress" class="h-1 z-20 top-0" style="background:linear-gradient(to right, black var(--scroll), transparent 0);"></div>
		<div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
			<div class="pl-4">
				<a class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl" href="/">
					Nisa Delgado
				</a>
			</div>

			<div class="block lg:hidden pr-4">
				<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-green-500 appearance-none focus:outline-none">
					<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
						<title>Menu</title>
						<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z">
					</svg>
				</button>
			</div>

			<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20" id="nav-content">
				<ul class="list-reset lg:flex justify-end flex-1 items-center">
					<li class="mr-3">
						<a class="inline-block py-2 px-4 text-gray-900 font-bold no-underline" href="/">Inicio</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/contacto">Contacto</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/portafolio">Portafolio</a>
					</li>
					<li class="mr-3">
						<a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4" href="/charlas">Charlas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container w-full md:max-w-3xl mx-auto pt-20">
		<div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
			<img class="mx-auto w-6/12 rounded-full" src="img/perfil.jpg">

			<p class="py-6 text-justify">Mi nombre es Nisa Delgado. Nací, crecí y vivo en Maracaibo, Venezuela. Tengo 27 años. Soy Técnico en Informática graduado en el Instituto Universitario de Tecnología Readic UNIR en diciembre de 2015.</p>

			<p class="pb-6 text-justify">Desarrollo aplicaciones web con PHP y Laravel, para el frontend utilizo Bootstrap o Tailwind con jQuery, Vue.js o Alpine.js, todo eso sobre bases de datos relacionales como MySQL, SQL Server o SQLite. También he desarrollado aplicaciones móviles en Apache Cordova, MobileUI y jQuery Mobile.</p>

			<p class="pb-6 text-justify">Cuando no estoy programando, estoy rodando en mi bicicleta o moviendo piezas en un tablero de ajedrez.</p>
		</div>
	</div>

	<footer class="bg-white border-t border-gray-400 shadow text-center p-10">
		<a target="_blank" href="https://twitter.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://instagram.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://www.youtube.com/channel/UCTgu94owdYN98yBZQnW0ihA">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-youtube fa-stack-1x fa-inverse"></i>
            </span>
        </a>

        <a target="_blank" href="https://github.com/nisa6delgado">
            <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
            </span>
        </a>
	</footer>

	<script src="js/main.js"></script>
</body>
</html>
